<?php

    $var = 10;

    echo "$var global <br>";

    function teste() {

        $var = 5;

        echo "$var local <br>";

    }

    teste();

    function testando() {

        $var = 12;
        echo "$var local 2 <br>";

    }

    $var = 99;

    testando();
    teste();
    echo "$var global <br>";