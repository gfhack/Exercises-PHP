<?php
   require('_header.php');
?>

<div class="span5">
   
<?php
   //print_r($_POST);
   if( (empty($_POST['calc']['num1']) && empty($_POST['calc']['num2'])) ){
   ?>
   <div class='alert alert-error'>
	 <a class='close' data-dismiss='alert'>x</a>
	 <p>Dados inválidos</p>
      </div>
<?php
   }
?>

<?php
   if($_POST['calc']['operation'] == 'plus'){
      $result = $_POST['calc']['num1'] + $_POST['calc']['num2'];
   }else if($_POST['calc']['operation'] == 'less'){
      $result = $_POST['calc']['num1'] - $_POST['calc']['num2'];
   }else if($_POST['calc']['operation'] == 'multi'){
      $result = $_POST['calc']['num1'] * $_POST['calc']['num2'];
   }else if($_POST['calc']['operation'] == 'div'){
      $result = $_POST['calc']['num1'] / $_POST['calc']['num2'];
   }
?>

    <table class="table table-bordered table-striped">
       <thead>
	  <th>Resultado</th>
    </thead>
    <tbody>
       <td><?= $result ?></td>
     </tbody>
  </table>

</div>

<?php
   require('_footer.php');
?>
