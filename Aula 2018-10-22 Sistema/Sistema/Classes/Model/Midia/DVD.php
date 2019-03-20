<?php
namespace App\Model\Midia;
use \App\Model\Produto;
class DVD extends Produto {
    private $ano;

    function __construct(String $nome, String $ano, String $cod, float $preco ){
        if($ano == null){
            throw new InformacaoNulaException("o parametro ano esta nulo");
        }
        parent::__construct($nome, $cod, $preco);
        $this->ano = $ano;
        $this->exibeMensagem("a classe ".__CLASS__." foi criada");
    }
    function getAno( ){
        return $this->ano;
    }
    function setAno(float $a){
        $this->ano = $a;
    }
    function __toString(){
        $nome = parent::getNome();
        $cod = parent::getCodigo();
        $preco = parent::getPreco();
        echo "codigo = $cod, nome = $nome, preco = $preco ano = $this->ano <br>";
    }
    
}
