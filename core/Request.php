<?php

class Request {

    public $url;  // Url appelé par les utilisateurs
    public $page = 1;
    public $prefix = false;
    public $data = false;

    function __construct()
    {
        // On récupère l'URL appelée par les utilisateurs
        $this->url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

        // On vérifie si la variable GET 'page' est définie et qu'elle est numérique et supérieure à zéro
        if (isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0) {
            // Si c'est le cas, on arrondit la valeur et on l'assigne à la propriété $page de l'objet
            $this->page = round($_GET['page']);
        }

        // On vérifie si des données ont été envoyées par POST
        if (!empty($_POST)) {
            // Si c'est le cas, on crée un objet stdClass vide pour stocker les données
            $this->data = new stdClass();
            foreach ($_POST as $k => $v) {
                // On assigne chaque clé/valeur de $_POST à une propriété de l'objet stdClass créé précédemment
                // Cela permet d'éviter les failles XSS en filtrant les données envoyées par l'utilisateur
                $this->data->$k = htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
            }
        }
    }
}