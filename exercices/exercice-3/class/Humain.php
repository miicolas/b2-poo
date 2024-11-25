<?php
require_once './trait/hourTrait.php';
require_once './class/Character.php';


class Humain extends Character
{
    use hourTrait;

    private string $nom;

    public function __construct(string $nom)

    {
        parent::__construct($nom);
    }


}