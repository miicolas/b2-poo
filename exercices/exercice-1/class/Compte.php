<?php

class CompteBancaire
{
    private $titulaire;
    private $solde = 0;
    private $decouvert ;

    public function __construct(string $titulaire, float $montantInitial)
    {
        $this->titulaire = $titulaire;
        $this->crediter($montantInitial);
    }

    public function setTitulaire(string $nom): self
    {
        $this->titulaire = $nom;
        return $this;
    }

    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    public function crediter(float $value): self
    {
        if ($value < 0) {
            throw new Exception("Le montant à créditer doit être positif.");
        }
        $this->solde += $value;
        return $this;
    }

    public function debiter(float $value): self
    {
        if ($this->solde - $value >= $this->decouvert) {
            $this->solde -= $value;
        } else {
            throw new Exception("Solde insuffisant pour débiter ce montant.");
        }
        return $this;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }
}

?>
