<?php

require_once './class/Personne.php';

$date_naissance = new DateTime('2009-01-01');

$personne = new Personne('BE', 'Ni', $date_naissance);
echo '<h1> Prénom :' . $personne->getPrenom() . '</h1>';
echo '<h1> Nom :' . $personne->getNom() . '</h1>';
echo '<h1> Date de naissance : ' . $personne->getDate()->format('Y-m-d') . '</h1>';
echo '<h1> Age : ' . $personne->calculAge() . '</h1>';

?>