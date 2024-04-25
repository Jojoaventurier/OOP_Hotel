<?php

require 'classes/Hotel.php';
require 'classes/Chambre.php';
require 'classes/Client.php';
require 'classes/Reservation.php';


$geoffroy = new Client("Geoffroy", "MAUR");
$virgile = new Client("Virgile", "GIBELLO");
$lucas = new Client("Lucas", "GIAMBERINI");

$hilton = new Hotel("Hilton **** Strasbourg", "10 route de la Gare", "67000", "STRASBOURG", 30);
$regent = new Hotel("Régent **** Paris", "5 rue de la Seine", "75000", "Paris", 25);


$chambre1Hilton = new Chambre($hilton, 1, 2, false, 120); 
$chambre2Hilton = new Chambre($hilton, 2, 2, false, 120); 
$chambre3Hilton = new Chambre($hilton, 3, 2, false, 120); 
$chambre16Hilton = new Chambre($hilton, 16, 2, true, 300); 
$chambre17Hilton = new Chambre($hilton, 17, 2, true, 300); 
$chambre18Hilton = new Chambre($hilton, 18, 2, true, 300); 
$chambre19Hilton = new Chambre($hilton, 19, 2, true, 300); 

$chambre1Regent = new Chambre($regent, 1, 2, true, 450); 
$chambre2Regent = new Chambre($regent, 2, 2, true, 450); 


$resa1 = new Reservation($geoffroy, $chambre1Hilton, "01-01-2024", "03-01-2024");
$resa2 = new Reservation($geoffroy, $chambre2Hilton, "05-01-2024", "07-01-2024");
$resa3 = new Reservation($lucas, $chambre3Hilton, "09-01-2024", "10-01-2024");
$resa4 = new Reservation($virgile, $chambre17Hilton, "08-01-2024", "11-01-2024");


//echo $hilton->getInfos();


echo $regent->getReservations();

echo $hilton->getReservations();
echo $geoffroy->getReservations();
echo $hilton->getStatut();


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.20.4/css/uikit-core-rtl.min.css" integrity="sha512-/KGfVFsbk9a7nzjCYF0dSMc+H58wKeODeZVyPaR20TlLVtoQVitubbROxToRODDiBW4EbBSAA//yAt1N+xgVtg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.20.4/js/uikit.min.js" integrity="sha512-qlI3geWkDYoFqY+xf/1GTxLOYw5c2Fp0w7+bPTrkwEJD7+NWDTWOKNFA48kDY/uC5AU9jFAt6VlueKFDVjYjHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>


    
</body>
</html>
