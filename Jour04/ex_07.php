<?php


function aff_array($arr) {
    foreach ($arr as $item) {
        echo $item.PHP_EOL;
    }

    return count($arr);
}