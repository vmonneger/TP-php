<?php
  class Users extends Controller {

    public function index() {
      $this->requireModel("User");
      $users = $this->User->getAllUser();
      $this->render('index', compact('users'));
    }

    public function read($id) {
      echo $id;
    }
  }
?>