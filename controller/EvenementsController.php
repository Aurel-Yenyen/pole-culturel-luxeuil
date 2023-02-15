<?php

class EvenementsController extends Controller{

    public $Post;
    public $Page;

    function spectacle(){
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'spectacle' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $d['total'] = $this->Post->findCount($conditions);

        $this->set($d);
    }

    function theatre(){
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'theatre' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $d['total'] = $this->Post->findCount($conditions);

        $this->set($d);
    }

    /*********************************************************************************************/



    function view($id, $slug){
        $this->loadModel('Post');
        $conditions = array(
            'online' => 1,
            'id'=>$id, 
            'type' => 'spectacle',
            'type' => 'theatre'
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