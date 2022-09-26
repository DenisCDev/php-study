<?php

class Car {

    public $rodas = 4;
    public $aro = 20;
    public $cor = "verde";

}

$mini = new Car;

    echo $mini->rodas . "<br><br>";
    $mini->cor = "prateado";
    echo $mini->cor;