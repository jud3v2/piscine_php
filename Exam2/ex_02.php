<?php

function min_len_array($array = []) {
    // Vérifier si le tableau est vide
    if (empty($array)) {
        return false;
    }

    $minKey = null;
    $minValue = null;

    foreach ($array as $key => $value) {
        // Si la clé minimale n'a pas été définie ou la nouvelle clé est plus courte
        if ($minKey === null || strlen($key) < strlen($minKey) || (strlen($key) === strlen($minKey) && strlen($value) < strlen($minValue))) {
            $minKey = $key;
            $minValue = $value;
        }
    }

    return $minValue;
}