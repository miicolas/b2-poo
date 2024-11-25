<?php


require_once './interface/Promotion.php';
class ReductionFixe implements Promotion
{
    private $promotion;

    public function __construct(float $promotion)
    {
        $this->promotion = $promotion;
    }

    public function appliquerPromotion(Produit $produit): float
    {
        $prixFinal = $produit->calculerPrixFinal();
        return $prixFinal - $this->promotion;
    }
}
?>