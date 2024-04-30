<?php

function my_count_chars($string, $letter) {
    foreach (count_chars($string, 1) as $i => $val) {
        if($letter === chr($i)) {
            return $val;
        }
    }
}