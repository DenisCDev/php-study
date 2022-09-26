<?php

    class Humano {

        public $idade = 18;

        public function falar() {
            echo "Olá mundo!";
        }

        private function gritar() {
            echo "AAAAAAAAAAAA";
        }

        public function acessarGritar() {
            $this->gritar();
        }

        protected function falarBaixinho(){
            echo "shhhhhh";
        }

        public function acessarFalarBaixinho(){
            $this->falarBaixinho();
        }
    }

    class Programador extends Humano {



    }

    $ze = new Humano;
    $ze->falar();
    $ze->acessarGritar();
    $ze->acessarFalarBaixinho();

    $denis = new Programador;
    echo $denis->falar();