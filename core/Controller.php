<!-- Initialisé depuis le dispatcher et appel à une action, peut ou non utilisé un model et envoi les variable à view -->

<?php

class Controller{

    public $request;
    public $vars       = array(); //Contient les variables que l'on veut faire passer à la vue
    public $layout      = 'default'; //Correspond aux templates
    public $rendered   = false;

    function __construct($request){ //Initialise comme une variable d'instance
        $this -> request = $request;
    }
    public function render($view){ // Fonction qui nous permet de voir les pages
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

    public function set($key, $value=null){
        if(is_array($key)){
            $this->vars +=$key;
        }else{
            $this -> vars[$key] = $value;
        }

    }

    function loadModel($name){
        $file = ROOT.DS.'model'.DS.$name.'.php';
        require_once($file);
        if(!isset($this->$name)){
            $this->$name = new $name();
        }

    }
}