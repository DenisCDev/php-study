<?php
    
if(is_float(4)) {
    echo "É um número inteiro mas não float <br>";
}

if(is_float(4.5)) {
    echo "É um número float <br>";
}

if(is_float("Letras para dar erro")) {
    echo "Não é um número float <br>";
}

$numero = 2;
if(is_float($numero)) {
    echo "É um número inteiro dentro de uma variável mas não é float <br>";
}

$numero = 2.6;
if(is_float($numero)) {
    echo "É um número float dentro de uma variável <br>";
}

?>
