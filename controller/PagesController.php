<?php

class PagesController extends Controller{

    // function index(){
    //     $this->render('index');
    // }
    
    function view($id){
        $this->loadModel('Post');
        $post = $this->Post->findfirst(array(
            'conditions' => array('id'=>$id) // Définit le nom de la page (http://localhost/Projet-Mairie/pages/view/(2))
        ));
        if(empty($post)){
            $this->e404('Page introuvable');
        }
        $this->set('post', $post);
    }
    
}