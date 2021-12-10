<?php
  class Articles extends Controller {

    public function index() {
      $this->requireModel("Article");
      $articles = $this->Article->getAllArticle();
      $this->render('index', compact('articles'));
    }

    public function read($id) {
      echo $id;
    }
  }
?>