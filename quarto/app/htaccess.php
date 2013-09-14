<?php require '_header.php'; ?>
<div class="span10">
<section>
   <header class="page-header">
   <h1>HTACCESS</h1>
   </header>
   <article class='well'>
   <pre>
      <!-- http://www.php.net/manual/pt_BR/function.file-get-contents.php -->
      <?= file_get_contents('.htaccess', TRUE); ?>
   </pre>
   </article>
</section>
</div>
<?php require '_footer.php'; ?>

