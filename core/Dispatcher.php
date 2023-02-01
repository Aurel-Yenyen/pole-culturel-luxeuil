<?php

class Dispatcher{ // Récupère l'url, affiche une erreur en cas de page non trouvé

    var $request; //

    function __construct() // Construction de l'erreur
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request); // En injectant la request en second paramètres, il retournera les paramètres
        $controller = $this->loadController();  //Permet de charger le contrôleur
        if(!in_array($this->request->action, get_class_methods($controller))){ //Si la page n'est pas dans le controller
            $this->error('Le controller '. $this->request->controller. ' n\'a pas de méthode '. $this->request->action); //Message d'erreur
        }
        call_user_func_array(array($controller, $this->request->action), $this->request->params);
        $controller->render($this->request->action);
    }

    function error($message){ // Affichage de l'erreur
        header('HTTP/1.0 404 not found');
        $controller = new Controller($this->request);
        $controller->set('message', $message); // Lie le message d'erreur à la page 404 grâce à la variable $message
        $controller->render('/errors/404');
        die();
    }   
    
    function loadController(){
        $name = ucfirst($this->request->controller).'Controller';
        $file = ROOT.DS.'controller'.DS.$name.'.php';
        require $file;
        return new $name($this->request);
    }
}