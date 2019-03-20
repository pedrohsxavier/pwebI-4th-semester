<?php
class Cliente
{
    private $cpf;
    private $nome;

    public function __construct(String $c, String $n)
    {
        $this->cpf = $c;
        $this->nome = $n;
    }

    public function getCpf(): String
    {
        return $this->cpf;
    }

    public function getNome(): String
    {
        return $this->nome;
    }

    public function setCpf($novo_cpf)
    {
        $this->cpf = $novo_cpf;
    }

    public function setNome($novo_nome)
    {
        $this->nome = $novo_nome;
    }

}
