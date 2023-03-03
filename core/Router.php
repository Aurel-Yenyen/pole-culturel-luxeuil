<!-- Sert à parser les url dans les deux sens, lorsqu'une requête arrive il essaiera de comprendre à quoi elle correspond. Et on génèrera un lien -->

<?php

class Router{

    static $routes = array(); // Tableau qui stocke toutes les routes
    static $prefixes = array(); // Tableau qui stocke tous les préfixes

    // Fonction qui ajoute un préfixe à une URL
    static function prefix($url, $prefix){
        self::$prefixes[$url] = $prefix;
    }

    /**
     * Permet de parser une url
     * @param $url --> Url à parser
     * @return $request --> Retourne la requête parsée
     * */ 
    static function parse($url, $request){
        $url = trim($url, '/'); // Enlève les espaces en début et fin de l'URL

        // Si l'URL est vide, utilise la première route
        if(empty($url)){
            $url = (Router::$routes[0]['url']);
        }else{
            // Parcourt toutes les routes
            foreach(Router::$routes as $v){
                // Si la route correspond à l'URL, définit le contrôleur, l'action et les paramètres de la requête
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

        // Sépare les différents morceaux de l'URL en utilisant le caractère "/"
        $params = explode('/', $url); 

        // Si le premier morceau de l'URL est un préfixe, définit le préfixe de la requête et supprime ce morceau de l'URL
        if(in_array($params[0], array_keys(self::$prefixes))){
            $request->prefix = self::$prefixes[$params[0]];
            array_shift($params);
        }

        // Définit le contrôleur de la requête comme le premier morceau de l'URL
        $request->controller = $params[0];
        // Si le deuxième morceau de l'URL existe, définit l'action de la requête comme ce morceau. Sinon, utilise "index" comme action
        $request->action = isset($params[1]) ? $params[1] : 'index'; 

        // Parcourt tous les préfixes pour voir s'il y a un préfixe dans l'action de la requête. Si c'est le cas, définit le préfixe et supprime le préfixe de l'action
        foreach(self::$prefixes as $k => $v){
            if(strpos($request->action, $v.'_') === 0){
                $request->prefix = $v;
                $request->action = str_replace($v.'_', '', $request->action);
            }
        }

        // Définit les paramètres de la requête comme tous les morceaux de l'URL à partir du troisième morceau
        $request->params = array_slice($params, 2);
        return true;// Retourne les paramètres
    }

    /**
     * Connecte une URL à une route
     * */ 
    static function connect($redir, $url){ // Fonction qui nous permet de'ajouter le slug et d'avoir une url mieux afficher
        $r = array();

        $r['params'] = array();
        $r['redir'] = $redir;
        $r['url'] = $url;

        $r['origin'] = preg_replace('/([a-zA-Z0-9]+):([^\/]+)/', '${1}:(?P<${1}>${2})', $url);
        $r['origin'] = '/^'. str_replace('/','\/', $r['origin']).'$/';

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


        }

        $r['catcher'] = $redir;
        foreach($r['params'] as $k => $v){
            $r['catcher'] = str_replace(":$k", "(?P<$k>$v)", $r['catcher']);
        }
        $r['catcher'] = '/^'. str_replace('/','\/', $r['catcher']).'$/';

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
                return BASE_URL.str_replace('//', '/', '/'. $v['redir']);
            }
        }
        foreach(self::$prefixes as $k =>$v){
            if(strpos($url, $v) === 0){
                $url = str_replace($v,$k,$url);
            }
        }
        return BASE_URL.'/'.$url;
    }
    static function webroot($url){
        trim($url, '/');
        return BASE_URL.'/'.$url;
    }
}

