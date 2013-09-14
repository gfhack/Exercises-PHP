<div class="span9">
   <?php if (isset($flash_msg)) { ?>
      <div class='alert alert-<?= @$flash_type ?>'>
         <a class='close' data-dismiss='alert'>x</a>
         <?= @$flash_msg ?>
      </div>
   <?php } ?>

