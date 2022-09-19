<?php

class Pessoa {
    function falar() {
        echo "Olá";
    }
}

$matheus = new Pessoa();
$matheus-> nome = "Matheus";
echo $matheus->nome;

echo "<br><br><br>";
$matheus->falar();

?>

