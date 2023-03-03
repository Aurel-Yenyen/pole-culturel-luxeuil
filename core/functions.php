<?php

function debug($var){

    // Vérification que le mode debug est activé
    if(Conf::$debug > 0){ 

        // Récupération de la trace de la pile d'appels
        $debug = debug_backtrace();

        // Affichage de l'endroit où la fonction est appelée (fichier et ligne)
        echo '<p>&nbsp;</p><a href="#"><strong>' . $debug[0]['file'] .'</strong> l.'. $debug[0]['line'].'</a>'; 

        // Affichage de la liste des appels ayant mené à l'appel de la fonction
        echo '<ol>';
        foreach($debug as $k => $v){
            if($k > 0){
                echo '<li>&nbsp;><strong>' . $v['file'] .'</strong> l.'. $v['line'].'</li>';   
            }
        }
        echo '</ol>';

        // Affichage de la variable passée en argument, formatée avec print_r
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}



