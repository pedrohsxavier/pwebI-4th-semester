<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .gray {
            color: gray;
        }
        .green {
            color: green;
        }
    </style>
    <title>Exercicio 2 - PWEB I</title>
</head>
<body>

    <?php 
        include('ContaCorrente.php');
        include('Cliente.php');

        $cliente = new Cliente('123456789', 'fulano');
        $conta = new ContaCorrente('123', 500, $cliente);
    ?>

    <p class="gray">Cliente: <?=$conta->getCliente()->getNome()?></p>
    <p class="gray">CPF: <?=$conta->getCliente()->getCpf()?></p>
    <p class="gray">Numero da conta: <?=$conta->getNumero()?></p>
    <p class="gray">Saldo da conta: <?=$conta->getSaldo()?></p>

    <?php

        echo '<hr>';

        echo 'Saldo de ';
        echo $conta->getCliente()->getNome() . ' ';
        echo ' ';
        echo $conta->getSaldo();

        echo '<br>';

        echo '<p class="green">Depositando 50...</p>';
        $conta->depositar(50);
        echo 'Novo Saldo: ';
        echo $conta->getSaldo();

        echo '<br>';

        echo '<p class="green">Tentando sacar 600...</p>';
        $sacou = $conta->sacar(600);
        if($sacou)
            echo 'Sacou!';
        else
            echo 'Não Sacou!';

        echo '<br>';
        echo '<p class="green">Tentando sacar 500...</p>';
        $sacou = $conta->sacar(500);
        if($sacou)
            echo 'Sacou!';
        else
            echo 'Não Sacou!';

        echo '<hr>';

        echo 'Novo Saldo: ';
        echo $conta->getSaldo();
        echo '<br>';

        echo 'Numero da conta de ';
        echo $conta->getCliente()->getNome();
        echo ': ';
        echo $conta->getNumero();
        echo '<br>';

        echo '<p class="green">Setando um novo numero...</p>';
        $conta->setNumero('456');
        echo 'Numero da conta de ';
        echo $conta->getCliente()->getNome();
        echo ': ';
        echo $conta->getNumero();
        echo '<br>';

    ?>
    
</body>
</html>

