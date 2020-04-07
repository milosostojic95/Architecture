<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Architecture
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="preloader">
  <div class="preloader-content">
    <h1>dekor</h1>
  </div>
</div>
<?php wp_body_open(); ?>
	<header id="masthead" class="site-header">
    <div class="row">
      <div class="header-wrapper">
        <div class="site-branding">
          <h1>Dekor</h1>
        </div>
        <!-- ==================================================#site-navigation -->
        <button class="menu-toggle" aria-expanded="false">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <nav id="site-navigation" class="main-navigation">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'top-menu',
              )
          )?>
        </nav>
      </div>
    </div>
	</header>
