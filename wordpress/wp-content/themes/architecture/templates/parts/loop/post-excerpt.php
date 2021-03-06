<?php
/**
 * Template part for displaying the post excerpt inside The Loop.
 *
 * @package Primer
 * @since   1.0.0
 */

?>

<div class="entry-summary">

	<?php the_excerpt(); ?>

	<p><a class="blog-btn" href="<?php the_permalink(); ?>" aria-label="<?php printf( /* translators: post title */ esc_attr__( 'Continue reading %s', 'primer' ), get_the_title() ); ?>"><?php printf( /* translators: right arrow (LTR) / left arrow (RTL) */ esc_html__( 'Read more', 'primer' ), is_rtl() ? '&larr;' : '&rarr;' ); ?><span class="right-arrow"></span></a></p>

</div><!-- .entry-summary -->
