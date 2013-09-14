<?php

  function redirectTo($address) {
    if (substr($address, 0, 1) == '/')
      header('location: /'. APP_NAME . $address);
    else
      header('location: ' . $address);
  }

  function autenticated(){
   if (!(isset($_SESSION['user']))) {
      flash('error', 'Você deve estar logado para acessar está página!');
      redirectTo('/login/new');
      exit;
   }
  }

  function notAutenticated(){
   if (isset($_SESSION['user'])) {
      flash('warning', 'Você deve estar deslogado para acessar está página!');
      redirectTo(back());
      exit;
   }
  }

  /*
   * Retorna para página que chamou, se ela não existir retorna ao home da aplicação
   */
  function back(){
    if (isset($_SERVER['HTTP_REFERER'])){
      return $_SERVER['HTTP_REFERER'];
    }else{
      return "/";
    }
  }

  function currentUser($attr = null) {
    if (isset($_SESSION['user']))
      return isset($attr) ?  $_SESSION['user'][$attr] :  $_SESSION['user'];
    else
      return false;
  }
?>
