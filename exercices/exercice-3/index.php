<?php
require_once './class/Humain.php';
require_once './class/Robot.php';


$humain = new Humain(nom: "Bertrand");
echo '<h1>' . $humain->getName() . '</h1>';
$humain->afficherHeure(__CLASS__, "Création de l'humain");

$robot = new Robot(nom: "R2D2");
echo '<h1>' . $robot->getName() . '</h1>';
$robot->afficherHeure(__CLASS__, "Création du robot");

?>