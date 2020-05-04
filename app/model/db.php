<?php
class DB{
  public $servername;
  public $username;
  public $pass;
  public $dbname;
  public function __construct(){
    $this->db = self::connect();
  }

  public function connect(){
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "new_blog";

    $conn = mysqli_connect($servername, $username, $pass, $dbname);

    if(!$conn){
      die("Erorr while connecting to database: ".mysqli_connect_error());
    }
    return $conn;
  }

  public function query($val){
    $query = mysqli_query($this->db, $val);
     return mysqli_fetch_assoc($query);
  }
}
?>
