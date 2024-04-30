<?php

function return_calls() {
    static $calls = 0;
    $calls += 3;

    return $calls;
}