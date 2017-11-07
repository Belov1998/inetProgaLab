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

        $arrayFields = [
    'imia' => filter_input(INPUT_POST,'imia'),
    'avto' => filter_input(INPUT_POST, 'avto'),
    'nomer' => filter_input(INPUT_POST,'nomer'),
   // 'e-mail' => filter_input(INPUT_POST,'e-mail')
   ];

// проверка всех полей на пустоту
foreach ($arrayFields as $fieldName => $oneField) {
    if ($oneField == '' || !isset($oneField)) {
        $errorContainer[$fieldName] = 'Поле обязательно для заполнения';
    }
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
