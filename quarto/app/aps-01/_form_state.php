<?php
   require('_options.php');
?>
  
<form class="form-vertical" action="capital" method="POST">
   <div class="control-group">
      <label>Estado</label>
      <div class="controls">	    
         <select name="state">
            <?php
               foreach($options as $opt => $key){
                  echo '<option value="' . $opt . '">' . $key . '</option>';
               }
            ?>
	 </select>
      </div>
   </div>

      <div class="control-group">
	 <div class="controls">
            <input type="submit" value="Enviar" />
	 </div>
      </div>
   </form>
