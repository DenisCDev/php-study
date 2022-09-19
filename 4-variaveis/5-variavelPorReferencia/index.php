<?php

$x = 2;
$y =& $x;
echo "$x e $y <br><br><br>";

$x = 5;
echo "$x e $y após alteração <br><br><br>";

$x = "Variável alterada";
echo "$x e $y após alteração de novo <br><br><br>";