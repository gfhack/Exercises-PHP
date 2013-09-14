<?php

  define('APP_NAME', 'quarto' );
  define('APP_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/' .   APP_NAME . '/');
  define('APP_LOGS', APP_ROOT .  '/logs/');
  define('IMAGE_PATH', 'app/assets/img/photos/');
  /* Adicionar pastas defaults para inclução de arquivos com as funções require e include */
  set_include_path(get_include_path() . PATH_SEPARATOR . APP_ROOT);
  set_include_path(get_include_path() . PATH_SEPARATOR . APP_ROOT . 'config/');
  set_include_path(get_include_path() . PATH_SEPARATOR . APP_ROOT . 'app/');
  set_include_path(get_include_path() . PATH_SEPARATOR . APP_ROOT . 'app/layout/');
  set_include_path(get_include_path() . PATH_SEPARATOR . APP_ROOT . 'lib/');


  session_start();
  date_default_timezone_set('America/Sao_Paulo');

  require 'flash_message.php';
  require 'utils.php';
  require 'auto_load_classes.php';
  require 'logger.php';
?>
