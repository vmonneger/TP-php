<?php

namespace App\Db;

use PDO;
use PDOException;

class Db extends PDO {
  private static $instance;

  private const DBHOST = 'localhost';
  private const DBNAME = 'reddit';
  private const DBUSER = 'root';
  private const DBPWD = '';

  private function __construct() {
    $dbaddress = 'mysql:dbname=' . self::DBNAME . 'host=' . self::DBHOST;

    try {
      parent::__construct($dbaddress, self::DBUSER, self::DBPWD);
      $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
      $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }

  public static function getInstance() {
    if(self::$instance === null) {
      self::$instance = new self();
    } else {
      return self::$instance;
    }
  }
}