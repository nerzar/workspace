<?php

  namespace App\Controller;

  (defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');


  class Request
  {

    private $data;
    private $dc;

    function __construct()
    {
      $dc_path = DIR_APP . 'assets' . DSE . 'dc.php';
      if (@is_file($dc_path)) {
        $this->dc = require_once $dc_path;
      }else {
        throw new \Exception(__CLASS__ . ": danger codes not found!", 1);
      }

      $this->data = (object) [
        'uri' => (isset($_GET['route']) && !empty($_GET['route'])) ? trim($_GET['route'], '/') : false,
        'get' => (isset($_GET['route']) && !empty($_GET['route'])) ? $this->collect(explode('/', trim($_GET['route'], '/'))) : false,
        'post' => ($_SERVER['REQUEST_METHOD'] === 'POST') ? $this->collect($_POST) : false,
      ];
    }


    public function __get(string $id)
    {
      if (isset($this->data->{$id})) {
        return $this->data->{$id};
      }else {
        throw new \Exception(__CLASS__ . ": request content for '$id' not found!", 1);
      }
    }


    private function collect(array $content)
    {
      $result = (object) [];
      foreach ($content as $name => $val) {
        if (is_array($val)) {
          $result->{$name} = $this->collect($val);
        }else {
          $result->{$name} = $this->clean($val);
        }
      }
      return $result;
    }

    private function clean(string $data)
    {
      $data = strip_tags($data);
      $data = htmlentities($data, ENT_QUOTES, "UTF-8");
      $data = htmlspecialchars($data, ENT_QUOTES);
      foreach ($this->dc as $val) {
        $data = str_replace($val, "{d_code=[$val]}", $data);
      }
      return $data;
    }
  }


?>
