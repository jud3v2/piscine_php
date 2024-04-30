<?php

function my_sort(&$my_array) {
    static $count = 0;
    $count++;

    $array_count = count($my_array);
    $last = $my_array[$array_count -1];
    $first = $my_array[0];

    foreach ($my_array as &$item) {
        if($item === $first) {
            $item = $last;
        } elseif($item === $last) {
            $item = $first;
        }
    }

    return $count;
}