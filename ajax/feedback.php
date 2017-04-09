<?php

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if($name == "" || $email == "" || $subject == "" || $message == ""){
        echo "Необходимо заполнить все поля формы";
        exit;
    }

    //Отправка данных
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $email\r\nReplay-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

    if(mail("sirena857@gmail.com", $subject, $message, $headers))
        echo "Сообщение успешно отправлено";
    else
        echo "Не удалось отправить сообщение";
?>

