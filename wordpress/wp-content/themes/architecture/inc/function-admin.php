<?php

/*
  Admin page
*/
function architecture_add_admin_page() {
  // generate Architecture Admin Pgae
  add_menu_page('Architecture Theme Options', 'Architecture', 'manage_options', 'decor-architecture', 'architecture_theme_create_page', '
  dashicons-admin-customizer', 110);
  // Generate Architecture Admin sub Page
  add_submenu_page('decor-architecture', 'Architecture Theme Options', 'General', 'manage_options', 'decor-architecture', 'architecture_theme_create_page');
  add_submenu_page('decor-architecture', 'Architecture Css Options', 'Custom Css', 'manage_options', 'decor-architecture-css', 'architecture_theme_settings_page');
  //Activate custom settings
  add_action('admin_init', 'architecture_custom_settings');
}
add_action('admin_menu', 'architecture_add_admin_page');

function architecture_custom_settings() {
  register_setting('arhitecture-settings-group', 'first_name');
  add_settings_section('architecture-sidebar-options', 'Sidebar Options', 'arhitecture_sidebar_options', 'decor-architecture');
  add_settings_field('architecture-name', 'First Name', 'architecture_sidebar_name', 'decor-architecture', 'architecture-sidebar-options');
}
function architecture_sidebar_name() {
  $firstName = esc_attr(get_option('first_name'));
  echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First name"/>';

}
function arhitecture_sidebar_options() {
  echo 'customize your sidebar information';
}

function architecture_theme_create_page() {
  // generation of our admin page
  require_once( get_template_directory() . '/inc/templates/architecture-admin.php');
}

function architecture_theme_settings_page() {

}
