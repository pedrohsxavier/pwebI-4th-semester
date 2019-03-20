<?php

    class Cliente
    {
        private $cpf;
        private $nome;

        function __construct(String $cpf, String $nome)
        {
            $this->cpf = $cpf;
            $this->nome = $nome;
        }

        function getCpf():String
        {
            return $this->cpf;
        }

        function setCpf(String $novo)
        {
            $this->cpf = $novo;
        }

        function getNome():String
        {
            return $this->nome;
        }

        function setNome(String $novo)
        {
            $this->nome = $novo;
        }
    }

?>