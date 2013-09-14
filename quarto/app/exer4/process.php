<?php
   //print_r($_POST);

   $user = $_POST['login']['user'];
   $password = $_POST['login']['password'];

   if(!($user == 'GHack' && $password == '123')){
      redirectTo('login');
      flash('error', 'Dados inválidos!');
   }else{
      redirectTo('../index');
      flash('success', 'Login realizado!');
   }
?>
