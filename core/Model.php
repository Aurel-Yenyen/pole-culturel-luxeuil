<?php

class Model{

    static $connections = array();

    public $conf = 'default'; // Peut-être changé suivant la base de donnée utilisé
    public $table = false;
    public $db;

    public function __construct()
    {
        // Connection à la base de donnée
        $conf = conf::$databases[$this->conf]; //Peut contenir plusieurs base de données
        if(isset(Model::$connections[$this->conf])){
            $this->db = Model::$connections[$this->conf];
            return true;
        }
        try{
            $pdo = new PDO(
                'mysql:host='.$conf['host'].';port='.
                $conf['port'].';dbname='.
                $conf['database'],
                $conf['login'],
                $conf['password'],
                array((PDO::MYSQL_ATTR_INIT_COMMAND) => 'SET NAMES utf8')
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            Model::$connections[$this->conf] = $pdo;
            // Stock PDO dans l'instance
            $this->db = $pdo;
        }catch(PDOException $e){
            if(Conf::$debug >= 1){
                die($e->getMessage());
            }else{
                die('Impossible de se connecter à la base de donnée!');
            }

        }
        // J'initialise quelques variables
        if($this->table === false){
            $this->table = strtolower(get_class($this)) .'s';
        }
    }


    public function find($req){ // Requête SQL
        $sql = 'SELECT * FROM '.$this->table.' as '.get_class($this). ' '; // Bien faire attention aux espaces SQLSTATE[42S02] [1146] Erreur de concataination de la requête lors de la connexion à la base de donnée
        // Reviens à faire 
        // $sql = 'SELECT * FROM table WHERE condition';

        // Construction de la condition
        if(isset($req['conditions'])){//SQLSTATE[42000]: Syntax error or access violation: 1064: Erreur de concataination de la requête SQL
            $sql .= 'WHERE ';
            if(!is_array($req['conditions'])){
                $sql .= $req['conditions'];
            }else{
                $cond = array();
                foreach($req['conditions'] as $k=>$v){
                    if(!is_numeric($v)){
                        $v = '"'.addslashes($v).'"';
                    }
                    $cond[] = "$k=$v";
                }
                $sql .= implode(' AND ', $cond);
            }

        }


        $pre = $this->db->prepare($sql);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_OBJ);

    }

    public function findfirst($req){ // Requête SQL
        return current($this->find($req)); // Fonction current qui permet de récuperer l'élément courant du tableau
    }
}
