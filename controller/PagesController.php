<?php

class PagesController extends Controller{

    public $Page;
    public $Post;
    
    function view($id){
        $this->render('index');
        $this->loadModel('Page');
        $d['page'] = $this->Page->findFirst(array(
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
        $this->loadModel('Page');
        return $this->Page->find(array(
            'conditions' => array('online' => 1, 'type' => 'page') // Condition à revoir pour le site (type)!!!!!
        ));
    }

    function index(){
        $this->loadModel('Post');
        $this->layout = 'default.php';
        $conditions = array('online' => 1, 'date' => array('>=' => date('Y-m-d'))); // récupère les spectacles à venir
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
            'order' => 'date ASC', // tri par date croissante
            'limit' => 3 // limite à 3 résultats
        ));
        $this->set($d);
    }


    /*********************************************************************************************/



    /**
     * ADMIN
     **/

    //  function admin_index(){
    //     $this->loadModel('Page');
    //     $conditions = array('type' => 'pages' );

    // }   

    
}