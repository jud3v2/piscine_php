<?php

// Faire le triangle de pascal.

function triangle_of_pascal(int $number)
{
    if ($number <= 0) {
        echo "Le nombre définit ne peut pas être inférieur ou égal à 0";
        return;
    } else {
        $saved_row = [];

        for ($i = 0; $i <= $number; $i++) {
            if ($i > 0) {
                // Ajoute un \n à la fin de chaque ligne
                echo "1" . PHP_EOL;
            }
            // Double boucle pour l'affichage en ligne.
            // Commence à un pour eviter d'avoir la première colonne à 0.
            $row = [];
            for ($j = 1; $j <= $i; $j++) {
                // Vérifie la deuxième ligne.
                if ($i === 2) {
                    // Affiche 11 à la deuxième ligne
                    array_push($row, 1);
                    array_push($saved_row, $row);
                    echo 1;
                } else {
                    // Affiche le reste des caractères.
                    array_push($row, $j);
                    array_push($saved_row, $row);
                    echo $j;
                }
            }
        }
        unset($saved_row[0]);
        var_dump($saved_row);
    }
}

triangle_of_pascal(8);
