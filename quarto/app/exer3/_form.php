<div class="span5">
   <header class="page-header"><h1>Calculadora</h1></header>
  
   <form class="form-vertical" action="result" method="POST">
      <div class="control-group">
	 <div class="controls">
	    <input type="text" name="calc[num1]" />
	 </div>
      </div>

      <div class="control-group">
	 <div class="controls">
	    <input type="text" name="calc[num2]" />
	 </div>
      </div>

      <div class="control-group">
	 <div class="controls">
	    +<input type="radio" name="calc[operation]" value="plus" />
	    -<input type="radio" name="calc[operation]" value="less" />
	    *<input type="radio" name="calc[operation]" value="multi" />
	    /<input type="radio" name="calc[operation]" value="div" />
	 </div>
      </div>

      <div class="control-group">
	 <div class="controls">
	    <input type="submit" value="Calcular" />
	 </div>
      </div>
   </form>

</div>
