<?php

include_once "dados.php";

$genero = $_GET["genero"];

foreach($filmes[$genero] as $f)
    //echo "$f<br>";
    //$ex = explode(" ", $f);
    //$jo = join("+", $ex);
    echo "<a href=https://www.google.com.br/search?q=$f>$f<a/><br>";
?>