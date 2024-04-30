<?php
function multiples($nombre)
{
    for ($i = 0; $i <= 200000; $i += $nombre) {
        echo $i . PHP_EOL;
    }
}