<?php

class Carro
{
  private $cor;
  private $KmRodados;
  private $tanque;

  function __construct($c, $km, $t)
  {
    $this->cor = $c;
    $this->KmRodados = $km;
    $this->tanque = $t;
  }

  function getTanque()
  {
    return $this->tanque;
  }

  function abastece($qt)
  {
    $this->tanque += $qt;
  }
}

$meucarro = new Carro("Preto", 50000, 20);

print_r($meucarro);

$meucarro->abastece(100);
$meucarro->abastece(50);
$meucarro->abastece(200);

print_r($meucarro);

$tanquecarro = $meucarro->getTanque();

echo "Tanque do meu carro: $tanquecarro";