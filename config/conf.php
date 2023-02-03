<?php

class conf{

    static $debug = 1;
    
    static $databases = array( // Création d'un tableau qui nous permettera d'ajouter d'autres bases de données.
        'default' => array(
            'host' => 'localhost',
            'database' => 'tuto',
            'login' => 'root',
            'port' => '3306',
            'password' => '' // Attention: SQLSTATE[HY000] [1045] Erreur sur l'un des élément du tableau de la BD
        )
    );
}

Router::connect('post/:slug-:id','posts/view/.$v.([0-9]+)/slug:([a-z0-9\-]+)');