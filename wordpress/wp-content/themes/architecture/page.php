<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Architecture
 */
  get_header();
?>
<section class="gallery-hero flex-center">
  <div class="gallery-title">
    <h3 class="small-heading">WE STAND FOR</h3>
    <h1 class="main-heading">Having an idea. Being inspired.</h1>
  </div>
</section>
<section class="gallery">
  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post();?>
      <?php the_content(); ?>
    <?php endwhile;?>
  <?php endif; ?>
</section>
<?php get_footer(); ?>
