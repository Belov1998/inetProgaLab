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
$arrayFields = ['imia' => $_POST['imia'],
    'avto' => $_POST['avto'],
    'nomer' => $_POST['nomer'],
    'e-mail' => $_POST['e-mail']
   ];

// проверка всех полей на пустоту
foreach ($arrayFields as $fieldName => $oneField) {
    if ($oneField == '' || !isset($oneField)) {
        $errorContainer[$fieldName] = 'Поле обязательно для заполнения';
    }
}


// делаем ответ для клиента
if (empty($errorContainer)) {
    // если нет ошибок сообщаем об успехе
    echo json_encode(array('result' => 'success'));
} else {
    // если есть ошибки то отправляем
    echo json_encode(array('result' => 'error', 'text_error' => $errorContainer));
}
