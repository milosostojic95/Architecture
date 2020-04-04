<?php get_header(); ?>
  <section class="single-blog-hero">
    <div class="single-blog-wrapper">
      <div class="single-blog-title">
        <h3>Hello</h3>
        <h1>nesto</h1>
      </div>
    </div>
  </section>
  <section class="single-blog-content">
    <div class="row">
      <div class="single-blog-content-wrapper">

	<?php while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content();?>
  <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
