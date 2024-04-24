<?php


class Chambre {

    private int $numChambre;
    private int $nbLits;
    private bool $wifi;
    private int $prixNuit;
    private bool $disponible;


    public function __construct(int $numChambre, int $nbLits, bool $wifi, int $prixNuit) {
        $this->numChambre = $numChambre;
        $this->nbLits = $nbLits;
        $this->wifi = $wifi;
        $this->prixNuit = $prixNuit;
        $this->disponible = true;
    }
}