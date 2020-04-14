<?php
  /*
    Template Name:service
  */
  get_header();
?>
<?php $service = get_field('service_hero'); ?>
<section class="service" style="background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),url(<?php the_post_thumbnail_url()?>); background-size:cover; background-position:center center;">
  <div class="service-title flex-center">
    <h3 class="small-heading"><?php echo $service['small_title'];?></h3>
    <h1 class="main-heading"><?php echo $service['main_title']; ?></h1>
  </div>
</section>
<?php
  $architectural = get_field('architectural');
  $orientation = get_field('orientation');
  $planning = get_field('planning');
?>
<section class="service-items">
  <div class="row">
    <div class="service-item">
      <h1 class="section-heading"><?php echo $architectural['main_title']; ?></h1>
      <p>
        <?php echo $architectural['architectural_text']; ?>
      </p>
      <div class="service-images">
        <img src="<?php echo get_template_directory_uri();?>/assets/service-detail-1.jpg" alt="">
        <img src="<?php echo get_template_directory_uri();?>/assets/service-detail-2.jpg" alt="">
      </div>
    </div>
    <div class="service-item">
      <h1 class="section-heading"><?php echo $orientation['main_title']; ?></h1>
      <p>
        <?php echo $orientation['orientation_text']; ?>
      </p>
    </div>
    <div class="service-item">
      <h1 class="section-heading"><?php echo $planning['main_title']; ?></h1>
      <p>
        <?php echo $planning['planning_text']; ?>
      </p>
    </div>
    <div class="service-btn">
      <a href="http://architecture/?page_id=42">start project</a>
    </div>
  </div>
</section>
<?php get_footer();?>
