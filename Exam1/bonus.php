<?php

if(count($argv) > 1) {
    // supprime le nom de fichier en tant que argument.
    unset($argv[0]);
    foreach ($argv as $item) {
        echo md5($item).PHP_EOL;
    }
} else {
    echo "Merci de bien vouloir ajouter au moins un argument.";
}