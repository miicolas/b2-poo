<?php

class Personne {

    private $nom ;
    private $prenom ;
    private $date_naissance;

    public function __construct(string $nom, string $prenom, DateTime $date_naissance)
    {

        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->date_naissance = $date_naissance ;

    }

    public function calculAge(): int {
        $date = new DateTime();
        $age = $date->diff($this->date_naissance);
        return $age->y;
    }

    public function getNom (): string {
       return  $this->nom ;
    }

    public function getPrenom (): string {
        return $this->prenom;
    }

    public function getDate (): DateTime {
        return $this->date_naissance;
    }
}
?>