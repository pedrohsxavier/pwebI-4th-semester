<?php
namespace App\Model\Laticinio;

class Leite extends \App\Model\Produto implements \App\Model\Perecivel{
    private $volume;
    private $dataValidade;
    function __construct($nome, String $volume, $dtValidade, String $cod, float $preco){
        if($volume == null){
            throw new InformacaoNulaException("o parametro volume esta nulo");
        }
        if($dtValidade == null){
            throw new InformacaoNulaException("o parametro data validade está nulo");
        }
        parent::__construct($nome, $cod, $preco);
        $this->volume = $volume;
        $this->dataValidade = new \DateTime($dtValidade);
        $this->exibeMensagem("a classe ". __CLASS__ ." foi criada");
    }
    public function  getCodigo() :int{
        return $this->codigo;
    }
    
    function setCodigo(int $cod){
        $this->codigo = $cod;
    }
    function setPreco(float $p){
        $this->preco = $p;
    }
    function getVolume() :int{
        return $this->volume;
    }
    function getDataValidade() :String{
        return $this->dataValidade;
    }
    
    function setVolume(float $v){
        $this->volume = $v;
    }
    function setDataValidade(float $dt){
        $this->dataValidade = $dt;
    }
    public function estaVencido(): bool{
        $atual = new \DateTime();
        if ($atual < $this->dataValidade)
            return False;
        else
            return True;
    }
    public function __toString(){
        $cod = parent::getCodigo();
        $nome = parent::getNome();
        $preco = parent::getPreco();
        $dataFormat = $this->dataValidade->format('Y-m-d');
        echo("codigo = $cod nome = $nome preco = $preco volume= $this->volume data = $dataFormat ");
    }

}