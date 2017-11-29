<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of validation
 *
 * @author Alexander
 */

//
//


// массив для хранения ошибок
$errorContainer = array();
// полученные данные

$arrayFields = [
        
    'imia' => filter_input(INPUT_POST,'imia'),
    'avto' => filter_input(INPUT_POST, 'avto'),
    'nomer' => filter_input(INPUT_POST,'nomer'),
    'email' => filter_input(INPUT_POST,'email')
];


if(!preg_match('/^([a-z]+)?([a-z0-9-_\.]+)@([a-z]+)?(.[a-z]{2,5}).([a-z]{2,3})$/', $arrayFields['email'])){
    //'Е-Майл не корректный!'
    $errorContainer['email'] ='*Е-Майл не корректный';
}
if(!preg_match('/^[0-9]{11}$/', $arrayFields['nomer'])) {
     $errorContainer['nomer'] ='*Номер введен не верно';
}

if(!preg_match('/^[А-ЯЁ][а-яё]+$/u', $arrayFields['imia'])) {
     $errorContainer['imia'] ='*Проверте имя';
}

// проверка всех полей на пустоту
foreach ($arrayFields as $fieldName => $oneField) {
    if ($oneField == '' || !isset($oneField)) {
        $errorContainer[$fieldName] = '*Поле обязательно для заполнения';
    }
}
//   echo json_encode(array('result' => 'success'));
// делаем ответ для клиента


   
 
   






if (empty($errorContainer)) {
    echo json_encode(array('result' => 'success'));
     // если нет ошибок сообщаем об успехе
    

 
    $user = 'root';
    $pass = '';
    $dbname = 'avtoservis';
    $db = new mysqli('localhost', $user, $pass, $dbname) ;
      mysqli_query($db, 'set names utf8');
    if(mysqli_connect_errno())
    {
        exit("Ошибка подключения к базе данных MySQL: Сервер база данных не доступен!<br>
        Проверте параметры подключения к базе данных.");
    }
  
    $result=$db->prepare("INSERT INTO zayavki (imia,avto,nomer,email) 
  "."VALUES ('".$arrayFields['imia']."',
  '".$arrayFields['avto']."',
  '".$arrayFields['nomer']."',
  '".$arrayFields['email']."')");
 $result->execute(); 
  if(!$result){ exit("Ошибка выполнения SQL запроса!");}
 
  
  //$id = $db->prepare();
//$results=$db->prepare("select * from zayavki where id=".$id.";");
 // $row = mysqli_fetch_array($results);
  require_once( "generationPDF.php" );
    $gen=new generationPDF();
    $gen->gen($arrayFields['imia'] , $arrayFields['avto'],$arrayFields['nomer']);
   //$gen->gen($row['id'],$row['imia'], $row['avto'],$row['nomer']);
} else {
    // если есть ошибки то отправляем
    echo json_encode(array('result' => 'error', 'text_error' => $errorContainer));
}

