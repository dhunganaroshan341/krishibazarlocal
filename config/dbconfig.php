<?php
class Database{
    protected $conn;
   public function __construct(){
    $this->getDatabase();
   }
   public function getDatabase(){
    $this->conn = new mysqli('localhost','root','','krishibazar');
    return $this->conn;
   }
}