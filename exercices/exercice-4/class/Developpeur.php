<?php

require_once './interfaces/EmployeInterface.php';

class Developpeur implements EmployeInterface
{

    private float $salaire;
    public function __construct(float $salaire)
    {
        $this->salaire = $salaire;
    }

    public function travailler(): string
    {
        return "Je code en PHP";
    }

    public function getSalaire(): float {
        return $this->salaire;
    }


}

?>
