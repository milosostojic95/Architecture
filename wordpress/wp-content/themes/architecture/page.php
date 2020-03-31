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

get_header();?>
<section class="blog-hero" style="background: url(<?php echo the_post_thumbnail_url();?>)">
  <div class="row">
    <div class="blog-hero-wrapper">
      <div class="blog-title">
        <h3>NEWSLETTER</h3>
        <h1>Here we share our ideas.</h1>
      </div>
    </div>
  </div>
</section>
<?php
  while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'page' );


  endwhile; // End of the loop.
  ?>
<?php
get_footer();
