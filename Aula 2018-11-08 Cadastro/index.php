<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="i" > Nome: </label>
        <input id="i" type="text" name="nome"><br>

        <label for="m" > Masculino: </label>
        <input id="m" type="radio" name="genero" value="Masculino">

        <label for="f" > Feminino: </label>
        <input id="f" type="radio" name="genero" value="Feminino">
        <br><input type="submit" Value="Ok">
    </form>

    <?php

        if($_POST["nome"] == '' || (!isset($_POST["genero"]))){
            echo 'Campo(s) não inserido(s) corretamente';    
        }
        else
            echo 'Nome: '.$_POST["nome"].'; Genero: '.$_POST["genero"];
    ?>

</body>
</html>