<?php

class Produit {
    //Liste des propriétés

    private $nom;
    private $description ;
    private $quantite ;
    private $prix ;


    private $date_inscription;
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

    public function setNom(string $value): self // :self signifie que la méthode retourne l'objet lui-même
    {
        $this->nom = $value; // $this fait référence à l'objet lui-même
        return $this; // Retourne l'objet lui-même
    }

    public function getNom(): string // :string signifie que la méthode retourne une chaîne de caractères
    {
        return $this->nom; // Retourne la valeur de la propriété nom
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
}

?>