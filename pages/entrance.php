<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
        include($root."/config/link-css.php");
        include($root."/config/link-js.php");
    ?>
</head>
<body>
    <div class="col-6 m-auto bg-success mt-5 rounded">
        <div class="p-3 d-flex w-100 border-bottom border-white border-1">
            <div data-none="registration" data-block="authorization" class="w-50 fs-3 text-center text-uppercase text-white fw-bold pointer border-end border-white border-1 divBlockEntrance active">
                authorization
            </div>

            <div data-none="authorization" data-block="registration" class="w-50 fs-3 text-center text-uppercase text-white fw-bold pointer divBlockEntrance">
                registration
            </div>
        </div>

        <div class="p-5 authorization">
            <input id="login" type="text" placeholder="Введите Логин:" class="form-control w-50 m-auto">
            <input id="pass" type="text" placeholder="Введите Пароль:" class="form-control w-50 m-auto mt-2">
            <span class="erSpan text-warning my-1 text-center m-auto d-block"> jfdjfdkj</span>
            <button class="btn btn-warning w-50 d-block m-auto mt-4 fw-bold btnAuth">Войти</button>
        </div>

        <div class="p-5 registration">
            <input type="text" placeholder="Введите Логин:" class="form-control w-50 m-auto">
            <input type="text" placeholder="Введите Пароль:" class="form-control w-50 m-auto mt-2">
            <input type="text" placeholder="Повторите Пароль:" class="form-control w-50 m-auto mt-2">
            <button class="btn btn-warning w-50 d-block m-auto mt-4 fw-bold">Зарегистрироваться</button>
        </div>
    </div>
</body>
</html>


