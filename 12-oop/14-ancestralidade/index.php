<?php

class Humano {

}

class Animal {

}

class Professor extends Humano {

}

$marcos = new Humano;

$jacaonça = new Animal;

if($marcos instanceof Humano) {
    echo "Marcos é um humano <br>";
} else {
    echo "Marcos não é um humano <br>";
}

if($jacaonça instanceof Humano) {
    echo "Jaca onça é um humano <br>";
} else {
    echo "A jaca onça não é humana <br>";
}

$pedro = new Professor;

if($pedro instanceof Professor) {
    echo "Pedro é um professor <br>";
} else {
    echo "Pedro não é professor <br>";
}

if($pedro instanceof Humano) {
    echo "Pedro é um humano <br>";
} else {
    echo "Pedro não é humano <br>";
}