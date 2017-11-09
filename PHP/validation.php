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
// массив для хранения ошибок
$errorContainer = array();
// полученные данные
// @var $_POST type 
//$imia=$_POST['imia'];
$arrayFields = [
        
    'imia' => filter_input(INPUT_POST,'imia'),
    'avto' => filter_input(INPUT_POST, 'avto'),
    'nomer' => filter_input(INPUT_POST,'nomer'),
    'email' => filter_input(INPUT_POST,'email')
];

// проверка всех полей на пустоту
foreach ($arrayFields as $fieldName => $oneField) {
    if ($oneField == '' || !isset($oneField)) {
        $errorContainer[$fieldName] = 'Поле обязательно для заполнения';
    }
}
if(!preg_match('/^([a-z]+)?([a-z0-9-_\.]+)@([a-z]+)?(.[a-z]{2,5}).([a-z]{2,3})$/', $arrayFields['email'])){
    //'Е-Майл не корректный!'
    $errorContainer['email'] ='Е-Майл не корректный';
}
if(!preg_match('/^[0-9]{11}$/', $arrayFields['nomer'])) {
     $errorContainer['nomer'] ='Номер введен не верно';
}

if(!preg_match('/^[А-ЯЁ][а-яё]+$/u', $arrayFields['imia'])) {
     $errorContainer['imia'] ='Проверте имя';
}
//   echo json_encode(array('result' => 'success'));
// делаем ответ для клиента
if (empty($errorContainer)) {
    // если нет ошибок сообщаем об успехе
    echo json_encode(array('result' => 'success'));
} else {
    // если есть ошибки то отправляем
    echo json_encode(array('result' => 'error', 'text_error' => $errorContainer));
}
