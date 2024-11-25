<?php

require_once './class/Compte.php';


$compte = new CompteBancaire("Alice", 500);
echo "Titulaire : " . $compte->getTitulaire() . "\n";
echo "Solde : " . $compte->getSolde() . "\n";

$compte->crediter(200);
echo "Nouveau solde : " . $compte->getSolde() . "\n";

$compte->debiter(100);
echo "Solde après débit : " . $compte->getSolde() . "\n";

?>