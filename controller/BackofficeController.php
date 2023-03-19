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
            'type' => 'spectacle',
        );
        $d['spectacle'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions1
        ));
        $conditions2 = array(
            'type' => 'theatre',
        );
        $d['theatre'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions2
        ));
        $conditions3 = array(
            'type' => 'magie',
        );
        $d['magie'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions3
        ));
        $conditions4 = array(
            'type' => 'chorale',
        );
        $d['chorale'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions4
        ));
        $conditions5 = array(
            'type' => 'cirque',
        );
        $d['cirque'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions5
        ));
        $conditions6 = array(
            'type' => 'comedie',
        );
        $d['comedie'] = $this->Post->find(array(
            'fields' => 'id,name,online',
            'conditions' => $conditions6
        ));
        $conditions7 = array(
            'type' => 'autres',
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
        $this->set($d);
        // On vérifie si le formulaire a été soumis
        if(isset($_POST['submit'])) {
            // On récupère les valeurs des champs
            $colorPrimary1 = $_POST['colorPrimary1'];
            $colorPrimary2 = $_POST['colorPrimary2'];
            $colorPrimary3 = $_POST['colorPrimary3'];
            $colorPrimary4 = $_POST['colorPrimary4'];
            $colorPrimary5 = $_POST['colorPrimary5'];
            $colorPrimary6 = $_POST['colorPrimary6'];
            $colorPrimary7 = $_POST['colorPrimary7'];
            $colorPrimary8 = $_POST['colorPrimary8'];
            $colorPrimary9 = $_POST['colorPrimary9'];
            $colorPrimary10 = $_POST['colorPrimary10'];
            $colorPrimary11 = $_POST['colorPrimary11'];
            $colorPrimary12 = $_POST['colorPrimary12'];
            $colorPrimary13 = $_POST['colorPrimary13'];
            $colorPrimary14 = $_POST['colorPrimary14'];
            $colorPrimary15 = $_POST['colorPrimary15'];
            $colorPrimary16 = $_POST['colorPrimary16'];
            $colorPrimary17 = $_POST['colorPrimary17'];
            $colorPrimary18 = $_POST['colorPrimary18'];
            $colorPrimary19 = $_POST['colorPrimary19'];
            $colorPrimary20 = $_POST['colorPrimary20'];
            $colorPrimary21 = $_POST['colorPrimary21'];
            $colorPrimary22 = $_POST['colorPrimary22'];
            $colorPrimary23 = $_POST['colorPrimary23'];





            // On construit le contenu CSS avec les nouvelles valeurs
            $content = <<<CSS
:root {
    --colorPrimary-1: $colorPrimary1;
    --colorPrimary-2: $colorPrimary2;
    --colorPrimary-3: $colorPrimary3;
    --colorPrimary-4: $colorPrimary4;
    --colorPrimary-5: $colorPrimary5;
    --colorPrimary-6: $colorPrimary6;
    --colorPrimary-7: $colorPrimary7;
    --colorPrimary-8: $colorPrimary8;
    --colorPrimary-9: $colorPrimary9;
    --colorPrimary-10: $colorPrimary10;
    --colorPrimary-11: $colorPrimary11;
    --colorPrimary-12: $colorPrimary12;
    --colorPrimary-13: $colorPrimary13;
    --colorPrimary-14: $colorPrimary14;
    --colorPrimary-15: $colorPrimary15;
    --colorPrimary-16: $colorPrimary16;
    --colorPrimary-17: $colorPrimary17;
    --colorPrimary-18: $colorPrimary18;
    --colorPrimary-19: $colorPrimary19;
    --colorPrimary-20: $colorPrimary20;
    --colorPrimary-21: $colorPrimary21;
    --colorPrimary-22: $colorPrimary22;
    --colorPrimary-23: $colorPrimary23;




}
CSS;

            // On écrit le contenu dans le fichier CSS
            $file = fopen(ROOT . '/webroot/css/root/root.css', 'w');
            fwrite($file, $content);
            fclose($file);
        }

        // On récupère les valeurs actuelles des couleurs
        $rootContent = file_get_contents(ROOT . '/webroot/css/root/root.css');
        preg_match_all('/--colorPrimary-\d+:\s(.+);/', $rootContent, $matches);
        $colors = array_combine(
            range(1, count($matches[1])),
            $matches[1]
        );

        // On charge la vue d'administration avec les couleurs actuelles
        $this->render('admin_index', [
            'colors' => $colors
        ]);
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