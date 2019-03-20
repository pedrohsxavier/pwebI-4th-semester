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
            include_once 'vendor/autoload.php';
            use Sistema\Model\Midia\DVD;
            $sacola = new Sistema\Util\ColecaoProdutos();
            $dvd = new DVD('1', 'Ana ao Vivo',time());
            $sacola->add($dvd);
            echo 'Nome:'.$dvd->getNome();
            $dvd2 = new DVD('2', 'Bia ao Vivo',time());
            $sacola->add($dvd2);
            echo 'Nome:'.$dvd2->getNome();
            $dvd3 = new DVD('3', 'Teteia ao vivo',time());
            $sacola->add($dvd3);
            echo 'Nome:'.$dvd3->getNome();
            $dvd4 = new DVD('4', 'Jurema ao Vivo',time());
            $sacola->add($dvd4);
            echo 'Nome:'.$dvd4->getNome();
            echo '<br><b>'.$sacola.'</b>';
            echo 'Criando Nada a ver';
            $nada = \Sistema\MeuNadaAVer\Classes\MinhaClasse;
        ?>
    </body>
</html>
