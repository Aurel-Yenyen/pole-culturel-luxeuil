<?php

class EvenementsController extends Controller{

    public $Post;

    function spectacle(){
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'musique' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $d['total'] = $this->Post->findCount($conditions);

        $this->set($d);
    }

    function theatre(){
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'musique' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
        ));
        $d['total'] = $this->Post->findCount($conditions);

        $this->set($d);
    }

    /*********************************************************************************************/



    function view($id, $slug){
        $this->loadModel('Post');
        $conditions = array('online' => 1,'id'=>$id, 'type' => 'musique');
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


    /*********************************************************************************************/



    /**
     * ADMIN
     **/

    function admin_index(){
        $this->loadModel('Post');
        $conditions = array(
            'type' => 'musique',
        );
        $conditions1 = array(
            'type' => 'page',
        );
        $d['articles'] = $this->Post->find(array(
            'fields'     => 'id,name,online',
            'conditions' => $conditions
        ));
        $d['pages'] = $this->Post->find(array(
            'fields'     => 'id,name,online',
            'conditions' => $conditions1
        ));
        $this->set($d);
    }


        /*********************************************************************************************/


    
    /**
     * ADMIN : Permet d'éditer un article
     **/

    
    function admin_editPost($id = null){
        $this->loadModel('Post');
        $d['id'] = '';
        if($this->request->data){
            if($this->Post->validates($this->request->data)){
                $this->request->type = 'musique';
                $this->request->created = date('Y-m-s h-i-s');

                $this->Post->save($this->request->data);
                $this->Session->setFlash('Le contenu à bien été modifié.', '');
                $id = $this->Post->id;
            }else{
                $this->Session->setFlash('Merci de corriger vos informations.', 'error');
            }
        }
        else{
            if($id){
                $this->request->data = $this->Post->findFirst(array(
                    'conditions' => array('id' => $id)
                ));
                $d['id'] = $id;
            }       
        }
        $this->set($d);
    }   

    function admin_editPage($id = null){
        $this->loadModel('Post');
        $d['id'] = '';
        if($this->request->data){
            if($this->Post->validates($this->request->data)){
                $this->request->type = 'page';

                $this->Post->save($this->request->data);
                $this->Session->setFlash('Le contenu à bien été modifié.', '');
                $id = $this->Post->id;
            }else{
                $this->Session->setFlash('Merci de corriger vos informations.', 'error');
            }
        }
        else{
            if($id){
                $this->request->data = $this->Post->findFirst(array(
                    'conditions' => array('id' => $id)
                ));
                $d['id'] = $id;
            }       
        }
        $this->set($d);
    }   

    

    /*********************************************************************************************/



    /**
     * ADMIN : Permet de supprimer un article
     **/
    
    function admin_delete($id){
        $this->loadModel('Post');
        $this->Post->delete($id);
        $this->Session->setFlash('Le contenu à bien été supprimé.', '');
        $this->redirect('cockpit/evenements/index');
    }



/*********************************************************************************************/




}