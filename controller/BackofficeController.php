<?php

class BackofficeController extends Controller{

    public $Post;
    public $Page;
    public $Model;
    public $Session;


/*********************************************************************************************/



    /**
     * ADMIN
     **/

    function admin_index(){
        $this->loadModel('Post');
        $this->loadModel('Page');

        $conditions1 = array(
            'type' => 'Spectacle Musical',
        );
        $d['spectacle'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions1
        ));
        $conditions2 = array(
            'type' => 'Theatre',
        );
        $d['theatre'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions2
        ));
        $conditions3 = array(
            'type' => 'Magie',
        );
        $d['magie'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions3
        ));
        $conditions4 = array(
            'type' => 'Chorale',
        );
        $d['chorale'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions4
        ));
        $conditions5 = array(
            'type' => 'Cirque',
        );
        $d['cirque'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions5
        ));
        $conditions6 = array(
            'type' => 'Comédie',
        );
        $d['comedie'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions6
        ));
        $conditions7 = array(
            'type' => 'Autres',
        );
        $d['autres'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions7
        ));
        $conditions10 = array(
            'type' => 'page',
        );
        
        $d['pages'] = $this->Page->find(array(
            'fields'     => 'id,name,online,type',
            'conditions' => $conditions10
        ));
        $this->set($d);
    }



/*********************************************************************************************/


    
    /**
     * ADMIN : Permet d'éditer un article
     **/

    
    function admin_editSpectacle($id = null){
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


    function admin_editTheatre($id = null){
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


    function admin_editMagie($id = null){
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


    function admin_editChorale($id = null){
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


    function admin_editCirque($id = null){
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



    function admin_editComedie($id = null){
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


    function admin_editAutres($id = null){
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
        $this->redirect('cockpit/backoffice/index');
    }



/*********************************************************************************************/




}