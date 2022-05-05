<?php


  define('DSE', DIRECTORY_SEPARATOR);
  define('DIR_ROOT', __DIR__ . DSE);
  define('DIR_APP', DIR_ROOT . 'app' . DSE);
  define('DIR_CONTROLLER', DIR_APP . 'controller' . DSE);
  define('DIR_TMP', DIR_APP . 'tmp' . DSE);
  define('DIR_VIEW', DIR_APP . 'view' . DSE);


  try {
    // ini_set('error_reporting', E_ALL);
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);


    if (@is_file(DIR_CONTROLLER . 'request.php')) {
      require_once DIR_CONTROLLER . 'request.php';
    }else {
      throw new \Exception("Index: Request package not found!", 1);
    }

    if (@is_file(DIR_CONTROLLER . 'route.php')) {
      require_once DIR_CONTROLLER . 'route.php';
    }else {
      throw new \Exception("Index: Route package not found!", 1);
    }

    global $services;
    $services = (object) [
      'request' => new \App\Controller\Request(),
    ];
    $services->route = new \App\Controller\Route($services->request);

    $services->route->importTmp();


  } catch (\Exception $e) {
    exit($e->getMessage());
  }




?>
