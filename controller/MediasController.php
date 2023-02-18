<?php

class MediasController extends Controller{


    function admin_index($id = null){
        $this->loadModel('Media');
        if($this->request->data && !empty($_FILES['file']['name'])){
            if(strpos($_FILES['file']['type'], 'image') !== false ){
                $dir = WEBROOT.DS.'img'.DS.'evenements';
                if(!file_exists($dir)) mkdir($dir);
                move_uploaded_file($_FILES['file']['tmp_name'], $dir.DS.$_FILES['file']['name']);
                $this->Media->save(array(
                    'name' => $this->request->data->name,
                    'file' => 'evenements'.'/'.$_FILES['file']['name'],
                    'post_id' => $id,
                    'type' => 'img'
                ));
                $this->Session->setFlash("L'image à bien été uploader");
            }else{
                $this->Form->errors['file'] = "Le fichier n'est pas une image";
            }
        }
        $this->layout = 'modal';
        $d['images'] = $this->Media->find(array(
            'conditions' => array('post_id' => $id)
        ));
        $d['post_id'] = $id;
        $this->set($d);
    }
}

//Vidéo à 30 Min