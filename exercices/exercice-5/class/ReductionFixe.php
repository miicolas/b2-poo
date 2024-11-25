<?php

require_once './interface/Promotion.php';
class ReductionFixe implements Promotion
{
    private $promotion;

    public function __construct(float $promotion)
    {
        $this->promotion = $promotion;
    }

    public function appliquerPromotion($produit): float
    {
        if ($this->promotion <= $produit AND $this->promotion > 0 ){
            $prixFinal = $produit->calculerPrixFinal();
            return $prixFinal - $this->promotion;

        } else {
            throw new Exception("Prix invalide invalide");
        }
    }

}
?>