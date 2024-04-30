<?php

function resum_join_str($str1 = null, $str2 = null)
{
    if (!is_string($str1) || !is_string($str2)) {
        return false;
    }

    if (strlen($str1) < 14) {
        $str1 .= str_repeat(".", 14 - strlen($str1));
    }

    if (strlen($str2) < 3) {
        $str2 = str_repeat(".", 3 - strlen($str2)).$str2;
    }

    return substr($str1, 0, 14) . substr($str2, -3);
}