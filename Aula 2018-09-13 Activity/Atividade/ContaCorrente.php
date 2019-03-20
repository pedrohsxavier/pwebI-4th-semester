<?php
include "Cliente.php";

class ContaCorrente
{
    private $numero;
    private $saldo;
    private $cliente;

    public function __construct(int $n, float $s, Cliente $c)
    {
        $this->numero = $n;
        $this->saldo = $s;
        $this->cliente = $c;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero($novoNumero)
    {
        $this->numero = $novoNumero;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo($novoSaldo)
    {
        $this->saldo = $novoSaldo;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function setCliente($novoCliente)
    {
        $this->cliente = $novoCliente;
    }

    public function depositar(float $valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    public function sacar($valor): bool
    {
        if ($this->saldo > 0) {
            $this->saldo = $this->saldo - $valor;
            return true;
        } else {
            return false;
        }

    }

}
