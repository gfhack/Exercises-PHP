<?php
   require('_header.php');
?>
<div class="span5">

   <table class="table table-bordered table-striped">
   <thead>
      <th>Nome</th>
      <th>Endereço</th>
      <th>Idade</th>
      <th>Sexo</th>
   </thead>
   <tbody>
      <td><?= @$_POST['contact']['name'] ?></td>
      <td><?= @$_POST['contact']['address'] ?></td>
      <td><?= @$_POST['contact']['age'] ?></td>
      <td>
	 <?php
	    if(isset($_POST['contact']['sex'])){
	       if($_POST['contact']['sex'] == 'M'){
	          echo 'Masculino';
	       }else{
	          echo 'Feminino';
	       }
	    }
	 ?>
       </td>
    </tbody>
 </table>

</div>
<?php
   require('_footer.php');
?>
