<?php

class MediasController extends Controller{


    function admin_index($id){
        $this->loadModel('Media');
        if($this->request->data && !empty($_FILES['file']['name'])){
            if(strpos($_FILES['file']['type'], 'image') !== false ){
                $dir = WEBROOT.DS.'img'.DS.$id;
                if(!file_exists($dir)) mkdir($dir);
                move_uploaded_file($_FILES['file']['tmp_name'], $dir.DS.$_FILES['file']['name']);
                $this->Media->save(array(
                    'name' => $this->request->data->name,
                    'file' => $id.'/'.$_FILES['file']['name'],
                    'format' => '',
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
    function admin_delete($id){
        $this->loadModel('Media');
        $media = $this->Media->findFirst(array(
            'contions' => array('id' => $id)
        ));
        unlink(WEBROOT.DS.'img'.DS.$media->file);
        $this->Media->delete($id);
        $this->Session->setFlash('Le contenu à bien été supprimé.', '');
        $this->redirect('cockpit/medias/index/'. $media->post_id);
    }
}
//Voir pour suppr les paramètre d'id pour un affichage intégrale

//Vidéo à 30 Min