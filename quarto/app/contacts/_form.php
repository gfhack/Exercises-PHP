<header class="page-header">
   <h1>Formulário de Contato</h1>
</header>

<form class="form-horizontal" action="receive.php" method="POST">
   <div class="control-group <?= isset($errors['name']) ? 'error' : '' ?>">
      <label class="control-label" for="name">Nome:</label>
      <div class="controls">
	 <input type="text" value="<?= @$name ?>" name="name" id="name" placeholder="Seu nome">
	 <span class='help-inline'><?= @$errors['name']?></span>
      </div>
   </div>
   <div class="control-group <?= isset($errors['email']) ? 'error' : '' ?>">
      <label class="control-label" for="email">Email:</label>
      <div class="controls">
	 <input type="text" value="<?= @$email ?>" name="email" id="email" placeholder="Seu email">
	 <span class='help-inline'><?= @$errors['email']?></span>
      </div>
   </div>
   <div class="control-group <?= isset($errors['msg']) ? 'error' : '' ?>">
      <label class="control-label" for="msg">Mensagem:</label>
      <div class="controls">
	 <textarea name="msg" id="msg"><?= @$msgg ?></textarea>
	 <span class='help-inline'><?= @$errors['msg']?></span>
      </div>
   </div>
   <div class="control-group">
      <div class="controls">
	 <button type="submit" class="btn">Enviar</button>
      </div>
   </div>
</form>
