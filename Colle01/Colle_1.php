<?php

function colle($horizontal, $vertical) {
    for ($i = 0; $i < $vertical; $i++) {
        for ($j = 0; $j < $horizontal; $j++) { // Coin supérieur gauche
            if ($i === 0 && $j === 0) {
                echo "o";
            }
            elseif ($i === 0 && $j === $horizontal - 1) { // Coin supérieur droit
                echo "o";
            }
            elseif ($i === $vertical - 1 && $j === 0) { // Coin inférieur gauche
                echo "o";
            }
            elseif ($i === $vertical - 1 && $j === $horizontal - 1) { // Coin inférieur droit
                echo "o";
            }
            else {
                if ($j === 0 || $j === $horizontal - 1) { // Bord vertical gauche et droit
                    echo "|";
                }
                // Gestion horizontal (espaces à l'intérieur)
                elseif ($i === 0 || $i === $vertical - 1) { // Ligne du haut et ligne du bas
                    echo "-";
                }
                else { // Espaces à l'intérieur
                    echo ' ';
                }
            }
        }
        echo PHP_EOL;
    }
}

colle(1,1);
colle(5,3);
colle(2,10);
colle(2,10);
colle(-4,-2);
colle(5,1);