<?php

class Authentication {
    function login ($user_id) {
        $_SESSION["user_id"] = $user_id;
        $_SESSION["login"] = true;
        header('Location: index.php?page=dashboard');
    }

    function logout () {
        session_destroy();
        header('Location: index.php');
    }
}