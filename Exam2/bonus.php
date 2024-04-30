<?php
function playWithMe($numLines = null)
{
    if (!is_int($numLines) || $numLines <= 0) {
        return false;
    }

    $result = '1'; // Initialisation avec la première ligne

    for ($i = 0; $i < $numLines; $i++) {
        $currentLine = '';
        $count = 1;
        $len = strlen($result);

        for ($j = 1; $j < $len; $j++) {
            if ($result[$j - 1] == $result[$j]) {
                $count++;
            } else {
                $currentLine .= $count . $result[$j - 1];
                $count = 1;
            }
        }

        $currentLine .= $count . $result[$len - 1];
        $result = $currentLine;
    }

    echo $result.PHP_EOL;

    return true;
}