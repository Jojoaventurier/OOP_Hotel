<?php


class Hotel {

    private string $name;
    private string $adresse;
    private string $cp;
    private string $ville;
   // private int $nbChambres;
    private array $chambres;

    public function __construct(string $name, string $adresse, string $cp, string $ville, int $nbChambres) {
        $this->name = $name;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->nbChambres = $nbChambres;
        $this->chambres = [];

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNbChambres()
    {
        return $this->nbChambres;
    }

    public function setNbChambres($nbChambres)
    {
        $this->nbChambres = $nbChambres;

        return $this;
    }

    public function getChambres()
    {
        return $this->chambres;
    }

    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }
}