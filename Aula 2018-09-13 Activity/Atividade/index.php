<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<?php
include "ContaCorrente.php";

$C1 = new Cliente('1234567891', 'Luiz');
$conta1 = new ContaCorrente(1, 5000.0, $C1);

$conta1->depositar(5000.0);
$conta1->sacar(1000.0);

$C2 = new Cliente('9876543219', 'Marcos');
$conta2 = new ContaCorrente(2, 7000.0, $C2);

$conta2->depositar(10000);
$conta2->sacar(2000);

print_r($conta1);
print_r($conta2);

?>

</body>
</html>
