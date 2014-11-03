<?php

session_start();

class verificacionSessiones {

    function verificarSessionIniciada() {
        if (isset($_SESSION["usuario"]) != "") {
            echo '<script>'
            . 'window.location.href = "menu.php";'
            . '</script>';
        }
    }

    function verificarSessionLogueada() {
        if (isset($_SESSION["usuario"]) == "") {
            echo '<script>'
            . 'window.location.href = "login.php";'
            . '</script>';
        }
    }

    function cerrarSession() {
        session_destroy();
        echo '<script>'
        . 'window.location.href = "login.php";'
        . '</script>';
    }

    //put your code here
}
