<?php

class Router{ // Classe qui détermine l'url

    /**
     * Permet de parser une url
     * @param $url --> Url à parser
     * @return 
     * */ 
    static function parse($url, $request){
        $url = trim($url, '/'); //Fonction qui enlève les espaces en début de chaîne
        $params = explode('/', $url); //Sépare les différents morceau de l'url
        $request->controller = $params[0]; // Crée un tableau pour les paramètres
        $request->action = isset($params[1]) ? $params[1] : 'index'; // Si ça ne retourne aucune action, retourne l'index
        $request->params = array_slice($params, 2);
        return true;// Retourne les paramètres de r
    }


}