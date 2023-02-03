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
        $condition = array('online' => 1,'id'=>$id, 'type' => 'post');
        $d['page'] = $this->Post->findFirst(array(
            'conditions' =>  $condition// Définit la condition de la requête MySQL
        ));
        $d['total'] = $this->Post->findCount($condition);
        if(empty($d['page'])){
            $this->e404('Page introuvable');
        }
        $this->set($d);
    }
    

}