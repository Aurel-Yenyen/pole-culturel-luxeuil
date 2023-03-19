<!-- Objet qui permet de rediriger et d'initialisé les bons composant en fonction de l'url taper -->

<?php

class Dispatcher {

    // La variable $request va stocker l'objet Request qui sera créé plus tard
    var $request;

    function __construct() {
        
        // Création d'un objet Request à partir de l'URL actuelle
        $this->request = new Request;

        // Analyse l'URL pour extraire le contrôleur, l'action et les paramètres
        Router::parse($this->request->url, $this->request);

        // Charge le contrôleur approprié
        $controller = $this->loadController();

        // Détermine l'action à appeler sur le contrôleur
        $action = $this->request->action;

        // Si l'URL comporte un préfixe, comme "admin_", on le préfixe à l'action
        if ($this->request->prefix) {
            $action = $this->request->prefix . '_' . $action;
        }

        // Vérifie si l'action est définie dans le contrôleur chargé
        if (!in_array($action, array_diff(get_class_methods($controller), get_class_methods('Controller')))) {

            // Si l'action n'est pas définie, affiche une erreur
            $this->error('Le contrôleur ' . $this->request->controller . ' n\'a pas de méthode ' . $action);
        }

        // Appelle l'action sur le contrôleur avec les paramètres de la requête
        call_user_func_array(array($controller, $action), $this->request->params);

        // Effectue le rendu de la vue appropriée
        $controller->render($action);
    }

    function error($message) {

        // Crée un nouveau contrôleur et appelle la méthode e404() pour afficher l'erreur
        $controller = new Controller($this->request);
        $controller->e404($message);
    }

    function loadController() {

        // Formate le nom du contrôleur en utilisant la convention CamelCase
        $name = ucfirst($this->request->controller) . 'Controller';

        // Détermine le chemin vers le fichier du contrôleur
        $file = ROOT . DS . 'controller' . DS . $name . '.php';

        // Si le fichier n'existe pas, affiche une erreur
        if (!file_exists($file)) {
            $this->error('Le contrôleur ' . $this->request->controller . " n'existe pas.");
        }

        // Charge le fichier du contrôleur et instancie le contrôleur
        require $file;
        $controller = new $name($this->request);

        return $controller;
    }
}

//52 min