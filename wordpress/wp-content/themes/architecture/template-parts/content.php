<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Architecture
 */
  get_header();
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

  <div class="entry-content">
    <h2><?php the_title(); ?></h2>
    <?php
    if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
      the_excerpt();
    } else {
      nista
    }
    ?>

  </div><!-- .entry-content -->

</div><!-- .post-inner -->
</article><!-- .post -->
