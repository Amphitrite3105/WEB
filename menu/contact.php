<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Контакты</title>
    <?php
    error_reporting(E_ALL);
    require '../app/header.php';
    ?>

    <link rel="stylesheet" href="../css/home.css" type="text/css" >
    <link rel="stylesheet"  href="../css/contact.css">
    <link rel="stylesheet"  href="../css/ren_content.css">
    

</head>
<body>

<div class="container">
        <div class="main_page main_contact col-md-12 visible-lg visible-md">
            <a href="#">
                <p>Возникли вопросы? Хотите оставить комментарий по поводу работы сайта либо высказать свои идеи по его улучшению?</p>
                <p>Заполните форму ниже и мы обязательно ответим на Ваши письма в кротчайшие сроки.</p>
                <p>Ваше мнение очень важно для нас:) </p>
            </a>
        </div>
        <div class="main_page main_contact col-md-12 visible-xs visible-sm">
            <a href="#">
            <p>Вопросы, комментарии, предложения - заполните форму ниже и мы обязательно ответим на Ваши письма в кротчайшие сроки.</p>
            <p>Ваше мнение очень важно для нас:) </p>
            </a>
        </div>
</div>


    <div class="container contact">
        <div class="row">
            <div class="wrapper_form">
                <div class="contact_form">
                    <form>
                        <div class="contact_form col-md-6">
                        <p><input type="text" name="name" id="name" size=”15” maxlength=”20” value="" placeholder="Имя"></p><br>
                        <div class="error"></div>
                        <p><input type="text" name="name" id="email" size=”15” maxlength=”20” value="" placeholder="Email"></p><br>
                        <div class="error"></div>
                        <p><input type="text" name="name" id="subject" size=”15” maxlength=”20” value="" placeholder="Тема сообщения"></p><br>
                        <div class="error"></div>
                            <div id="messageShow"></div>
                            <div id="messageSend"></div>
                            </div>
                        <div class="contact_form col-md-6">
                        <p><textarea name="message" id="message"  placeholder="Текст сообщения"></textarea></p>
                        <div class="error"></div>

                            <div class="form_buttons">
                            <p><input type="submit" name="otpravit" id="send" value="Отправить">
                                <input type="reset" name="ochistit" id="clear" value="Очистить"></p>
                            </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
<?php
require '../app/footer.php';
?>
    <script>
        $(document).ready(function(){
            $("#send").click(function () {
                $("#messageShow").hide();

                var name = $("#name").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();
                var fail = "";
                if (name.length < 3) fail = "! Поле 'Имя' должно содержать не менее 3 символов";
                else if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0)
                    fail = "! Поле 'Email' заполнено неккоректно";
                else if (subject.length < 5)
                    fail = "! Поле 'Тема сообщения' должно содержать не менее 5 символов";
                else if (message.length < 20)
                    fail = "! Поле 'Текст сообщения' должно содержать не менее 20 символов";

                if (fail != "") {
                    $("#messageShow").html(fail + "<div class='clear'></br></div>");
                    $("#messageShow").show();
                    return false;
                }
                $.ajax({
                    url: '/ajax/feedback.php',
                    type: 'POST',
                    cache: false,
                    data: {
                        'name': name,
                        'email': email,
                        'subject': subject,
                        'message': message
                    },
                    dataType: 'html',
                    success: function(data){
                        $("#messageShow").html(data + "<div class='clear'></br></div>");
                        $("#messageShow").show();
                    }
                });
            });
        });
    </script>
</body>
</html>