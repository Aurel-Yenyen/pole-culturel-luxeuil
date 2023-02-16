<?php

class BackofficeController extends Controller{

    public $Post;
    public $Page;
    public $Model;


/*********************************************************************************************/



    /**
     * ADMIN
     **/

    function admin_index(){
        $this->loadModel('Post');
        $this->loadModel('Page');
        $conditions1 = array(
            'type' => 'page',
        );
        $d['articles'] = $this->Post->find(array(
            'fields'     => 'id,name,online,type',
        ));
        $d['pages'] = $this->Page->find(array(
            'fields'     => 'id,name,online,type',
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



/*********************************************************************************************/


    
    /**
     * ADMIN : Permet d'éditer une page
     **/


    function admin_editPage($id = null){
        $this->loadModel('Page');
        $d['id'] = '';
        if($this->request->data){
            if($this->Page->validates($this->request->data)){
                $this->request->type = 'page';

                $this->Page->save($this->request->data);
                $this->Session->setFlash('Le contenu à bien été modifié.', '');
                $id = $this->Page->id;
            }else{
                $this->Session->setFlash('Merci de corriger vos informations.', 'error');
            }
        }
        else{
            if($id){
                $this->request->data = $this->Page->findFirst(array(
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