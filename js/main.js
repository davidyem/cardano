$(document).ready(function () {
    $('#encrypt').click(
        function () {
            sendAjaxForm('resencrypt', 'ajax_form1', './php/encrypt.php');
            return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url: url, //url страницы (action_ajax_form.php)
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект
        success: function (response) { //Данные отправлены успешно
            result = JSON.parse(response);
            $('#resencrypt').html('<span id="result">Результат шифрування: </span><span id="value"> ' + result.textencrypt + '</span><br>');
            document.getElementById('text1').value = "";
            document.getElementById('text2').value = result.textencrypt;
            // $('#resencrypt').html(response);
        },
        error: function (response) { // Данные не отправлены
            $('#resencrypt').html('Помилка. Дані не відправлені.');
        }
    });
    return false;
}

$(document).ready(function () {
    $('#decrypt').click(
        function () {
            sendAjaxForm1('resdecrypt', 'ajax_form2', './php/decrypt.php');
            return false;
        }
    );
});

function sendAjaxForm1(result_form, ajax_form, url) {
    $.ajax({
        url: url, //url страницы (action_ajax_form.php)
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект
        success: function (response) { //Данные отправлены успешно
            result = JSON.parse(response);
            $('#resdecrypt').html('<span id="result">Результат дешифрування: </span><span id="value">' + result.textdecrypt + '</span>');
        },
        error: function (response) { // Данные не отправлены
            $('#resdecrypt').html('Помилка. Дані  не відправлені.');
        }
    });
}
