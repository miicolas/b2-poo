<?php

require_once './class/Produit.php';
require_once './class/ReductionFixe.php';
require_once './class/ReductionPourcentage.php';


$produitPhysique = new ProduitPhysique("Table", 100, 2);
$produitVirtuel = new ProduitVirtuel("Logiciel", 100, "fichier.txt");

echo '<h1>' . $produitPhysique->getNom() . '</h1>';
echo '<p>Prix initial : ' . $produitPhysique->getPrix() . '€</p>';
echo '<p>Poids initial : ' . $produitPhysique->getPoids() . '</p>';
echo '<p>Prix final : ' . $produitPhysique->calculerPrixFinal() . '€</p>';

$promotion = new ReductionFixe(10);
echo '<p>Prix après réduction : ' . $promotion->appliquerPromotion($produitPhysique) . '€</p>';

echo '<h1>' . $produitVirtuel->getNom() . '</h1>';
echo '<p>Prix initial : ' . $produitVirtuel->getPrix() . '€</p>';
echo '<p>Fichier initial : ' . $produitVirtuel->getFichier() . '</p>';
echo '<p>Prix final : ' . $produitVirtuel->calculerPrixFinal() . '€</p>';

$promotion2 = new ReductionPourcentage(50);
echo '<p>Prix après réduction : ' . $promotion2->appliquerPromotion($produitVirtuel) . '€</p>';


?>