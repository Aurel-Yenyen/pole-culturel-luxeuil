<?php

class Model{

    static $connections = array();

    public $conf = 'default';
    public $table = false;
    public $db;
    public $primaryKey = 'id';
    public $id;
    public $errors = array();
    public $form;

    public function __construct()
    {
        if($this->table === false){
            $this->table = strtolower(get_class($this)) .'s';
        }
        
        $conf = Conf::$databases[$this->conf];
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
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            Model::$connections[$this->conf] = $pdo;
            $this->db = $pdo;
        }catch(PDOException $e){
            if(Conf::$debug >= 1){
                die($e->getMessage());
            }else{
                die('Impossible de se connecter à la base de donnée!');
            }
        }
    }

    public function find($req){
        $sql = 'SELECT ';
    
        // Ajout de la gestion des champs à sélectionner dans la requête
        if(isset($req['fields'])){
            if(is_array($req['fields'])){
                $sql.= implode(',',$req['fields']);
            }else{
                $sql.= $req['fields'];
            }    
        }else{
            $sql.= '*';
        }
    
        $sql .= ' FROM '.$this->table.' as '.get_class($this).' ';
    
        // Ajout de la gestion des conditions dans la requête
        if(isset($req['conditions'])){
            $sql .= 'WHERE ';
            if(!is_array($req['conditions'])){
                $sql .= $req['conditions'];
            }else{
                $cond = array();
                foreach($req['conditions'] as $k=>$v){
                    // Vérification si la valeur est un tableau (pour gérer les opérateurs)
                    if(is_array($v)) {
                        $op = key($v);
                        $value = current($v);
                        if(!is_numeric($value)){
                            $value = '"'.addslashes($value).'"';
                        }
                        $cond[] = "$k $op $value";
                    }
                    else if(!is_numeric($v)){
                        $v = '"'.addslashes($v).'"';
                        $cond[] = "$k=$v";
                    } else {
                        $cond[] = "$k=$v";
                    }
                }
                $sql .= implode(' AND ', $cond);
            }
        }
    
        // Ajout de la gestion de la limite dans la requête
        if(isset($req['limit'])){
            $sql .= ' LIMIT '.$req['limit'];
        }
    
        // Exécution de la requête
        $pre = $this->db->prepare($sql);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_OBJ);
    }
    
    
    
    
    



    /*********************************************************************************************/




    public function findFirst($req){ // Requête SQL
        return current($this->find($req));
    }



    /*********************************************************************************************/



    public function findCount($conditions){
        $res = $this->findFirst(array(
            'fields' => 'COUNT('.$this->primaryKey.') as count',
            'conditions' => $conditions
        ));
        return $res->count;
    }   



    /*********************************************************************************************/


    
    public function delete($id){
        $sql = "DELETE FROM {$this->table} WHERE {$this->primaryKey} = ".$this->db->quote($id);
        $this->db->query($sql);
    }



    /*********************************************************************************************/



    public function save($data){
        $key = $this->primaryKey;
        $fields = array();
        $d = array();
        foreach($data as $k => $v){
            if($k!=$this->primaryKey){
                $fields[] = "$k=:$k";
                $d[":$k"] = $v;
            }elseif(isset($v) && !empty($v)){
                $d[":$k"] = $v;   
            }


        }
        if(isset($data->$key) && !empty($data->$key)){
            $sql = 'UPDATE '. $this->table. ' SET '. implode(',', $fields). ' WHERE '. $key. '=:'.$key;
            $this->id = $data->$key;
            $action = 'update';
        }
        else{
            $sql = 'INSERT INTO '. $this->table. ' SET '. implode(',', $fields);
            $action = 'insert';
        }
        $pre = $this->db->prepare($sql);
        $pre->execute($d);
        if($action == 'insert'){
            $this->id = $this->db->lastInsertId();
        }
        return true;
    }
    
}
