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

    public function ajouterChambre(Chambre $chambre) {
        $this->chambres[] = $chambre;
    }
 
    public function getInfos() {
        return "<h4>". $this . "</h4>"
        . $this->adresse ." ". $this->cp. " ". $this->ville. "<br>"
        . "Nombre de chambres : ". $this->getNbChambres()."<br>"
        . "Nombre de chambres réservées : ".$this->getNbReservations()."<br>"
        . "Nombre de chambres libres : ". $this->getChambresLibres()."<br>";

    }

    public function getStatut() {
        
        $result = "";
          

       echo '<h5>Statuts des chambres de <strong>'. $this. '</strong></h5>
            <table class="uk-table uk-table-striped">
                <thead>
                    <tr>
                        <th>CHAMBRE</th>
                        <th>PRIX</th>
                        <th>WIFI</th>
                        <th>ETAT</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach ($this->chambres as $chambre) {
                        $result .= "<tr><td>Chambre ". $chambre->getnumChambre(). "</td><td>"
                        . $chambre->getPrixNuit(). "€ </td><td> "
                        . $chambre->getWifiIcon(). "</td><td>"
                        . $chambre->getDisponible() ."</td></tr>";
                    } return $result;
                '</tbody>
            </table>'; 
    }

    public function getNbReservations() {
           
        $totalReservations = 0;
        foreach($this->chambres as $chambre) {
            
            $totalReservations += $chambre->getCountReservations();

        }return $totalReservations;
    }

    public function getChambresLibres() {

        $result = $this->getNbChambres() - $this->getNbReservations() ;
        return $result;
    } 

    

    public function getReservations() {

        $result = "<h4>Réservations de l'hôtel ".$this." :</h4>
        <span class='uk-label-success'>". $this->getNbReservations(). " réservations</span><br>";

        if ($this->getNbReservations() == 0) {
            return $result = "<h4>Réservations de l'hôtel ".$this." :</h4>
            Aucune réservation<br>";  
        } else {
            foreach ($this->chambres as $chambre) {

            $result .= $chambre->getReservations() ;
        }return $result;
        }
    }

    public function __toString() {
        return $this->name;
    }
}

