<?php get_header(); ?>
<section class="blog-hero">
  <div class="blog-hero-wrapper">
    <div class="blog-title">
      <h3>WE STAND FOR</h3>
      <h1>Having an idea. Being inspired.</h1>
    </div>
  </div>
</section>
<section class="blog-content">
  <div class="row">
  <h1>Projects</h1>
    <div class="blog-content-wrapper">
      <div class="blog-items">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
