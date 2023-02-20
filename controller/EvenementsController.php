<?php

class EvenementsController extends Controller{

    public $Post;
    public $Page;

    function spectacle(){
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'Spectacle Musical' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function theatre(){
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'Theâtre' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function magie(){
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'Magie' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function chorale(){
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'Chorale' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function cirque(){
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'Cirque' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function comedie(){
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'Comédie' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function autres(){
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'Autres' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }
    /*********************************************************************************************/



    function view($id, $slug){
        $this->loadModel('Post');
        $conditions = array(
            'online' => 1,
            'id'=>$id, 
        );
        $d['post'] = $this->Post->findFirst(array(
            'fields'     =>  'id, slug, name, content',
            'conditions' =>  $conditions// Définit la condition de la requête MySQL
        ));
        if(empty($d['post'])){
            $this->e404('Page introuvable');
        }if($slug != $d['post']->slug){
            $this->redirect("evenements/view/id:$id/slug:".$d['post']->slug,301);

        }
        $this->set($d);
    }
   


}