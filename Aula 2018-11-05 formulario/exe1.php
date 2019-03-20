<?php
    include_once "dados.php";

    if(!isset($_GET['genero']))
        echo 'Genero não informado';
    else
    {
        $genero = $_GET["genero"];
        if(!array_key_exists($genero, $filmes))
            echo 'Genero nao encontrado';
        else
        {
            foreach($filmes[$genero] as $f)
                echo "$f<br>";
        }
    }
?>