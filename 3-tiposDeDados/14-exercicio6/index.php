<?php

$carro = ['modelo' => 'Honda Civic', 'potencia' => 300, 'assentos' => 5];
print_r($carro);
echo "<br><br>";

echo $carro['modelo'];
echo "<br><br>";
echo $carro['potencia'];
echo "<br><br>";

//Criando variaveis para usar simplificado no texto
$modelo = $carro['modelo'];
$potencia = $carro['potencia'];
echo "O modelo do carro é do modelo $modelo e a potência é $potencia de cavalos";
?>