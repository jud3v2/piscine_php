<?php

function print_array_with_key($arr) {
    foreach ($arr as $item => $value) {
        echo $item." : ".$value.PHP_EOL;
    }
}