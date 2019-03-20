<?php

    class ContaCorrente
    {
        private $numero;
        private $saldo;
        private $cliente;

        function __construct(int $numero, Float $saldo, Cliente $cliente)
        {
            $this->numero = $numero;
            $this->saldo = $saldo;
            $this->cliente = $cliente;
        }

        function depositar(Float $valor)
        {
            $this->saldo += $valor;
        }

        function sacar(Float $valor):bool
        {
            if($this->saldo < $valor)
                return false;
            $this->saldo -= $valor;
            return true;
        }

        function getNumero():int
        {
            return $this->numero;
        }

        function setNumero(int $novo)
        {
            $this->numero = $novo;
        }

        function getSaldo():Float
        {
            return $this->saldo;
        }

        function setSaldo(Float $novo)
        {
            $this->saldo = $novo;
        }

        function getCliente():Cliente
        {
            return $this->cliente;
        }

        function setCliente(Cliente $novo)
        {
            $this->cliente = $novo;
        }
    }

?>