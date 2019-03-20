<?php

    session_start();
    
    if(!isset($_SESSION['pessoa'])){
        echo 'vazio';
        $_SESSION['pessoa'] = array();
    }
    
    include_once '../vendor/autoload.php';
    
    if(isset($_POST['nome']) && isset($_POST['sexo'])){
        $pessoa = new \App\Model\Convidado($_POST['nome'], $_POST['sexo']);
        array_push($_SESSION['pessoa'],$pessoa);
        //print_r($_SESSION['pessoa']);
        $_SESSION['msg'] = "adicionado com sucesso";
        header("location:listar.php");
    }else{
        header("location:index.php?msg=Erro");
    }

?>
