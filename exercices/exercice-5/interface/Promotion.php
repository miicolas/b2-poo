<?php

interface Promotion
{
    public function appliquerPromotion(Produit $produit): float;
}
?>
