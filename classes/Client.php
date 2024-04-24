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

    public function __toString() {
        $this->nom ." ". $this->prenom;
    }

    public function getReservations() {

        foreach ($this->reservations as $reservation) {
            $result .= $reservation->getClient() . " - " . $reservation->getChambre();
        } 
        return $result;
    }
} 

