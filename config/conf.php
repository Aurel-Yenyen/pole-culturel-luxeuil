<?php

class conf{

    static $debug = 1;
    
    static $databases = array( // Création d'un tableau qui nous permettera d'ajouter d'autres bases de données.
        'default' => array(
            'host' => 'localhost',
            'database' => 'tuto',
            'login' => 'root',
            'port' => '3306',
            'password' => ''
        )
    );
}
