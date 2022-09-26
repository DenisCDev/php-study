<?php

    class Carro {
        public $quitado = false;
        protected $CNH = 324234;
        private $marca = "Ford";
    }

    class Concessionaria {
        public function quitarCarro($obj) {
            $obj->quitado = true;
        }
    }

    $fiesta = new Carro;
    echo $fiesta->quitado . "<br><br>";

    $concessionariaTeresopolis = new Concessionaria;
    $concessionariaTeresopolis->quitarCarro($fiesta);
    echo $fiesta->quitado . "<br><br>";