<?php 

    include_once "vendor/autoload.php";

    session_start();
    if(isset($_POST['nome']) && isset($_POST['sexo'])) {
        $pessoa = new Convidado($_POST['nome'], $_POST['sexo']);
    }

?> 
