<?php

namespace App\Core;
use App\Controllers\MainController;

class Main {
  
  public function start() {
    $params = [];
    if(isset($_GET['p'])) {
      $params = explode ('/', $_GET['p']);
    }

    if(!empty($params)) {
      var_dump($params);
    } else {
      $controller = new MainController;
      $controller->index();
    }
  }
}