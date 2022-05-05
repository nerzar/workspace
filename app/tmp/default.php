<?php

  (defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');

  global $services;

  $services->route->importOnce(DIR_VIEW . 'default' . DSE . 'head.php');
  $services->route->importOnce(DIR_VIEW . 'default' . DSE . 'nav.php');
  $services->route->importOnce(DIR_VIEW . 'default' . DSE . 'popup.php');
  $services->route->importView();
  $services->route->importOnce(DIR_VIEW . 'default' . DSE . 'footer.php');
?>
