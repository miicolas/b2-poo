<?php

require_once './trait/HistoriquePrix.php';

abstract class Produit
{

    use HistoriquePrix ;
    private $nom;
    private $prix;

    public function __construct(string $nom, float $prix)
    {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->ajouterHistorique($prix);

    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrix(): float
    {
        return $this->prix;

    }

    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
        $this->ajouterHistorique($prix);
    }

    abstract public function calculerPrixFinal(): float;

}

class ProduitPhysique extends Produit
{
    const FRAIS_LIVRAISON = 2.5;

    private $poids;

    public function __construct(string $nom, float $prix, float $poids)
    {
        parent::__construct($nom, $prix);
        $this->poids = $poids;
    }

    public function getPoids(): float
    {
        return $this->poids;
    }

    public function calculerPrixFinal(): float
    {
        return $this->getPrix() + self::FRAIS_LIVRAISON;
    }

}

class ProduitVirtuel extends Produit
{
    private $fichier;

    public function __construct(string $nom, float $prix, string $fichier)
    {
        parent::__construct($nom, $prix);
        $this->fichier = $fichier;
    }

    public function getFichier(): string
    {
        return $this->fichier;
    }

    public function calculerPrixFinal(): float
    {
        return $this->getPrix();
    }

}

?>
