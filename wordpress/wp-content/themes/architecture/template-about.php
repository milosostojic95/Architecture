<?php
  /*
    Template Name: About me
  */
  get_header();
?>
<section class="about-hero" style="background:url(<?php the_post_thumbnail_url();?>) !important">
  <div class="row">
    <div class="about-hero-wrapper">
      <h3>about our employers</h3>
      <h1>
        We are based on collective work
        and shared knowledge
      </h1>
      <div class="hero-btn">
          <a href="<?php echo site_url('/contact')?>">hire us</a>
        </div>
    </div>
  </div>
</section>
<?php get_footer();?>
