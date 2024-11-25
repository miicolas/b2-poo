<?php
require_once './trait/hourTrait.php';
require_once './class/Character.php';

class Robot extends Character
{
    use hourTrait;

    private string $nom;

    public function __construct(string $nom)
    {
        parent::__construct($nom);

    }

}