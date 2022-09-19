<?php

$pessoa = [
    'nome' => 'João',
    'idade' => 25,
    'faculdade' => 'Administração',
    'trabalhando' => true
];

print_r($pessoa);
echo "<br><br><br>";

$idade = $pessoa['idade'];
if ($idade >= 18) {
    echo "Você está permitido a entrar";
}

?>