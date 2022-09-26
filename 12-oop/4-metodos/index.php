<?php

class Pessoa {
    function falar() {
        echo "Olá, eu sou um objeto <br><br>";
    }

    function somar($x, $y) {
        echo $x + $y . "<br>";
    }
}

$denis = new Pessoa;
$denis->falar();
$denis->somar(2, 7);