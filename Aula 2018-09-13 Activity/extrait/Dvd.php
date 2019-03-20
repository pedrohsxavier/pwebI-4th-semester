<?php

class Dvd extends Produto
{

    private $titulo;
    private $ano;

    public function __construct($c, $p, $t, $a)
    {
        parent::__construct($c, $p);
        $this->titulo = $t;
        $this->ano = $a;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setTitulo($t)
    {
        $this->titulo = $t;
    }

    public function setAno($a)
    {
        $this->ano = $a;
    }
}
