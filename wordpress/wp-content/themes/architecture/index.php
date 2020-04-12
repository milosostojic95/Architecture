<?php get_header(); ?>
<section class="blog-hero">
  <div class="blog-hero-wrapper flex-center">
    <div class="blog-title">
      <h3 class="small-heading">WE STAND FOR</h3>
      <h1 class="main-heading">Having an idea. Being inspired.</h1>
    </div>
  </div>
</section>
<section class="blog-content">
  <div class="row">
  <h1 class="section-heading">Projects</h1>
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
  <?php get_aside();?>
</section>
<?php get_footer(); ?>
