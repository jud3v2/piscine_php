<?php

function my_count_five($number) {
    for ($i = 5; $i >= 0; $i--) {
        echo $number++.PHP_EOL;
    }
}