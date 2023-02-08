<?php

class session{

    function __construct()
    {
        session_start();// Permet d'initialisé une session
    }


    /********************************************************************************************/


    public function setFlash($message,$type){// Envoi un message au moment de l'action SQL
        $_SESSION['flash'] = array(
            'message'    => $message,
            'type'       => $type
        );
    }


    /********************************************************************************************/


    public function flash(){
        if(isset($_SESSION['flash'])){
            return $_SESSION['flash']['mesage'];
        }
    }
}