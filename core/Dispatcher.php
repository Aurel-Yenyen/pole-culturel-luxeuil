<!-- Objet qui permet de rediriger et d'initialisé les bons composant en fonction de l'url taper -->

<?php

class dispatcher{ // Récupère l'url, affiche les erreurs 

    var $request;

    function __construct(){
        $this->request = new Request;
        Router::parse($this->request->url, $this->request); 
        $controller = $this->loadController(); //Permet de charger le contrôleur
        if(!in_array($this->request->action, array_diff(get_class_methods($controller), get_class_methods('Controller')))){ //Si la page n'est pas dans le controller
            $this->error('Le controlleur ' . $this->request->controller . ' n\'a pas de méthode '. $this->request->action);
        }
        call_user_func_array(array($controller, $this->request->action), $this->request->params);
        $controller->render($this->request->action);
    }
    
    function error($message){ // Affichage de l'erreur
        $controller = new Controller($this->request);
        $controller->e404($message);

    }   

    function loadController(){
        $name = ucfirst($this->request->controller) . 'Controller';
        $file = ROOT.DS. 'controller'. DS . $name . '.php';
        require $file;
        return new $name($this->request);
    }
}