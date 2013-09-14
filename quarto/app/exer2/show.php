<?php
   require('_header.php');
   //print_r($_POST);
?>
<div class="span5">
    <table class="table table-bordered table-striped">
       <thead>
	  <th>Estado</th>
	  <th>Cidade</th>
    </thead>
    <tbody>
       <td><?= $_POST['state']; ?></td>
       <td><?= $_POST['city']; ?></td>
     </tbody>
  </table>
</div>
<?php
   require('_footer.php');
?>

