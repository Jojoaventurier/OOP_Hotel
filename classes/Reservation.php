<?php


class Reservation {

    private Client $client;
    private Chambre $chambre;
    private DateTime $dateArrivee;
    private Datetime $dateDepart;
    private int $nbNuits;

    public function __construct(Client $client, Chambre $chambre, string $dateArrivee, string $dateDepart) {
    $this->client = $client;
    $this->chambre = $chambre;
    $this->dateArrivee = new DateTime($dateArrivee);
    $this->dateDepart = new DateTime($dateDepart);
    $diff = $tdateArrivee->diff($dateDepart);
    $diff->format('%d');
    $this->nbNuits = $diff;
    $this->client = reserver($this);
    $this->chambre = reserver($this);
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function getChambre()
    {
        return $this->chambre;
    }
 
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function getDateArrivee()
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee($dateArrivee)
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getNbNuits()
    {
        return $this->nbNuits;
    }

    public function setNbNuits($nbNuits)
    {
        $this->nbNuits = $nbNuits;

        return $this;
    }

}