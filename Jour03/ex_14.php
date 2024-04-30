<?php

function say_my_name($str = "Toto") {
    if($str === "Toto") {
        echo "My name is Toto !";
    } else {
        echo "My name is ".$str." !";
    }
}