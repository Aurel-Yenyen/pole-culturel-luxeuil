<?php

class PostsController extends Controller{

    public $Post;

    function index(){
        $this->loadModel('Post');
        $condition = array('online' => 1, 'type' => 'post'); // Définit la condition de la requête MySQL
        $d['posts'] = $this->Post->find(array(
            'conditions' => array('online' => 1, 'type' => 'post' )
        ));
        $d['total'] = $this->Post->findCount($condition);

        $this->set($d);
    }
    
    function view($id){
        $this->loadModel('Post');
        $condition = array('online' => 1,'id'=>$id, 'type' => 'post'); // Définit la condition de la requête MySQL
        $d['page'] = $this->Post->findFirst(array(
            'conditions'
        ));
        if(empty($d['page'])){
            $this->e404('Page introuvable');
        }
        $this->set($d);
    }
    

}