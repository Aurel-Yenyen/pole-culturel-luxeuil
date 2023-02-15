<!-- Sert à parser les url dans les deux sens, lorsqu'une requête arrive il essaiera de comprendre à quoi elle correspond. Et on génèrera un lien -->

<?php

class Router{ // Classe qui détermine l'url


    static $routes = array();
    static $prefixes = array();

    static function prefix($url, $prefix){
        self::$prefixes[$url] = $prefix;
    }
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

        if(in_array($params[0], array_keys(self::$prefixes))){
            $request->prefix = self::$prefixes[$params[0]];
            array_shift($params);
        }
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

        $r['origin'] = preg_replace('/([a-zA-Z0-9]+):([\/]+)/', '${1}:(?P<${1}>${2})', $url);
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

