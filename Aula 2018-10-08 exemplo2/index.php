<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once 'autoload.php';
            $dvd = new DVD('1', 'Ana ao Vivo',time());
            echo 'Nome:'.$dvd->getNome();
        ?>
    </body>
</html>
