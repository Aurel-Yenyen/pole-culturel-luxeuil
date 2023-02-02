<?php

class Model{

    public $db = 'default';

    public function __construct()
    {
        $conf = conf::$databases[$this->db];
        try{
            $db = new PDO('mysql:host='.$conf['host'].';port='.$conf['port'].';dbname='.$conf['database'],$conf['login'],$conf['password']);
        }catch(PDOException $e){
            die(print_r($e, true));
        }
        

    }
    public function find(){

    }
}