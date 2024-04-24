<?php

require 'classes/Hotel.php';
require 'classes/Chambre.php';
require 'classes/Client.php';
require 'classes/Reservation.php';


$geoffroy = new Client("Geoffroy", "Maur");
$hilton = new Hotel("Hilton ****", "10 route de la Gare", "67000", "STRASBOURG", 30);
$chambre1Hilton = new Chambre($hilton, 1, 2, false, 120); 


$resa1 = new Reservation($geoffroy, $chambre1Hilton, "01-01-2024", "03-01-2024");


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

<nav class="uk-navbar-container">
    <div class="uk-container">
        <div uk-navbar>

            <div class="uk-navbar-left">

                <a class="uk-navbar-item uk-logo" href="#" aria-label="Back to Home">Logo</a>

                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#">
                            <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                            Features
                        </a>
                    </li>
                </ul>

                <div class="uk-navbar-item">
                    <div>Some <a href="#">Link</a></div>
                </div>

                <div class="uk-navbar-item">
                    <form action="javascript:void(0)">
                        <input class="uk-input uk-form-width-small" type="text" placeholder="Input" aria-label="Input">
                        <button class="uk-button uk-button-default">Button</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</nav>
    
</body>
</html>
