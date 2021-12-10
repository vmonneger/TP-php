<?php
  abstract class Model {
    private $host = 'localhost';
    private $db_name = 'reddit';
    private $port = '3306';
    private $username = 'root';
    protected $conn;
    public $table;
    public $id;

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

    // Methods User  
    public function getAll() {
      $sql = 'SELECT firstname FROM ' . $this->table;
      $query = $this->conn->prepare($sql);
      $query->execute();
      return $query->fetch();
    }
 
    public function getAllUser() {
      $sql = 'SELECT id, firstname, lastname, email, admin FROM ' . $this->table;
      $query = $this->conn->prepare($sql);
      $query->execute();
      return $query->fetchAll();
    }

   public function getOneUser() {
    $sql = 'SELECT id, firstname, lastname, email, id, admin FROM ' . $this->table . ' WHERE id ='. $this->id;
    $query = $this->conn->prepare($sql);
    $query->execute();
    return $query->fetch();
   }

   public function createUser() {
    // $query = 'INSERT INTO ' . $this->table . ' SET firstname = :firstname, lastname = :lastname, email = :email, password = :password, admin = :admin';
    // $statement = $this->conn->prepare($query);

    // $this->firstname = htmlspecialchars($this->firstname);
    // $this->lastname = htmlspecialchars($this->lastname);
    // $this->email = htmlspecialchars($this->email);
    // $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    // $this->admin = htmlspecialchars($this->admin);

    // $statement->bindParam(':firstname', $this->firstname);
    // $statement->bindParam(':lastname', $this->lastname);
    // $statement->bindParam(':email', $this->email);
    // $statement->bindParam(':password', $this->password);
    // $statement->bindParam(':admin', $this->admin);

    // if ($statement->execute()) {
    //   return true;
    // } else {
    //   printf($statement->error);
    //   return false;
    // }
   }

   public function deleteUser() {

   }

   public function updateUser() {

   }

    //  Methods article
    public function getAllArticle() {
      $sql = 'SELECT id, user_id, title, content FROM '. $this->table;
      $query = $this->conn->prepare($sql);
      $query->execute();
      return $query->fetchAll();
    }

    public function getOneArticle() {
      
    }

    public function createArticle() {

    }

    public function deleteArticle() {

    }

    public function updateArticle() {
      
    }

    // Methods Comment
    public function getAllComment() {
      $query = 'SELECT id, firstname, lastname, email, admin FROM users';
       $statement = $this->conn->prepare($query);
       $statement->execute();
       return $statement;
    }
  
    public function getOneComment() {
  
    }
  
    public function createComment() {
  
    }
  
    public function deleteComment() {
  
    }
  
    public function updateComment() {
      
    }
  }
?>