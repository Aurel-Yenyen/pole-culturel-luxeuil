<?php

class session{

    public function __construct()
    {
        if(!isset($_SESSION)){
            session_start();// Permet d'initialisé une session
        }
    }


    /********************************************************************************************/


    public function setFlash($message,$type = 'success'){// Envoi un message au moment de l'action SQL
        $_SESSION['flash'] = array(
            'message'    => $message,
            'type'       => $type
        
        );
    }


    /********************************************************************************************/


    public function flash(){
        if(isset($_SESSION['flash']['message'])){
            $html = '<p>'.$_SESSION['flash']['message'].'</p>';
            $_SESSION['flash'] = array();
            return $html;
        }
    }
}