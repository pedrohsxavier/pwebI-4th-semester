<?php
namespace App\Model;
use \App\Excecao\InformacaoNulaException;
abstract class Produto{
    use \App\Traits\Nomeavel, \App\Traits\Logger;
    private $codigo;
    private $preco;

    function __construct($nome, $cod, $preco){
        
        if($nome == null){
            throw new InformacaoNulaException("o parametro nome est� nulo");
        }
        if($cod == null){
            throw new InformacaoNulaException("o parametro codigo esta nulo");
        }
        if($preco == null){
            throw new InformacaoNulaException("o parametro preco esta nulo");
        }
        $this->nome = $nome;
        $this->codigo = $cod;
        $this->preco = $preco;
        
    }
    public function getCodigo()
    {
       return $this->codigo;
    }
   public function getPreco()
   {
       return $this->preco;
   }
   function setCodigo(int $cod){
       $this->codigo = $cod;
   }
   function setPreco(float $p){
       $this->preco = $p;
   }
}


?>