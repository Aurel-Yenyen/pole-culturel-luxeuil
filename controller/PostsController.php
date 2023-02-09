<?php

class PostsController extends Controller{

    public $Post;

    function index(){
        $perPage = 1;
        $this->loadModel('Post');
        $conditions = array('online' => 1, 'type' => 'musique' );
        $d['posts'] = $this->Post->find(array(
            'conditions' => $conditions,
            'limit'      => ($perPage*($this->request->page-1)). ',' .$perPage
        ));
        $d['total'] = $this->Post->findCount($conditions);
        $d['page'] = ceil($d['total'] / $perPage);
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
            $this->redirect("posts/view/id:$id/slug:".$d['post']->slug,301);

        }
        $this->set($d);
    }


    /*********************************************************************************************/



    /**
     * ADMIN
     **/

    function admin_index(){
        $perPage = 10;
        $this->loadModel('Post');
        $conditions = array('type' => 'musique' );
        $d['posts'] = $this->Post->find(array(
            'fields'     => 'id,name,online',
            'conditions' => $conditions,
            'limit'      => ($perPage*($this->request->page-1)). ',' .$perPage
        ));
        $d['total'] = $this->Post->findCount($conditions);
        $d['page'] = ceil($d['total'] / $perPage);
        $this->set($d);
    }

        
    /**
     * ADMIN : Permet de supprimer un article
     **/
    
    function admin_delete($id){
        $this->loadModel('Post');
        $this->Post->delete($id);
        $this->Session->setFlash('Le contenu à bien été supprimé.', '');
        $this->redirect('cockpit/posts/index');
    }
}