<?php if(has_post_thumbnail()) : ?>
	<div class="featured-image">
    <?php if ( ! is_single() ) : ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
    <?php else : ?>
      <?php the_post_thumbnail(); ?>
    <?php endif; ?>
  </div>
<?php endif; ?>

