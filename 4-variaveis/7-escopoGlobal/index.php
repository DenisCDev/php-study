<?php

$teste = "Imprimido";
echo "$teste global 1 <br>";

if(true) {
    $teste = "Imprimido e alterado";
    echo "$teste if <br>";
}

echo "$teste global 2 <br>";

function funcao() {

    $teste = "aaa";

    echo "$teste local <br>";

}

funcao();

function testandoGlobal() {

    global $teste;

    echo "$teste global função <br>";

}

testandoGlobal();