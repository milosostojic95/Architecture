<?php get_header(); ?>
  <section class="single-blog-hero" style="background:url(<?php the_post_thumbnail_url(); ?>);">
    <div class="single-blog-wrapper flex-center">
      <div class="single-blog-title">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </section>
  <section class="single-blog-content">
    <div class="row">
      <div class="single-blog-wrapper">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content();?>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
