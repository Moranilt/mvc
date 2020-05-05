<?php
class Model{
  public $searchName;
  public $db;

  public function __construct($db){
    $this->db = $db;
  }

  public function filterName($name){
    $this->searchName = $name;
  }

  public function getUser(){
    return $this->db->query("SELECT * FROM users WHERE firstname='$this->searchName'");
  }

  public function getAllUsers(){
    return $this->db->query("SELECT * FROM users");
  }

}

 ?>
