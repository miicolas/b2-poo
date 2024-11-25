<?php

require_once './interface/Promotion.php';


class ReductionPourcentage implements Promotion
{

    private $promotion;

    public function __construct(float $promotion)
    {
        $this->promotion = $promotion;
    }

    public function appliquerPromotion(Produit $produit): float
    {
        if ($this->promotion > 100 OR $this->promotion < 1 )
        {
            throw new Exception("Pourcentage invalide");
        } else {
            $prixFinal = $produit->calculerPrixFinal();
            return $prixFinal * ($this->promotion/100);
        }
    }
}