<?php

  namespace App\Controller;

  (defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');


  class Route
  {
    private $list;
    private $err404;
    private $empty;
    private $data;
    const ITEM_ID_NAME = '__id';

    public function __construct(Request $request)
    {
      if (@is_file(DIR_APP . 'assets' . DSE .'routes.json')) {
        $list_path = DIR_APP . 'assets' . DSE .'routes.json';
      }else {
        throw new \Exception(__CLASS__ . ": routes list not found!", 1);
      }

      $handle = fopen($list_path, 'r');
      $json = fread($handle, filesize($list_path));
      fclose($handle);

      $this->list = json_decode($json);
      $this->err404 = $this->list->__err404;
      $this->empty  = $this->list->__empty;

      $this->data = $this->getRouteData($request->get, $request->uri);
    }


    public function __get(string $id)
    {
      if (isset($this->data->{$id})) {
        return $this->data->{$id};
      }else {
        throw new \Exception(__CLASS__ . ": routing attr. with name '$id' not found!", 1);
      }
    }


    public function import(string $path)
    {
      $path = str_replace('/', DSE, $path);

      if (@is_file($path)) {
        require $path;
      }else {
        throw new \Exception(__CLASS__ . " file by path '" . str_replace(DIR_ROOT, NULL, str_replace(DSE, '/', str_replace(DIR_APP, NULL, $path))) . "' not found!", 1);
      }
    }

    public function importOnce(string $path)
    {
      $path = str_replace('/', DSE, $path);
      if (@is_file($path)) {
        require_once $path;
      }else {
        throw new \Exception(__CLASS__ . " file by path '" . str_replace(DIR_ROOT, NULL, str_replace(DSE, '/', str_replace(DIR_APP, NULL, $path))) . "' not found!", 1);
      }
    }



    private function getRouteData( $get,  $uri)
    {
      if (($get != false) && ($uri != false)) {
        if (isset($this->list->{$get->{0}})) {
          if ( ($this->list->{$get->{0}}->{self::ITEM_ID_NAME} != false)) {
            return $this->list->{$get->{0}}->{self::ITEM_ID_NAME};
          }elseif(isset($get->{1})) {
            return $this->err404;
          }else {
            return $this->list->{$get->{0}};
          }
        }elseif (isset($this->list->{$uri})) {
          return $this->list->{$uri};
        }else {
          return $this->err404;
        }
      }else {
        return $this->empty;
      }
    }


    public function importTmp()
    {
      $path = DIR_TMP . str_replace('/', DSE, $this->data->tmp);
      if (@is_file($path)) {
        require_once $path;
      }else {
        throw new \Exception(__CLASS__ . ": template '{$this->data->tmp}' not found!", 1);
      }
    }

    public function importView()
    {
      $path = ($this->data->view != false)
      ? DIR_VIEW . str_replace('/', DSE, $this->data->view) : false;
      if ($path != false) {
        if (@is_file($path)) {
          require_once $path;
        }else {
          throw new \Exception(__CLASS__ . ": view '{$this->data->view}' not found!", 1);
        }
      }else {
        return '';
      }
    }


    public function printTitle()
    {
      echo ($this->data->title != false)
      ? $this->data->title : '';
    }
  }

?>
