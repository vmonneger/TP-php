<?php
  class Database {
    private $host = 'localhost';
    private $db_name = 'reddit';
    private $port = '3306';
    private $username = 'root';
    private $conn;

    public function connect() {
      $this->conn = null;

      try {
        $this->conn = new PDO('mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db_name, $this->username);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      } catch(PDOException $e) {
        echo 'Connection failed:' . $e->getMessage();
      }
      return $this->conn;
    }
  }
?>