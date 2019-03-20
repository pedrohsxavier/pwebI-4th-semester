<?php

namespace Sistema\Model\Laticinio;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DVD
 *
 * @author 2420625
 */
class Leite extends Produto
{
    private $marca;
    private $volume;
    private $dataValidade;
    function __construct(string $codigo, string $nome, string $marca, int $volume, string $data)
    {
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dataValidade = $data;
        parent::__construct($codigo, $nome);
        $this->log('Foi criada uma instancia de '.__CLASS__.'<br>');
    }

    function getMarca()
    {
        return $this->marca;
    }

    function getVolume()
    {
        return $this->volume;
    }

    function getDataValidade()
    {
        return $this->getDataValidade;
    }

    function setMarca(string $m):string
    {
        $this->marca = $m;
    }

    function setVolume(int $v):int
    {
        $this->volume = $v;
    }

    function setDataValidade(string $d):string
    {
        $this->dataValidade = $d;
    }
    
}