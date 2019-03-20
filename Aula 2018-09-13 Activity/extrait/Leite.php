<?php

class Leite extends Produto
{

    private $marca;
    private $volume;
    private $dtValidade;

    public function __construct($c, $p, $m, $v, $dt)
    {
        parent::__construct($c, $p);
        $this->marca = $m;
        $this->volume = $v;
        $this->dtValidade = $dt;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function getDtValidade()
    {
        return $this->dtValidade;
    }

    public function setMarca($m)
    {
        $this->marca = $m;
    }

    public function setVolume($v)
    {
        $this->volume = $v;
    }

    public function setDtValidade($dt)
    {
        $this->dtValidade = $dt;
    }
}
