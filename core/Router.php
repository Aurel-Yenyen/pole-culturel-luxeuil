<!-- Sert à parser les url dans les deux sens, lorsqu'une requête arrive il essaiera de comprendre à quoi elle correspond. Et on génèrera un lien -->

<?php

class Router {
    static $routes = array();
    static $prefixes = array();

    /**
     * Ajoute un préfixe à une URL
     */
    static function prefix($url, $prefix) {
        self::$prefixes[$url] = $prefix;
    }

    /**
     * Parse une URL
     */
    static function parse($url, $request) {
        $url = trim($url, '/');

        // Si l'URL est vide, utilise la première route
        if(empty($url)) {
            $url = self::$routes[0]['url'];
        }
        else {
            // Parcourt toutes les routes
            foreach(self::$routes as $v) {
                // Si la route correspond à l'URL, définit le contrôleur, l'action et les paramètres de la requête
                if(preg_match($v['catcher'], $url, $match)) {
                    $request->controller = $v['controller'];
                    $request->action = $v['action'];
                    $request->params = array();
                    foreach($v['params'] as $k => $v) {
                        $request->params[$k] = $match[$k];
                    }
                    return true;
                }
            }
        }

        // Sépare les différents morceaux de l'URL en utilisant le caractère "/"
        $params = explode('/', $url);

        // Si le premier morceau de l'URL est un préfixe, définit le préfixe de la requête et supprime ce morceau de l'URL
        if(in_array($params[0], array_keys(self::$prefixes))) {
            $request->prefix = self::$prefixes[$params[0]];
            array_shift($params);
        }

        // Définit le contrôleur de la requête comme le premier morceau de l'URL
        $request->controller = $params[0];

        // Si le deuxième morceau de l'URL existe, définit l'action de la requête comme ce morceau. Sinon, utilise "index" comme action
        $request->action = isset($params[1]) ? $params[1] : 'index';

        // Parcourt tous les préfixes pour voir s'il y a un préfixe dans l'action de la requête. Si c'est le cas, définit le préfixe et supprime le préfixe de l'action
        foreach(self::$prefixes as $k => $v) {
            if(strpos($request->action, $v.'_') === 0) {
                $request->prefix = $v;
                $request->action = str_replace($v.'_', '', $request->action);
            }
        }

        // Définit les paramètres de la requête comme tous les morceaux de l'URL à partir du troisième morceau
        $request->params = array_slice($params, 2);

        return true;
    }

    /**
     * Connecte une URL à une route
     */
    static function connect($redir, $url){
        // Créer un tableau pour stocker les différentes parties de l'URL
        $route = array();
    
        // Définir les propriétés du tableau
        $route['params'] = array();
        $route['redir'] = $redir;
        $route['url'] = $url;
    
        // Créer une expression régulière pour capturer les différents paramètres de l'URL
        $route['origin'] = preg_replace('/([a-zA-Z0-9]+):([^\/]+)/', '${1}:(?P<${1}>${2})', $url);
        $route['origin'] = '/^'. str_replace('/','\/', $route['origin']).'$/';
    
        // Extraire les différents paramètres de l'URL
        $params = explode('/', $url);
        foreach($params as $key => $value){
            if(strpos($value, ':') !== false){
                $param = explode(':' , $value);
                $route['params'][$param[0]] = $param[1];
            }else{
                if($key == 0){
                    $route['controller'] = $value;
                }elseif($key == 1){
                    $route['action'] = $value;
                }
            }
        }
    
        // Créer une expression régulière pour capturer les différents paramètres de redirection
        $route['catcher'] = $redir;
        foreach($route['params'] as $key => $value){
            $route['catcher'] = str_replace(":$key", "(?P<$key>$value)", $route['catcher']);
        }
        $route['catcher'] = '/^'. str_replace('/','\/', $route['catcher']).'$/';
    
        // Ajouter la route à la liste des routes disponibles
        self::$routes[] = $route;
    }

    /**
     * Url
     * */ 
    static function url($url){
        if (!is_string($url)) {
            return null;
        }
    
        $output_url = BASE_URL;
    
        foreach(self::$routes as $v){
            if(preg_match($v['origin'],$url, $match)){
                foreach($match as $k=>$w){
                    if(!is_numeric($k)){
                        $v['redir'] = str_replace(":$k", $w, $v['redir']);
                    }
                }
                $output_url .= '/' . trim($v['redir'], '/');
                return $output_url;
            }
        }
    
        foreach(self::$prefixes as $k =>$v){
            if(strpos($url, $v) === 0){
                $url = str_replace($v,$k,$url);
            }
        }
    
        $output_url .= '/' . trim($url, '/');
        return $output_url;
    }
    
    static function webroot($url){
        $url = trim($url, '/');
        return BASE_URL.'/'.$url;
    }
}

