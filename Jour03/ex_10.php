<?php

$counter = 0;
function print_calls() {
    global $counter;
    $counter++;
    echo $counter;
}