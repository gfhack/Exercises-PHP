<header class="page-header"><h1>Login</h1></header>

<form action="process" method="POST" class="form-vertical">
   <div class="control-group">
      <label class="control-label" for="user">Usuário</label>
      <div class="controls">
	 <input type="text" id="user" name="login[user]" placeholder="Nome de usuário aqui" />
      </div>
   </div>

   <div class="control-group">
      <label class="control-label" for="password">Senha</label>
      <div class="controls">
	 <input type="password" id="password" name="login[password]" placeholder="Senha aqui" />
      </div>
   </div>

   <div class="control-group">
      <div class="controls">
	 <input type="submit" value="Entrar" />
      </div>
   </div>
</form>
