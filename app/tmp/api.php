<?php

  (defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');

  ($_SERVER['REQUEST_METHOD'] === 'POST') or exit('Access denied!');

  global $services;
  sleep(1);

  $err = false;

  $files = scandir(DIR_APP . 'model');

  foreach ($files as $id => $name) {
    if ($id > 1) {
      require_once DIR_APP . 'model' . DSE . $name;
    }
  }

  // foreach ($services->request->post as $key => $value) {
  //   $err = ( (empty($key) || ($value === false) || empty($value)) )
  //   ? true :
  //   ( ($err)
  //     ? true
  //     : false );
  // }

  $list = (object) [
    'send-form' => \SendForm::class,
    'auth' => \Auth::class,
    'add-article' => \AddArticle::class,
    'edit-article' => \EditArticle::class,
    'get-article' => \GetArticle::class,
  ];

  if (isset($services->request->post->apiCommand) && isset($list->{$services->request->post->apiCommand})) {
    $class = $list->{$services->request->post->apiCommand};
    unset($services->request->post->apiCommand);
    $api_service = new $class($services->request->post, $err);
  }else {
    exit(json_encode(
      ['answer' => '<div class="problem">Ошибка!</div>', 'status' => false]
    ));
  }

?>
