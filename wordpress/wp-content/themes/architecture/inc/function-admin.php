<?php

/*
  Admin page
*/
function architecture_add_admin_page() {
  add_menu_page('Architecture Theme Options', 'Architecture', 'manage_options', 'decor-architecture', 'architecture_theme_create_page', '
  dashicons-admin-customizer', 110);
}
add_action('admin_menu', 'architecture_add_admin_page');

function architecture_theme_create_page() {
  // generation of our admin page
  echo '<h1>Architecture Theme Options</h1>';
}
