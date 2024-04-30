<?php


function break_cat()
{
    while (($ligne = fgets(STDIN)) !== false) {
        echo $ligne;
        if (trim($ligne) === 'EOF') {
            break;
        }
    }
}