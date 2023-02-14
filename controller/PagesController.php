<?php

class PagesController extends Controller{

    public $Post;
    
    function view($id){
        $this->render('index');
        $this->loadModel('Post');
        $d['page'] = $this->Post->findFirst(array(
            'conditions' => array('id'=>$id,'online' => 1, 'type' => 'page') // Définit le nom de la page (http://localhost/Projet-Mairie/pages/view/(2))
        ));
        if(empty($d['page'])){
            $this->e404('Page introuvable');
        }
        $this->set($d);
    }
    
    /**
     * Permet de récuperer les pages pour le menu
     **/
    function getMenu(){
        $this->loadModel('Post');
        return $this->Post->find(array(
            'conditions' => array('online' => 1, 'type' => 'page') // Condition à revoir pour le site (type)!!!!!
        ));
    }

    /*********************************************************************************************/



    /**
     * ADMIN
     **/

     function admin_index(){
        $this->loadModel('Post');
        $conditions = array('type' => 'pages' );

    }   
}