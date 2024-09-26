<?php

class Employe
{
    private string $nom;
    private string $poste;
    private float $salaire;

    public function __construct(string $nom, string $poste, float $salaire)
    {
        $this->nom = $nom;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }

    public function __toString(): string
    {
        return "$this->nom est un $this->poste et a un salaire de $this->salaire.";
    }

    public function __clone()
    {
        $this->salaire *= 1.10;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setPoste(string $poste)
    {
        $this->poste = $poste;
        return $this;
    }

    public function getPoste(){
        return $this->poste;
    }

    public function setSalaire(string $salaire)
    {
        $this->salaire = $salaire;
        return $this;
    }

    public function getSalaire(){
        return $this->salaire;
    }
}

$employe1 = new Employe('Julien', 'developpeur', 10);

$employe2 = clone $employe1;

echo strval($employe1) . '<br>';
echo strval($employe2);