<?php
namespace App\Traits;
trait Logger{
    public function exibeMensagem(String $msg){
        echo "<br> $msg<br>";
    }
}