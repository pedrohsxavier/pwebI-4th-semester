<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*function busca($classe)
{
    echo 'Interpretador está a procura da classe :'.$classe.'<br>';
    include_once "$classe.php";
}

spl_autoload_register("busca");*/

//Com função anonima
spl_autoload_register(
        function ($classe)
        {
            echo 'Interpretador1 está a procura da classe :'.$classe.'<br>';
            $filename = "$classe.php";
            if (file_exists($filename))
                include_once $filename;
        }
    );

spl_autoload_register(
        function ($classe)
        {
            echo 'Interpretador2 está a procura da classe :'.$classe.'<br>';
            $filename = "Model/$classe.php";
            if (file_exists($filename))
                include_once $filename;
        }
    );

spl_autoload_register(
        function ($classe)
        {
            echo 'Interpretador3 está a procura da classe :'.$classe.'<br>';
            $filename = "Trait/$classe.php";
            if (file_exists($filename))
                include_once $filename;
        }
    );

    spl_autoload_register(
        function ($classe)
        {
            echo 'Interpretador4 está a procura da classe :'.$classe.'<br>';
            $filename = "Model/Midia/$classe.php";
            if (file_exists($filename))
                include_once $filename;
        }
    );

