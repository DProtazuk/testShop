<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php include($root."/config/connect.php"); ?>

<?php

    $action = $_POST['action'];
    switch ($action) {
        case "authUser":
            authUser();
            break;
    }

    function authUser() {
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        if(!empty($login) && !empty($pass) && strlen($login)>=4 && strlen($pass)>=4) {
            echo 1;
        }
        else {
            echo 0;
        }
    }