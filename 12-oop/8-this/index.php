<?php

class Gato {

    public $nome;

    function escolherNome($nome){
        $this->nome = $nome;
    }

    function miar(){
        return "Miau miau <br><br>";
    }

    function miarForte(){
        return strtoupper($this->miar());
    }

}

$cappuccino = new Gato;
$cappuccino->escolherNome("cappuccino");
echo "O nome do animal é: $cappuccino->nome <br>";
echo $cappuccino->miar();
echo $cappuccino->miarForte();