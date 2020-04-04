
<article id="<?php the_ID();?>" <?php post_class(); ?>>
    <?php if ( ! is_single() || ! primer_use_featured_hero_image() ) : ?>
      <?php get_template_part( 'templates/parts/loop/post', 'thumbnail' ); ?>
    <?php endif; ?>
      <?php get_template_part( 'templates/parts/loop/post', 'title' ); ?>
    <?php if ( is_single() ) : ?>
      <?php get_template_part( 'templates/parts/loop/post', 'content' ); ?>
    <?php else : ?>
      <?php get_template_part( 'templates/parts/loop/post', 'excerpt' ); ?>
    <?php endif; ?>
</article>
