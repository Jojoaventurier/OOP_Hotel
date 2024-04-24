<?php

require 'classes/Hotel.php';
require 'classes/Chambre.php';
require 'classes/Client.php';
require 'classes/Reservation.php';


$geoffroy = new Client("Geoffroy", "Maur");
$hilton = new Hotel("Hilton ****", "10 route de la Gare", "67000", "STRASBOURG", 30);
$chambre1Hilton = new Chambre($hilton, 1, 2, false, 120); 


$resa1 = new Reservation($geoffroy, $chambre1Hilton, "01-01-2024", "03-01-2024");



var_dump($geoffroy);
var_dump($hilton);
var_dump($chambre1Hilton);

