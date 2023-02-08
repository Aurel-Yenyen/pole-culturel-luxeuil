<!-- Initialisé depuis le dispatcher et appel à une action, peut ou non utilisé un model et envoi les variable à view -->

<?php

class Controller{

    public $request;                 // Objt Request
    public $vars       = array();    //Contient les variables que l'on veut faire passer à la vue
    public $layout      = 'default'; //Correspond aux templates
    public $rendered   = false;      // Si la vue à été faites ou non


    /** 
     * Constructeur
     * @param $request Objet request de notre application
    **/

    function __construct($request = null){          //Initialise comme une variable d'instance
        if($request){
            $this->request = $request;                // On stock la request dans l'instance
        }
    }

    /** 
     * Permet de rendre une vue
     * @param $view Fichier à rendre (chemin deouis le view ou nom de la vue)
    **/
    
    /*********************************************************************************************/


    public function render($view){                  // Fonction qui nous permet de voir les pages
        if($this->rendered){return false ; }
        extract($this->vars);
        if(strpos($view, '/') === 0){
            $view = ROOT.DS. 'view'.$view. '.php';
        }else{
            $view = ROOT.DS.'view'.DS.$this->request->controller.DS.$view.'.php';
        }
        ob_start();
        require($view);
        $content_for_laytout = ob_get_clean();
        require ROOT.DS.'view'.DS.'layout'.DS.$this->layout.'.php'; // Dans le dossier template, ouvre default.php, permet de créer plusieur rendu
        $this->rendered = true;
    }


    /*********************************************************************************************/


    /**
     * Permet de passer une ou plusieurs variable à la vue
     * @param $key nom de la variable OU tableau de variables
     * @param $value valeur de la variable
     **/
    public function set($key, $value=null){
        if(is_array($key)){
            $this->vars +=$key;
        }else{
            $this -> vars[$key] = $value;
        }

    }


    /*********************************************************************************************/



    /**
     * Permet de Charger un modèle
     **/
    function loadModel($name){
        if(!isset($this->$name)){
            $file = ROOT.DS.'model'.DS.$name.'.php';
            require_once($file);
            $this->$name = new $name();
        }

    }


    /*********************************************************************************************/


    /**
     * Permet de Gérer les erreurs 404
     **/
    function e404($message){
        header('HTTP/1.0 404 not found');
        $this->set('message', $message); // Lie le message d'erreur à la page 404 grâce à la variable $message
        $this->render('/errors/404');
        die();
    }


    /*********************************************************************************************/


    /**
     * Permet d'appeler un controlleur depuis une vue
     **/
    function request($controller, $action){
        $controller .= 'Controller';
        require_once ROOT.DS. 'controller'.DS.$controller.'.php';
        $c = new $controller();
        return $c->$action();

    }


    /*********************************************************************************************/



    function redirect($url, $code = null){
        if($code == 301){
            header('HTTP/1.1 301 Moved Permanently');
        }
        header("Location: ". Router::url($url));
    }


    /*********************************************************************************************/
}