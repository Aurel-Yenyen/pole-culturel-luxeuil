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

        if(empty($url)){
            $url = (Router::$routes[0]['url']);
        }else{
            foreach(Router::$routes as $v){
                if(preg_match($v['catcher'], $url, $match)){
                    $request->controller = $v['controller'];
                    $request->action = $v['action'];
                    $request->params = array();
                    foreach($v['params'] as $k => $v){
                        $request->params[$k] = $match[$k];
                    }
                    return $request;
                }
            }
        }



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

        $r['params'] = array();
        $r['redir'] = $redir;
        $r['url'] = $url;

        $r['origin'] = preg_replace('/([a-z0-9]+):([^\/]+)/', '${1}:(?P<${1}>${2})', $url);
        $r['origin'] = '/'. str_replace('/','\/', $r['origin']).'$/';

        $params = explode('/', $url);
        foreach($params as $k => $v){
            if(strpos($v, ':')){
                $p = explode(':' , $v);
                $r['params'][$p[0]] = $p[1];
            }else{
                if($k==0){
                    $r['controller'] = $v;
                }elseif($k==1){
                    $r['action'] = $v;
                }
            }

            // self::routes[] = $r;
        }

        $r['catcher'] = $redir;
        foreach($r['params'] as $k => $v){
            $r['catcher'] = str_replace(":$k", "(?P<$k>$v)", $r['catcher']);
        }
        $r['catcher'] = '/'. str_replace('/','\/', $r['catcher']).'$/';

        self::$routes[] = $r;

     }

    /**
     * Url
     * */ 
    static function url($url){
        foreach(self::$routes as $v){
            if(preg_match($v['origin'],$url, $match)){
                foreach($match as $k=>$w){
                    if(!is_numeric($k)){
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