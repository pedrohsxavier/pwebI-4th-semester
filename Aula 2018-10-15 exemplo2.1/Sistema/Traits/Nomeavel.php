<?php

namespace Sistema\Traits;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author 2420625
 */
trait Nomeavel {
    private $nome;
    
    function getNome():string {
        return $this->nome;
    }

    function setNome(string $nome) {
        $this->nome = $nome;
    }


}
