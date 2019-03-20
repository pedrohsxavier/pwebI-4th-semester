<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST">
        <label for="e" > Esporte: </label><br>
        <input type="checkbox" name="esportes[]" value="Natação"> Natação<br>
        <input type="checkbox" name="esportes[]" value="Vôlei"> Vôlei<br>
        <input type="checkbox" name="esportes[]" value="Basquete"> Basquete<br>
        <input type="checkbox" name="esportes[]" value="Futebol"> Futebol<br>
        <input type="submit" Value="Ok">
    </form>

    <?php
        echo "<br>";
        if(isset($_POST["esportes"]))
            foreach($_POST["esportes"] as $e){
                echo "Esporte: $e<br>";
            }

        //print_r($_POST["esportes"]);
    ?>
</body>
</html>