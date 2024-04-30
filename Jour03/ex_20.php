<?php

function spupof($str) {
    $list = str_split($str);

    foreach ($list as $char) {
        if(chr(ord($char)) === 'z'){
            echo 'a';
        // Convertie le backspace
        } else if (chr(ord($char)) === ' ') {
            echo ' ';
        } else {
            if(chr(141) >= ord($char) && ord($char) <= chr(172) || chr(101) >= ord($char) && ord($char) <= chr(132)) {
                echo strtolower(chr(ord($char) + 1));
            }
        }
    }

    echo PHP_EOL;
}