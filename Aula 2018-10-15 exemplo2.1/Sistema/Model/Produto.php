<?php

namespace Sistema\Model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author 2420625
 */
abstract class Produto {
    private $codigo;
    use Logger,Nomeavel;
    
    function __construct(string $codigo, string $nome) {
        $this->codigo = $codigo;    
        $this->nome = $nome;
        $this->log('Foi criada uma instancia de '.__CLASS__.'<br>');
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo)
    {
        $this->codigo = $codigo;
    }

}
