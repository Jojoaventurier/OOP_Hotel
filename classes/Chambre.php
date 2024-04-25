<?php


class Chambre {

    private Hotel $hotel;
    private int $numChambre;
    private int $nbLits;
    private bool $wifi;
    private int $prixNuit;
    private bool $disponible;
    private array $reservations;

    public function __construct(Hotel $hotel, int $numChambre, int $nbLits, bool $wifi, int $prixNuit) {
        $this->hotel = $hotel;
        $this->numChambre = $numChambre;
        $this->nbLits = $nbLits;
        $this->wifi = $wifi;
        $this->prixNuit = $prixNuit;
        $this->disponible = true;
        $this->reservations = [];
        $this->hotel->ajouterChambre($this);
    }

    public function getHotel()
    {
        return $this->hotel;
    }

    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
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
    {   if ($this->wifi == true) {
        return "oui";
        } else {
            return "non";
        }
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
    {   if ($this->disponible == true) {
        return "DISPONIBLE";
        } else {
            return "RESERVEE";
        }
    }

    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    public function getReservations()
    {   $result = "";
        
        foreach ($this->reservations as $reservation) {
            $result.= $reservation->getClient().
            " - ". $reservation->getChambre() .
           " - du ". 
            $reservation->getdateArrivee()->format("d-m-y")." au ". 
            $reservation->getDateDepart()->format("d-m-y") ."<br>";"<br>";
        } return $result;
        
    }

    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

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