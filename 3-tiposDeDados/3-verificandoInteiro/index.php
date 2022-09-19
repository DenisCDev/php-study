<?php
    
if(is_int(4)) {
    echo "É um número inteiro <br>";
}

if(is_int("Letras para dar erro")) {
    echo "Não é um número inteiro <br>";
}

$numero = 2;
if(is_int($numero)) {
    echo "É um número inteiro dentro de uma variável<br>";
}
?>
