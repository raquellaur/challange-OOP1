<?php

require_once('Car.php');
require_once('Bicycle.php');

$car = new Car("bleu", 2, "essence");

$bicycle2 = new Bicycle("bleu");

var_dump($car);

echo $car->forward();
echo $car->brake();

echo $bicycle2->forward();
echo $bicycle2->brake();
