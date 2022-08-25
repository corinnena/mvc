<?php


abstract class Model{
    //infos de bdd
    private $host = 'localhost';
    private $db_name = "mvc";
    private $username = 'root';
    private $password = '';

    //propriété contenant la connexion
    protected $_connexion;

    //prorpiétés contenant les infos de requête
    public $table;
    public $id;

    public function getConnection(){
        $this->_connexion = null;
        try{
            $this->_connexion = new PDO('mysql:host='. $this->host .';
            dbname=' . $this->db_name, $this->username, $this->password);
            $this->_connexion->exec('set names utf8');
        }catch (PDOException $e){
            echo 'Erreur : '. $e->getMessage();
        }
        
    }

    public function getAll(){
      $sql = "SELECT * FROM ". $this->table;
      $query = $this->_connexion->prepare($sql);
      $query->execute();
      return $query->fetchAll();
    }

    public function getOne(){
        $sql = "SELECT * FROM ". $this->table. " WHERE id =" .$this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();
    
    }

    //public function create(){
        //INSERT INTO `users` (`id`, `nom`, 
        //`prenom`, `email`, `motdepasse`) VALUES ('1', 'un', 'paul', 'paulun@orange.fr', 'test1'), ('2', 'deux', 'pierre', 'pierredeux@orange.fr', 'test2');
       
        
        
       // $sql = "INSERT INTO " . $this->table. "(".$this->id. ",".$this->nom. ",".$this->prenom. ",". $this->email. ",". $this->motdepasse. ") VALUES (" 
       // $query = $this->_connexion->prepare($sql);
       // $query->execute();
        //return $query->fetch();
    //}
}