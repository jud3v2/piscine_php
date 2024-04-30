<?php

function rev_epur_str($string = null) {
    if(!is_string($string)) {
        return false;
    }

    trim(preg_replace('/[\s\t]+/', '', $string));

    $array = explode(' ', $string);

    $array = array_reverse($array);

    remove_spaces_from_explode($array);

    return implode(' ', $array);
}

function remove_spaces_from_explode(&$array) {
    foreach ($array as $k => $v) {
        if($v == '') {
            unset($array[$k]);
        }
    }
}