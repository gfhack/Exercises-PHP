<?php require('_header.php'); ?>
<?php
   //print_r($_POST);
   $errors = array();
   
   $op = $_POST['calc']['operation'];
   $n1 = $_POST['calc']['n1'];
   $n2 = $_POST['calc']['n2'];

   if(!is_numeric($n1))
      $errors['n1'] = 'error';

   if(!is_numeric($n2))
      $errors['n2'] = 'error';
	 
   if(empty($_POST['calc']['n1']))
      $errors['n1'] = 'error';

   if(empty($_POST['calc']['n2']))
      $errors['n2'] = 'error';

   if(!empty($errors)){
?>
         <div class="alert alert-error">
	    <a class="close" data-dismiss="alert">x</a>
	    <p>Dados inválidos</p>
         </div>
<?php
      }else{
         switch($op){
            case '+': $result = $n1 + $n2;
            break;
            case '-': $result = $n1 - $n2;
            break;
            case '*': $result = $n1 * $n2;
            break;
            case '/': $result = $n1 / $n2;
            break;
         }
      }

   require('_form_calc.php');
   require('_footer.php');  
?>
