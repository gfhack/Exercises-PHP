<div class="span5">

<section>
   <header class="page-header">
   <h1>Calculadora</h1>
   </header>
</section>

   <form class="form-vertical" action="receive" method="POST">
      <div class="control-group <?= isset($errors['n1']) ? 'error' : '' ?>">
	 <div class="controls">
	    <input type="text" name="calc[n1]" id="n1" value="<?= @$n1 ?>" />	    
         </div>
      </div>

      <div class="control-group <?= isset($errors['n2']) ? 'error' : '' ?>">
	 <div class="controls">
	    <input type="text" name="calc[n2]" id="n2" value="<?= @$n2 ?>" />	    
         </div>
      </div>
      
      <div class="control-group">
	 <div class="controls">
	    +<input type="radio" name="calc[operation]" value="+" checked="checked" />
	    -<input type="radio" name="calc[operation]" value="-" />
	    *<input type="radio" name="calc[operation]" value="*" />
	    /<input type="radio" name="calc[operation]" value="/" />
	 </div>
      </div>
      
      <div class="control-group">
	 <label>Resultado</label>
	 <div class="controls">
	    <input type="text" name="calc[result]" value="<?= @$result ?>" disabled="disabled" />	    
         </div>
      </div>
      
      <div class="control-group">
	 <div class="controls">
            <input type="submit" value="Enviar" />
	 </div>
      </div>
   </form>
</div>
