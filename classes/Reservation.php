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
    $this->nbNuits = 0;


        
            $diff = $tdateArrivee->diff($dateDepart);
            $diff->format('%d') . " jours" ;
    }
}