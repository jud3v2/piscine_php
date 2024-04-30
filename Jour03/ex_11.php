<?php

$nb_a = 10;
$nb_b = 5;
function my_sub() {
    global $nb_a, $nb_b;
    $nb_a = $nb_a - $nb_b;

    return $nb_a;
}