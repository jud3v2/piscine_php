<?php

function print_film_from_nbr($nb) {
    switch ($nb) {
        case 3:
            echo "Les trois freres".PHP_EOL;
            break;
        case 6:
            echo "Sixieme sens".PHP_EOL;
            break;
        case 0:
            echo "l'homme invisible".PHP_EOL;
            break;
        case 23:
            echo "Le nombre 23".PHP_EOL;
            break;
        case 28:
            echo "28 jours plus tard".PHP_EOL;
            break;
        default:
            echo "Je ne connais pas.".PHP_EOL;
            break;
    }
}