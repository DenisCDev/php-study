<?php

if(is_bool(true)) {
    echo "É booleano true <br>";
}

if(is_bool(false)) {
    echo "É booleano false <br>";
}

if(is_bool(3)) {
    echo "Não funciona";
}

if(is_bool("true")) {
    echo "Não funciona";
}

if(0 == false) {
    echo "0 é considerado falso";
}

?>
