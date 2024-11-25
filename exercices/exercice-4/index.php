<?php

require_once './class/Developpeur.php';
require_once './class/Designer.php';
require_once './interfaces/EmployeInterface.php';
require_once './class/Entreprise.php';


$entreprise = new Entreprise();
$dev = new Developpeur(5000);
$designer = new Designer(4000);

echo '<h1>Developpeur</h1>';
echo '<p>'. $dev->travailler() .'</p>';
echo '<p>Salaire: '. $dev->getSalaire() .'</p>';

echo '<h1>Designer</h1>';
echo '<p>'. $designer->travailler() .'</p>';
echo '<p>Salaire: '. $designer->getSalaire() .'</p>';



$entreprise->ajouterEmploye($dev);
$entreprise->ajouterEmploye($designer);

echo '<h1>Entreprise</h1>';
echo '<p>Mass salaires: '. $entreprise->calculMassSalaires() .'</p>';


?>