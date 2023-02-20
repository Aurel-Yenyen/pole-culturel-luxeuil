<?php

class conf{

    static $debug = 1;
    
    static $databases = array( // Création d'un tableau qui nous permettera d'ajouter d'autres bases de données.
        'default' => array(
            'host' => 'localhost',
            'database' => 'poleculturel',
            'login' => 'root',
            'port' => '3306',
            'password' => '' // Attention: SQLSTATE[HY000] [1045] Erreur sur l'un des élément du tableau de la BD
        )
    );
}




Router::prefix('cockpit', 'admin');
Router::connect('/', 'pages/view/1');


Router::connect('cockpit', 'users/login');
Router::connect('evenement/:slug-:id','evenements/view/id:([0-9]+)/slug:([a-zA-Z0-9\-]+)');
