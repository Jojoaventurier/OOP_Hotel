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

   /* public function ChambresReservees() {
        
        foreach ($chambres[] as $chambre){
            return $chambre->reservations 
        };
    }*/

 
    public function getInfos() {
        return $this . "<br>"
        . $this->adresse ." ". $this->cp. " ". $this->ville. "<br>"
        . "Nombre de chambres : ". $this->getNbChambres() ;
       //ajouter la suite 
    }

    public function getStatut() {
        
        $result = "";
          

       echo '<table class="uk-table uk-table-striped">
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
        $result .= "<tr><td>Chambre ". $chambre->getnumChambre(). "</td><td>
         ". $chambre->getPrixNuit(). "€ </td><td> ". $chambre->getWifi(). "</td><td>".$chambre->getDisponible() ."</td></tr><br>";
    } return $result; '
    </tbody>
</table>';


foreach ($this->chambres as $chambre) {
    $result .= "Chambre ". $chambre->getnumChambre(). "
     ". $chambre->getPrixNuit(). "€ ". $chambre->getWifi(). " ".$chambre->getDisponible() ."<br>";
} return $result;
        
    }


    public function getNbReservations() {
           
        $totalReservations = 0;
        foreach($this->chambres as $chambre) {
            
            $totalReservations += $chambre->getCountReservations();

        }return $totalReservations;
    }

    public function getReservations() {

        $result = "Réservations de l'hôtel ".$this." :<br>
        ". $this->getNbReservations(). " réservations<br>";

        if ($this->getNbReservations() == 0) {
            return $result = "Réservations de l'hôtel ".$this." :<br>
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

   /* 
    <table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Table Heading</th>
            <th>Table Heading</th>
            <th>Table Heading</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
    </tbody>
</table>
 */