<?php


class Chambre {

    private int $numChambre;
    private int $nbLits;
    private bool $wifi;
    private int $prixNuit;
    private bool $disponible;
    private array $reservations;

    public function __construct(int $numChambre, int $nbLits, bool $wifi, int $prixNuit) {
        $this->numChambre = $numChambre;
        $this->nbLits = $nbLits;
        $this->wifi = $wifi;
        $this->prixNuit = $prixNuit;
        $this->disponible = true;
        $this->reservations = [];
    }

    public function getNumChambre()
    {
        return $this->numChambre;
    }

    public function setNumChambre($numChambre)
    {
        $this->numChambre = $numChambre;

        return $this;
    }

    public function getNbLits()
    {
        return $this->nbLits;
    }

    public function setNbLits($nbLits)
    {
        $this->nbLits = $nbLits;

        return $this;
    }

    public function getWifi()
    {
        return $this->wifi;
    }

    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }
 
    public function getPrixNuit()
    {
        return $this->prixNuit;
    }

    public function setPrixNuit($prixNuit)
    {
        $this->prixNuit = $prixNuit;

        return $this;
    }

    public function getDisponible()
    {
        return $this->disponible;
    }

    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    public function reserver(Reservation  $reservation) {
        $this->disponible = false;
        $this->reservations[] = $reservation;
    }

    public function __toString() {
        return "Chambre ".$this->numChambre." ";  
    }
}