<?php
  class Comment extends Model{

    public function __construct() {
      $this->table = "comments";
      $this->connect();
    }
  }
?>