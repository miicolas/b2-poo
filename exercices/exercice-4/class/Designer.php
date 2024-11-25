<?php

require_once './interfaces/EmployeInterface.php';

class Designer implements EmployeInterface
{

    private float $salaire;
    public function __construct(float $salaire)
    {
        $this->salaire = $salaire;
    }

    public function travailler(): string
    {
        return "J'utilise Figma";
    }

    public function getSalaire(): float {
        return $this->salaire;
    }


}

?>
