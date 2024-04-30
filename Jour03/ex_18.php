<?php

function get_args() {
    return func_get_args();
}

function get_last_arg() {
    $c = count(func_get_args());
    return func_get_args()[$c - 1];
}