<?php


/***
 * Modalités de rendu : ex_04.php
 * CONSIGNE
 * Faire une fonction nommée “return_calls” qui prend une chaîne de caractères en paramètre et un tableau.
 * Elle essayera d’appeler la fonction nommée grâce au premier paramètre et les arguments seront le tableau.
 * La moindre erreur retournera FALSE. En cas de succès il faudra retourner le nombre de fois que la fonction
 * définit par le premier paramètre est appelé, même si c’est une erreur. Les fonctions pourront être celles de
 * l’examen. Si jamais la fonction retourne quelque chose sans rien afficher ce n’est pas un problème. Vous
 * n’avez pas à inclure les autres fichiers, on le fera à l’aide de la commande suivante si nécessaire :
 * foreach ( range (1 , 4) as $v ) include (" ex_0$ {v}. php") ;
 */
function return_calls(string $functionName = null, array $arguments = null)
{
    if (!is_string($functionName) || !is_array($arguments)) {
        return false;
    }

    // Vérifier si la fonction existe
    if (!function_exists($functionName)) {
        return false;
    }

    // Initialiser le compteur d'appels
    $callCount = 0;

    // Capturer la sortie (output) pour éviter les éventuels affichages
    ob_start();

    // Essayer d'appeler la fonction avec les arguments
    try {
        call_user_func_array($functionName, $arguments);
        $callCount++;
    } catch (Exception $e) {
        // En cas d'erreur, retourner FALSE
        ob_end_clean(); // Nettoyer la sortie tampon en cas d'erreur
        return false;
    }

    // Récupérer la sortie (output) et nettoyer la mémoire tampon
    ob_end_clean();

    // Retourner le nombre d'appels réussis
    return $callCount;
}