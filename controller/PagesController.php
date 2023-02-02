<?php

class PagesController extends Controller{

    // function index(){
    //     $this->render('index');
    // }
    
    function view($id){
        $this->loadModel('Post');
        $d['page'] = $this->Post->findfirst(array(
            'conditions' => array('id'=>$id, 'type' => 'page') // Définit le nom de la page (http://localhost/Projet-Mairie/pages/view/(2))
        ));
        if(empty($d['page'])){
            $this->e404('Page introuvable');
        }
        $d['pages'] = $this->Post->find(array(
            'conditions' => array('type' => 'page')
        ));
        $this->set($d);
    }
    
}