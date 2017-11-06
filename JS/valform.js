/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    $('#form_test').submit(function () {
        // убираем класс ошибок с инпутов
        $('input').each(function () {
            $(this).removeClass('error_input');
        });
        // прячем текст ошибок
        $('.error').hide();

        // получение данных из полей
        var imia = $('#imia').val();
        var avto = $('#avto').val();
        var nomer = $('#nomer').val();
        var email = $('#e-mail').val();

        $.ajax({
            // метод отправки 
            type: "POST",
            // путь до скрипта-обработчика
       //     url: "../PHP/validation.php",
       url: "../index.php",
dataType: "json",
            // какие данные будут переданы
            data: {
                'imia': imia,
                'avto': avto,
                'nomer': nomer,
                'e-mail': email
            },
            // тип передачи данных
            
            // действие, при ответе с сервера
            success: function (data) {
                // в случае, когда пришло success. Отработало без ошибок
                if (data.result === 'success') {
                    alert('форма корректно заполнена');
                    
                    // в случае ошибок в форме
                } else {
                    alert('форма не корректно заполнена');
                    // перебираем массив с ошибками
                    for (var errorField in data.text_error) {
                        // выводим текст ошибок 
                        $('#' + errorField + '_error').html(data.text_error[errorField]);
                        // показываем текст ошибок
                        $('#' + errorField + '_error').show();
                        // обводим инпуты красным цветом
                        $('#' + errorField).addClass('error_input');
                    }
                }
            },
        error: function() {
            
                    alert('форма не заполнена');
        }
            
        });
        // останавливаем сабмит, чтоб не перезагружалась страница
        return false;
    });
});
