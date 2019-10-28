<?php

require_once 'Class/Bicycle.php';
require_once 'Class/Car.php';

// Play with bikes

$rockrider = new Bicycle("blue");
$lapierre = new Bicycle("black");
echo "Bikes<br>";
echo '<br>Rockrider: ' . $rockrider->forward();
echo '<br>Rockrider: ' . $rockrider->brake();
echo '<br>Lapierre: ' . $lapierre->forward();
echo '<br>Lapierre: ' . $lapierre->brake() . '<br>';


// Play with car

$porche = new Car("red", 2, "SP");
$mazerati = new Car("grey", 4, "electric");
echo "<br>Cars<br>";
echo '<br>Porche: ' . $porche->start();
echo '<br>Porche: ' . $porche->forward();
echo '<br>Porche: ' . $porche->forward();
echo '<br>Porche current speed: ' . $porche->getCurrentSpeed() . 'mph';
echo '<br>Porche: ' . $porche->brake();
echo '<br>Porche number wheels: ' . $porche->getNbWheels();
echo '<br>Porche color: ' . $porche->getColor();
echo '<br>Porche number seats: ' . $porche->getNbSeats();
echo '<br>Porche energy: ' . $porche->getEnergy();
echo '<br>Porche energy level: ' . $porche->getEnergyLevel();

echo '<br>Mazerati: ' . $mazerati->start();
echo '<br>Mazerati: ' . $mazerati->forward();
echo '<br>Mazerati current speed: ' . $mazerati->getCurrentSpeed() . 'mph';
echo '<br>Mazerati: ' . $mazerati->brake();
echo '<br>Mazerati number wheels: ' . $mazerati->getNbWheels();
echo '<br>Mazerati color: ' . $mazerati->getColor();
echo '<br>Mazerati number seats: ' . $mazerati->getNbSeats();
echo '<br>Mazerati energy: ' . $mazerati->getEnergy();
echo '<br>Mazerati energy level: ' . $mazerati->getEnergyLevel();



