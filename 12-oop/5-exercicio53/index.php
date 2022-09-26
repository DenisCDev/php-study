<?php

class Cachorro {
    function latir() {
        echo "Au au <br><br>";
    }

    function andar($m) {
        echo "Ele anda $m metros";
    }
}

$rex = new Cachorro;
$rex->latir();
$rex->andar(5);