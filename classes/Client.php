<?php


class Client {

    private string $firstName;
    private string $lastName;
    private array $reservations;

    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->reservations = [];
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }
 
    /*public function getReservations()
    {
        return $this->reservations;
    }*/

    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function reserver(Reservation $reservation) {
        $this->reservations[] = $reservation;
    } 

    public function prixTotal() {
        $result = 0;
        foreach ($this->reservations as $reservation) {
            $result += $reservation->getChambre()->getPrixNuit() * $reservation->getNbNuits()->format('%d');
        } return $result;
    }

    public function getNbReservations () {
        return count($this->reservations). " réservations<br>";
    }
  

    public function getReservations() {
            $result = "<h4>Réservations de ". $this." :</h4>". 
            "<span class='uk-label uk-label-success'>".$this->getNbReservations()."</span><br>";
        foreach ($this->reservations as $reservation) {
            $result .= "<strong>Hotel : ".  
            $reservation->getChambre()->getHotel(). "</strong> / ". 
            $reservation->getChambre() ." (". 
            $reservation->getChambre()->getNbLits() . " lits - ". 
            $reservation->getChambre()->getPrixNuit(). " € - Wifi : ".
            $reservation->getChambre()->getWifi(). ") - du ". 
            $reservation->getdateArrivee()->format("d-m-y")." au ". 
            $reservation->getDateDepart()->format("d-m-y") ."<br>";
        } 
        return $result . "Total : ". $this->prixTotal(). "€<br>";
    }

    public function __toString() {
        return $this->firstName ." ". $this->lastName;
     }
} 

