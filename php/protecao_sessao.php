<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['usr_id'])){
        header('Location: /html/nao_logado.php');
        die();
    }

?>