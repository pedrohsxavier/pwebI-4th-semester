<?php
namespace Sistema\Util;
use \Sistema\Model\Produto;
class ColecaoProdutos {
    private $produtos;
    function __construct() 
    {
        $this->produtos=array();
    }
    function add(/*\Model\Produto $produto*/Produto $produto)
    {
        array_push($this->produtos, $produto);
    }
    function get(integer $codigo): Produto//\Model\Produto
    {
        return $this->produtos[$codigo];
    }
    function __toString() {
        $msg='';
        foreach($this->produtos as $produto)
        {
            $msg.=$produto->getNome(). ',';
        }
        return $msg;
    }
    


}
