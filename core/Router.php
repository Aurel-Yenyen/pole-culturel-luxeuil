<!-- Sert à parser les url dans les deux sens, lorsqu'une requête arrive il essaiera de comprendre à quoi elle correspond. Et on génèrera un lien -->

<?php

class Router{ // Classe qui détermine l'url


    static $routes = array();


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
        return true;// Retourne les paramètres
    }

    
    /**
     * Connect
     * */ 

    static function connect($redir, $url){ // Fonction qui nous permet de'ajouter le slug et d'avoir une url mieux afficher
        $r = array();

        $r['redir'] = $redir;

        $r['origin'] = preg_replace(' /([a-z0-9]+):([^\/]+)/ ', ' ${1}:(?P<${1}>${2})', $url);
        $r['origin'] = '/'. str_replace('/','\/', $r['origin']).'/';

        self::$routes[] = $r;
        debug($r);
     }

    /**
     * Url
     * */ 
    static function url($url){
        foreach(self::$routes as $v){
            if(preg_match($v['origin'],$url, $match)){
                foreach($match as $k=>$v){
                    if(is_numeric($k)){
                        $v['redir'] = str_replace(":$k", $w, $v['redir']);
                    }
                }
                return $v['redir'];
            }
        }
        return $url;
    }
}

// Temps de vidéo 52 min