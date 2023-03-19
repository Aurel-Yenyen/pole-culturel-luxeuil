<?php

function debug($var){

    if(Conf::$debug>0){ // Affichage plus propre des erreurs

        $debug = debug_backtrace();

        echo '<p>&nbsp;</p><a href="#"><strong>' . $debug[0]['file'] .'</strong> l.'. $debug[0]['line'].'</a>'; 
        echo '<ol>';
    
        foreach($debug as $k=>$v){
            if($k > 0){
                echo '<li>&nbsp;><strong>' . $v['file'] .'</strong> l.'. $v['line'].'</li>';   
            }
        }
        echo '</ol>';
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }

}