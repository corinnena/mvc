<?php
class User extends Model{
    public function __construct(){
        $this->table = "users";
        $this->getConnection();
    }

    public function findById($id){
        $sql = "SELECT * FROM ". $this->table ." WHERE id='".$id."' ";
      $query = $this->_connexion->prepare($sql);
      $query->execute();
      return $query->fetch();
    }
}