<?php

function print_until($max) {
    if($max < 0) {
        echo "Boulet !".PHP_EOL;
        return false;
    } else {
        $i = 0;
        while ($i <= $max) {
            echo $i.PHP_EOL;
            $i++;
        }
        return true;
    }
}