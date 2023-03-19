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

    public function write($key, $value){
        $_SESSION[$key] = $value;
    }

    public function read($key = null){
        if($key){
            if(isset($_SESSION[$key])){
                return $_SESSION[$key];
            }else{
                return false;
            }
        }else{
            return $_SESSION;
        }
    }

    public function isLogged(){
        return isset($_SESSION['User']->id);
    }

}