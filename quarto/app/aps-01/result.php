<?php
   $list = array();

   for($i = 0; $i < 3; $i++){
      for($j = 0; $j < 3; $j++){
         $list[] = $_POST['sqrt'][$i][$j];
      }
   }

   require('_header.php');

   foreach(array_count_values($list) as $list => $qtd){}

   if($qtd > 1){
?>
   <div class="alert alert-error">
      <a class="close" data-dismiss="alert">x</a>
      <p>Dados duplicados</p>
   </div>
<?php
      require('_form_sqrt.php');
   }else{
   
   $lines = array(0, 1, 2);
   $diag = array(0, 1);
   $columns = array(0, 1, 2);
   
   for($i = 0; $i < 3; $i++){
      $lines[$i] = 0;
      $columns[$i] = 0;
   }
   
   for($i = 0; $i < 2; $i++){
      $diag[$i] = 0;
   }
 
   for($i = 0; $i < 3; $i++){
      $lines[0] += $_POST['sqrt'][0][$i];
   }

   for($i = 0; $i < 3; $i++){
      $lines[1] += $_POST['sqrt'][1][$i];
   }

   for($i = 0; $i < 3; $i++){
      $lines[2] += $_POST['sqrt'][2][$i];
   }
   
   for($i = 0; $i < 3; $i++){
      $diag[0] += $_POST['sqrt'][$i][$i];
   }
   
   for($j = 0; $j < 3; $j++){
      $columns[0] += $_POST['sqrt'][$j][0];
   }

   for($j = 0; $j < 3; $j++){
      $columns[1] += $_POST['sqrt'][$j][1];
   }

   for($j = 0; $j < 3; $j++){
      $columns[2] += $_POST['sqrt'][$j][2];
   }

   for($i = 0; $i < 3; $i++){
      for($j = 0; $j < 3; $j++){
         if(($i+$j) == 2){
            $diag[1] += $_POST['sqrt'][$i][$j];
         }
      }
   }
   /*
   print_r($_POST);
   print_r($lines);
   print_r($columns);
   print_r($diag);
   */
?>

<div class="span5">

<section>
   <header class="page-header">
   <h1>QM: Resposta</h1>
   </header>
</section>

<?php
   $magic_square = true;
   
   foreach($lines as $ln){
      if($ln != 15){
         $magic_square = false;
      }
   }
   
   foreach($columns as $cl){
      if($cl != 15){
         $magic_square = false;
      }
   }
   
   foreach($diag as $dg){
      if($dg != 15){
         $magic_square = false;
      }
   }

   if($magic_square){
   ?>
   <div class="alert alert-success">
      <a class="close" data-dismiss="alert">x</a>
      <p>É um Quadrado Mágico!</p>
   </div>
<?php }else{?>
   <div class="alert alert-error">
      <a class="close" data-dismiss="alert">x</a>
      <p>Não é um Quadrado Mágico!</p>
   </div>
<?php
   }
?>

   <table class="table table-bordered table-striped">
   <thead>
      <th>Soma das Linhas</th>
      <th>Soma das Colunas</th>
      <th>Soma das Diagonais</th>
   </thead>
   <tbody>
      <td>
         <?php
            for($i = 0; $i < 3; $i++){
               echo 'Linha ' . ($i+1) . ': ' . $lines[$i] . '<br />';
            }
         ?>
      </td>
      <td>
         <?php
            for($i = 0; $i < 3; $i++){
               echo 'Coluna ' . ($i+1) . ': ' . $columns[$i] . '<br />';
            }
         ?>
      </td>
      <td>
         <?php 
            for($i = 0; $i < 2; $i++){
               echo 'Diagonal ' . ($i+1) . ': ' . $diag[$i] . '<br />';
            }
         ?>
      </td>
    </tbody>
 </table>

</div>

<?php
   }
   require('_footer.php');
?>
