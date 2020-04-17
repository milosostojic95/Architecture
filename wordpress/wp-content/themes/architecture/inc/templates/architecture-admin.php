<h1>Architecture Theme Options</h1>
<?php settings_errors();?>
<form action="options.php" method="post">
  <?php settings_fields('arhitecture-settings-group');?>
  <?php do_settings_sections('decor-architecture'); ?>
  <?php submit_button(); ?>
</form>
