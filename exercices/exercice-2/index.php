<?php

require_once './class/Produit.php';

// Création d'un objet 'livre' de type 'Produit'
$livre = new Produit(nom : "Nom du livre", description: null, quantite: 100, prix: 10);

echo '<h1>'. $livre->getNom() .'</h1>';
echo '<p>'. $livre->getDescription() .'</p>';
echo '<p>'. $livre->getQuantite() .'</p>';
echo '<p>'. $livre->getPrix() .'€</p>';

$livre2 = new Produit(nom : "Nom du livre2", description:"Description du livre2", quantite: 10, prix: 100);

echo '<h1>'. $livre2->getNom() .'</h1>';
echo '<p>'. $livre2->getDescription() .'</p>';
echo '<p>'. $livre2->getQuantite() .'</p>';
echo '<p>'. $livre2->getPrix() .'€</p>';



$livre3 = new Produit(nom : "Nom du livre3", description:"Description du livre3", quantite: 10, prix: 100);

echo '<h1>'. $livre3->getNom() .'</h1>';
echo '<p>'. $livre3->getDescription() .'</p>';
echo '<p>'. $livre3->getQuantite() .'</p>';
echo '<p>'. $livre3->getPriceTTC() .'€ TTC</p>';
echo '<p>'. $livre3->getPriceHT() .'€ HT</p>';
echo '<p>'. $livre3->getTVA() .'€ de TVA</p>';




?>
