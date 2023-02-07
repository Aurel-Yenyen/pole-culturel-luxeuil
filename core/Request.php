<!-- Objet qui permet de stocker toutes les informations des requêtes faites par l'utilisateur -->

<?php

class Request{

    public $url;  // Url appelé par les utilisateurs
    public $page = 1;
    public $prefix = false;

    function __construct()
    {
        $this->url = isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'/';
        if(isset($_GET['page'])){
            if([$_GET['page']] > 0){
                $this->page = round($_GET['page']);
            }
        }
    }
}