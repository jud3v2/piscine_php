<?php

function continue_cat() {
    while (($ligne = fgets(STDIN)) !== false) {
        echo $ligne;

        if (trim($ligne) === 'EOF') {
            continue;
        }
    }
}
