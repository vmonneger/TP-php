<?php
  // use App\Core\Main;
  // require_once 'vendor/autoload.php';
  // $app = new Main();
  // $app->start();

  define('ROOT', str_replace('index.php', '',  $_SERVER['SCRIPT_FILENAME']));
  require_once(ROOT.'src/app/Model.php');
  require_once(ROOT.'src/app/Controller.php');

  $params = explode('/', $_GET['p']);

  if ($params[0] === 'articles' || $params[0] === 'comments' || $params[0] === 'users') {

    $controller =ucfirst($params[0]);

     $action = isset($params[1]) ? $params[1] : 'index';

     require_once(ROOT.'src/Controllers/'. $controller . '.php');

     $controller = new $controller();
     if (isset($controller) && method_exists($controller, $action)) {
       unset($params[0]);
       unset($params[1]);
       call_user_func_array([$controller, $action], $params);
     } else {
       http_response_code(404);
       echo "404 error";
     }
  } else {
    http_response_code(404);
    echo "404 error";
  }
?>

