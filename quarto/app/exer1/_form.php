<form action="process" method="POST" class="form-vertical">
   <div class="control-group">
      <label class="control-label" for="name">Nome *</label>
      <div class="controls">
         <input type="text" id="name" name="contact[name]" placeholder="Seu nome aqui" />
      </div>
   </div>

   <div class="control-group">
      <label class="control-label" for="address">Endereço *</label>
      <div class="controls">
         <input type="text" id="address" name="contact[address]" placeholder="Seu endereço aqui" />
      </div>
   </div>

   <div class="control-group">
      <label class="control-label" for="age">Idade *</label>
      <div class="controls">
         <input type="text" id="age" name="contact[age]" placeholder="Sua idade aqui" />
      </div>
   </div>
  
   <div class="control-group">
      <div class="controls">
         Feminino <input type="radio" id="sexF" name="contact[sex]" value="F" />
         Masculino <input type="radio" id="sexM" name="contact[sex]" value="M" />
      </div>
   </div>
 
   <div class="control-group">
      <div class="controls">
         <input type="submit" value="Enviar" />
      </div>
   </div>
</form>
