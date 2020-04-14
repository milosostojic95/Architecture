<?php
  /*
    Template Name: About me
  */
  get_header();
?>
<?php $abouthero = get_field('about_hero');?>
<section class="about-hero" style="background:url(<?php the_post_thumbnail_url();?>);">
  <div class="row">
    <div class="flex-start">
      <h3 class="small-heading"><?php echo $abouthero['small_title']; ?></h3>
      <h1 class="main-heading">
        <?php echo $abouthero['main_title']; ?>
      </h1>
      <div class="hero-btn">
          <a href="http://architecture/?page_id=42"><?php echo $abouthero['about_button']; ?></a>
        </div>
    </div>
  </div>
</section>
<?php $numbers = get_field('numbers_title'); ?>
<section class="about-numbers">
  <div class="row">
    <div class="numbers-wrapper">
      <div class="left-part-numbers">
        <div class="number-titles">
          <h1><?php echo $numbers['numbers_project'];?></h1>
          <p>project done</p>
        </div>
        <div class="number-titles">
        <h1><?php echo $numbers['numbers_client'];?></h1>
          <p>happy clients</p>
        </div>
        <div class="number-titles">
        <h1><?php echo $numbers['working_hours'];?></h1>
          <p>working hours</p>
        </div>
        <div class="number-titles">
        <h1>185</h1>
          <p>project done</p>
        </div>
      </div>
      <div class="right-part-numbers">
        <h2 class="section-small-heading"><?php echo $numbers['small_title'];?></h2>
        <h1 class="section-heading">
        <?php echo $numbers['main_title'];?>
        </h1>
        <p>
        <?php echo $numbers['number_text'];?>
        </p>
      </div>
    </div>
  </div>
</section>
<?php $aboutus = get_field('about_us'); ?>
<section class="about-us">
  <div class="row">
    <div class="about-us-wrapper">
      <h1 class="section-heading"><?php the_title();?></h1>
      <p>
        <?php echo $aboutus['about_text']; ?>
      </p>
    </div>
  </div>
</section>
<?php $process = get_field('process'); ?>
<section class="work-process">
  <div class="row">
    <h1 class="section-heading"><?php echo $process['big_title']; ?></h1>
    <div class="process-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/proc1.jpg" alt="">
      <h3>01</h3>
      <h1 class="section-heading">Approach</h1>
      <p>
        <?php echo $process['approach_text']; ?>
      </p>
    </div>
    <div class="process-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/proc2.jpg" alt="">
      <h3>02</h3>
      <h1 class="section-heading">Research.</h1>
      <p>
        <?php echo $process['research_text']; ?>
      </p>
    </div>
    <div class="process-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/proc3.jpg" alt="">
      <h3>03</h3>
      <h1 class="section-heading">Environment.</h1>
      <p>
        <?php echo $process['environment_text']; ?>
      </p>
    </div>
    <div class="process-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/proc4.jpg" alt="">
      <h3>04</h3>
      <h1 class="section-heading">Modelling.</h1>
      <p>
        <?php echo $process['modelling_text']; ?>
      </p>
    </div>
    <div class="process-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/proc5.jpg" alt="">
      <h3>05</h3>
      <h1 class="section-heading">Collaboration.</h1>
      <p>
        <?php echo $process['collaboration_text']; ?>
      </p>
    </div>
  </div>
</section>
<?php get_footer();?>
