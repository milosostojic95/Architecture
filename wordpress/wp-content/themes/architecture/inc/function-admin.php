<?php

/*
  Admin page
*/
function architecture_add_admin_page() {
  // generate Architecture Admin Pgae
  add_menu_page('Architecture Theme Options', 'Architecture', 'manage_options', 'decor-architecture', 'architecture_theme_create_page', '
  dashicons-admin-customizer', 110);
  // Generate Architecture Admin sub Page
  add_submenu_page('decor-architecture', 'Architecture Theme Options', 'Settings', 'manage_options', 'decor-architecture', 'architecture_theme_create_page');
  add_submenu_page('decor-architecture', 'Architecture Css Options', 'Custom Css', 'manage_options', 'decor-architecture-css', 'architecture_theme_settings_page');
}
add_action('admin_menu', 'architecture_add_admin_page');

function architecture_theme_create_page() {
  // generation of our admin page

}

function architecture_theme_settings_page() {

}
