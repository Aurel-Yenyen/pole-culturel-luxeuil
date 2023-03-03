
<?php

class Session{

    public function __construct()
    {
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start(); // Permet d'initialiser une session si elle n'est pas déjà démarrée
        }
    }


    /********************************************************************************************/


    public function setFlash($message, $type = 'success') // Envoie un message au moment de l'action SQL
    {
        $valid_types = array('success', 'info', 'warning', 'danger'); // Types de messages valides
        if(in_array($type, $valid_types)) {
            $_SESSION['flash'] = array(
                'message'    => $message,
                'type'       => $type
            );
        } else {
            throw new Exception('Type de message flash invalide.');
        }
    }


    /********************************************************************************************/


    public function flash()
    {
        $html = '';
        if(isset($_SESSION['flash']['message'])){
            $html = '<p>'.$_SESSION['flash']['message'].'</p>';
            $_SESSION['flash'] = array();
        }
        return $html;
    }

    public function write($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function read($key = null)
    {
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

    public function isLogged()
    {
        return isset($_SESSION['User']->id);
    }

}