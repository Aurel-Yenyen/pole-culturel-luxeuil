<?php

class PostsController extends Controller{

    public $Post;

    function index(){
        $this->loadModel('Post');
        $d['posts'] = $this->Post->find(array(
            'conditions' => array('online' => 1, 'type' => 'post' )
        ));
        $this->set($d);
    }
    
    function view($id){
        $this->loadModel('Post');
        $d['page'] = $this->Post->findFirst(array(
            'conditions' => array('online' => 1,'id'=>$id, 'type' => 'post') // Définit la condition de la requête MySQL
        ));
        if(empty($d['page'])){
            $this->e404('Page introuvable');
        }
        $this->set($d);
    }
    

}