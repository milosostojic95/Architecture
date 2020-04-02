<?php if ( is_singular() ) : ?>
  <h1 class="entry-title"><?php the_title(); ?></h1>
<?php else : ?>
	<h2 class="entry-title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
<?php endif; ?>
