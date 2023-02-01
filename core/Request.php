<!-- Fichier contenant les Requêtes -->


<?php

class Request{

    public $url;  // Url appelé par les utilisateurs

    function __construct()
    {
        $this->url = isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'/';
    }
}