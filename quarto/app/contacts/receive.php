<?php
   require('validations.php');
   
   redirect_if_not_a_post('name', 'email', 'msg', 'location:new.php');

   $name = trim($_POST['name']);
   $email = trim($_POST['email']);
   $msgg = trim($_POST['msg']);
   $errors = array();

   notEmpty($name, 'name', $errors);
   notEmpty($email, 'email', $errors);
   validEmail($email, 'email', $errors);
   notEmpty($msgg, 'msg', $errors);

   require('_header.php');

   if (!empty($errors)) {
      $flash_type = 'error';
      $flash_msg = 'Existe dados inválidos no seu formulário!';
      require '_form.php';
   }else{
      $flash_type = 'success';
      $flash_msg = 'Dados recebidos com sucesso!';
?>


<header class="page-header">
<h1>Dados Recebidos</h1>
</header>
<p><strong>Nome:</strong> <?= $name ?></p>
<p><strong>Email:</strong> <?= $email ?></p>
<p><strong>Mensagem:</strong> <?= $msgg ?></p>
<p><a href="new">Voltar</a></p>

<?php
   } 
   
   require('_footer.php');
?>
