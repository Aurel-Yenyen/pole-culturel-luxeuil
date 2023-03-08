<?php

class EvenementsController extends Controller{

    public $Post;
    public $Page;

    function spectacle(){
        $this->layout = 'event';
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'spectacle' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function theatre(){
        $this->layout = 'event';
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'theatre' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function magie(){
        $this->layout = 'event';
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'magie' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function chorale(){
        $this->layout = 'event';
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'chorale' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function cirque(){
        $this->layout = 'event';
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'cirque' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function comedie(){
        $this->layout = 'event';
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'comedie' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $this->set($d);
    }

    function autres(){
        $this->layout = 'event';
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'autres' );
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
            'fields'     =>  'id, slug, name, content, prix, youtube, dateText, lieu, heure, type',
            'conditions' =>  $conditions// Définit la condition de la requête MySQL
        ));
        if(empty($d['post'])){
            $this->e404('Page introuvable');
        }if($slug != $d['post']->slug){
            $this->redirect("evenements/view/id:$id/slug:".$d['post']->slug,301);

        }
        $this->set($d);
    }
    function contact()
    {
        $this->layout = 'event';

    }



}