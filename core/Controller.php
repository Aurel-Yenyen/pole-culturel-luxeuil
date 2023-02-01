<!-- Permet d'avoir accès à View et ses variables -->

<?php

class Controller{

    public $request;
    private $vars = array();
    private $template = 'default';
    private $rendered =false;

    function __construct($request){
        $this->request = $request;     
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
        $content_for_layout = ob_get_clean();
        require ROOT.DS.'view'.DS.'template'.DS.$this->template.'.php'; // Dans le dossier template, ouvre default.php, permet de créer plusieur rendu
        $this->rendered = true;
    }

    public function set($key, $value=null){
        if(is_array($key)){
            $this->vars += $key;
        }else{
            $this->vars[$key] = $value;
        }

    }
}


?>