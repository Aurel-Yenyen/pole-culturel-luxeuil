<!-- Objet qui permet de rediriger et d'initialisé les bons composant en fonction de l'url taper -->

<?php

class dispatcher{ // Récupère l'url, affiche les erreurs 

    var $request;


    function __construct(){
        
    
        $this->request = new Request;
        Router::parse($this->request->url, $this->request); 
        $controller = $this->loadController(); //Permet de charger le contrôleur
        $action = $this->request->action;
        if($this->request->prefix){
            $action = $this->request->prefix .'_'. $action;
        }
        if(!in_array($action, array_diff(get_class_methods($controller), get_class_methods('Controller')))){ //Si la page n'est pas dans le controller
            $this->error('Le controlleur ' . $this->request->controller . ' n\'a pas de méthode '. $action);
        }
        call_user_func_array(array($controller, $action), $this->request->params);
        $controller->render($action);
    }
    

    /*********************************************************************************************/


    function error($message){ // Affichage de l'erreur
        $controller = new Controller($this->request);
        $controller->e404($message);

    }   


    /*********************************************************************************************/


    
    function loadController(){
        $name = ucfirst($this->request->controller) . 'Controller';
        $file = ROOT.DS. 'controller'. DS . $name . '.php';
        require $file;
        $controller = new $name($this->request);

        $controller->Session = new Session();
        
        return $controller;
    }
}
