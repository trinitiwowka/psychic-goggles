<?php
    $surname = $_POST['surname'];
	$name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $auto = $_POST['auto'];
    $skill = $_POST['skill'];
    $phone = $_POST['phone'];
    $admin_email="mkoltunm@yandex.ru";
    $message .= "<tr>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя</b></td>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'>$name</td>" .
        "</tr>".
		"<tr>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Фамилия</b></td>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'>$surname</td>" .
        "</tr>".
		"<tr>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Отчество</b></td>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'>$patronymic</td>" .
        "</tr>".
        "<tr>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Авто</b></td>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'>$auto</td>" .
        "</tr>".
        "<tr>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Стаж вождения</b></td>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'>$skill</td>" .
        "</tr>".
        "<tr>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон</b></td>" .
        "<td style='padding: 10px; border: #e9e9e9 1px solid;'>$phone</td>" .
        "</tr>";
    $message = "<table style='width: 100%;'>$message</table>";
    function adopt($text) {
        return '=?UTF-8?B?'.Base64_encode($text).'?=';
    }
    $form_subject = "Заявка такси";
    $headers = "MIME-Version: 1.0" . PHP_EOL .
        "Content-Type: text/html; charset=utf-8" . PHP_EOL .
        'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
        'Reply-To: '.$admin_email.'' . PHP_EOL;
    mail($admin_email, adopt($form_subject), $message, $headers );
?>