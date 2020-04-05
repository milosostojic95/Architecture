<?php
  /*
    Template Name:service
  */
  get_header();
?>
<section class="service" style="background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),url(<?php the_post_thumbnail_url()?>); background-size:cover; background-position:center center;">
  <div class="service-title flex-center">
    <h3><?php the_title();?></h3>
    <h1>Let's make this happend.</h1>
  </div>
</section>
<?php get_footer();?>
