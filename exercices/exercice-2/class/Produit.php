<?php

class Produit {
    //Liste des propriétés

    private $nom;
    private $description ;
    private $quantite ;
    private $prix ;
    private $date_inscription;
    const TAXE = 1.20;


    public function __construct(
        string $nom,
        ?string $description,
        int $quantite,
        float $prix,
    )
    {
        $this->date_inscription = new DateTime();
        $this->setNom($nom);
        $this->setDescription($description);
        $this->setQuantite($quantite);
        $this->setPrix($prix);
    }

    // Setters et Getters

    public function getPriceHT(): float
    {
        return round($this->prix / self::TAXE, 2);
    }

    public function getPriceTTC(): float
    {
        return round($this->prix, 2);
    }


    public function setNom(string $value): self
    {
        $this->nom = $value;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setDescription(?string $value): self
    {
        $this->description = $value;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setQuantite(int $value): self
    {
        $this->quantite = $value;
        return $this;
    }
    public function getQuantite(): int
    {
        return $this->quantite;
    }

    public function setPrix(float $value): self
    {
        $this->prix = $value;
        return $this;
    }
    public function getPrix(): float
    {
        return $this->prix;
    }

    public function getTVA(): float
    {
        return $this->prix - $this->getPriceHT(); //
    }
}



?>