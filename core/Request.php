<?php

class Request{

    public $url;  // Url appelé par les utilisateurs
    public $page = 1;
    public $prefix = false;
    public $data = false;

    function __construct()
    {
        $this->url = isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'/';
        if(isset($_GET['page'])){
            if(is_numeric($_GET['page'])){
                if($_GET['page'] > 0){
                    $this->page = round($_GET['page']);
                }
            }

        }
        if(!empty($_POST)){
            $this->data = new stdClass();
            foreach($_POST as $k => $v){
                $this->data->$k=$v;
            }
        }
    }
}