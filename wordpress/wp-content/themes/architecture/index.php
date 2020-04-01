<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Architecture
 */

get_header();?>
<section class="project-hero">
    <div class="project-hero-wrapper">
      <div class="project-hero-title">
        <h3>Projects</h3>
        <h1>This is what we doing</h1>
      </div>
    </div>
  </section>
  <section class="blog">
    <div class="row">
    <?php 
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template-parts/content', get_post_type() );
      } // end while
    } // end if
  ?>
    </div>
  </section>
<?php get_footer();?>
