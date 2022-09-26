<?php

class Humano {

    public $fundamental = "Concluido";
    public $ensinoMedio = "Concluido";

    function seGabarBasico() {
        echo "Terminei o ensino fundamento e ensino médio";
    }
}

class Professor extends Humano{
    public $faculdade = "Concluido";

    function seGabarSuperior() {
        echo "Terminei a faculdade";
    }
}

$denis = new Humano;
$denis->seGabarBasico();

$guanabara = new Professor;
$guanabara->seGabarBasico();
$guanabara->seGabarSuperior();