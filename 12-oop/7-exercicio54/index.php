<?php

class Pessoa {
    public $nome = "Pedro";
    public $idade = 18;

    function andar($a) {
        echo "Andou $a metros";
    }
}
$denis = new Pessoa;
$denis->nome = "Denis";
$denis->idade = 28;
$denis->andar(1000);