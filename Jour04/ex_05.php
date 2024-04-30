<?php

function print_range($range) {
    $saved_range = $range;

    switch($saved_range) {
        case $range < 42:
            do {
                echo $saved_range.PHP_EOL;
                $saved_range++;
            } while ($saved_range <= 42);
            break;
        case $range >= 42:
            echo $range.PHP_EOL;
            break;
        default:
            break;
    }
    
    return $range === 42;
}

print_range(42);