<?php
class Entreprise
{

    private array $employes = [];

    public function ajouterEmploye($employe): self //
    {
        $this->employes[] = $employe;
        return $this;
    }

    public function calculMassSalaires(): float
    {
        $mass = 0;
        foreach ($this->employes as $employe) {
            $mass += $employe->getSalaire();
        }
        return $mass;
    }
}
?>