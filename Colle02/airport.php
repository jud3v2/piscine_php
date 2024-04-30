<?php

if (!$argv[1] || !is_string($argv[1])) {
    // gestion du premier paramètre.
    echo "Usage: php airport.php \"Votre chaîne de caractères\"\n";
    exit(1);
}

// gestion de la couleur ou le deuxième paramètre.
if($argv[2] ?? false) {
     $acceptedValues = ['i', 'w', 's', 'e'];

     if(!in_array($argv[2], $acceptedValues)) {
         echo "La couleur sélectionnez n'est pas autorisé";
         exit(1);
     }
}

if ($argv[1] === "-h" || $argv[1] === "--help") {
    $str = <<<EOF
MAN My AirPort !

Pour utiliser ce script merci de bien vouloir insérer un argument à la suite de ce script.

Ex: php airport.php "Bonjour à tous !"
-----------------------------------------------

Pour changer de couleur du terminal qui est par défault en mode info.

Ex: php airport.php "Bonjour à tous !" "i"

Voici les options disponible:

i: info ( Affiche l'output du terminal en bleu )
e: error ( Affiche l'output du terminal en rouge )
w: warning ( Affiche loutput du terminal en jaune )
s: success( Affiche l'output du terminal en vert )  
d: default ( Affiche l'output de manière totalement naturel )
EOF;

    echo $str;
    exit(1);
}

$text = $argv[1];
$length = 30;

for ($i = 0; ; $i++) {
    $start = $i % strlen($text);
    $substring = substr($text, $start, $length);

    // Si la sous-chaîne est plus courte que la longueur spécifiée, ajoutez le début de la chaîne pour remplir afin qu'elle soit collé
    if (strlen($substring) < $length) {
        $substring .= ' '.substr($text, 0, $length - strlen($substring));
    }

    if(count($argv) > 1) {
        // affichage de la couleur
        colorLog($substring, $argv[2] ?? null);
    } else {
        // affichage de la couleur
        colorLog($substring);
    }

    usleep(500000); // Pause de une demi seconde.

    // Clear le terminal avant tous nouvelle affichage
    @system ('clear ') ;
    flush(); // Rafraîchit la sortie pour l'affichage immédiat
}

function colorLog($str, $type = "i"){
    switch ($type) {
        case 'e': //error
            echo "\033[31m$str \033[0m\n";
            break;
        case 's': //success
            echo "\033[32m$str \033[0m\n";
            break;
        case 'w': //warning
            echo "\033[33m$str \033[0m\n";
            break;
        case 'i': //info
            echo "\033[36m$str \033[0m\n";
            break;
        case 'd': //info
            echo $str;
            break;
        default:
            echo $str;
            break;
    }
}