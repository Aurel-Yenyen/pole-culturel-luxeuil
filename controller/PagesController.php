<?php

class PagesController extends Controller{

    // function index(){
    //     $this->render('index');
    // }
    
    function view($id){
        $this->loadModel('Post');
        $post = $this->Post->findfirst(array(
            'conditions' => 'id=1'
        ));
        $this->set('post', $post);
    }
    
}