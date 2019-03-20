<?php

abstract class Produto
{

    private $codigo;
    private $preco;

    public function __construct($c, $p)
    {
        $this->codigo = $c;
        $this->preco = $p;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setCodigo($cod)
    {
        $this->codigo = $cod;
    }

    public function setPreco($p)
    {
        $this->preco = $p;
    }
}
