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
    
    function view($id, $slug){
        $this->loadModel('Post');
        $condition = array('online' => 1,'id'=>$id, 'type' => 'post');
        $d['post'] = $this->Post->findFirst(array(
            'fields'     =>  'id, slug, name, content',
            'conditions' =>  $condition// Définit la condition de la requête MySQL
        ));
        if(empty($d['post'])){
            $this->e404('Page introuvable');
        }if($slug != $d['post']->slug){
            $this->redirect("posts/view/id:$id/slug:".$d['post']->slug,301);

        }
        $this->set($d);
    }
    

}