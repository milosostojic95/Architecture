<?php
  /*
    Template Name: Contact
  */
  get_header();
?>
<section class="contact-hero">
  <div class="row">
    <div class="contact-hero-wrapper">
      <div class="contact-hero-title">
        <h3 class="small-heading"><?php the_title();?></h3>
        <h1 class="main-heading">Let's establish relations</h1>
      </div>
    </div>
  </div>
</section>
<section class="contact-form">
  <div class="row">
    <div class="contact-wrapper">
      <div class="left-part-contact">
        <div class="contact-title">
          <h3 class="section-small-heading"><?php  the_title();?></h3>
          <h1 class="section-heading">Let's start new project.</h1>
          <p>Now, as you were able to get a picture of who we are, it is up to you to contact us and lay the foundation for a new and successful business relationship. Our team consists</p>
        </div>
        <div class="contact-info">
          <h3>Phone</h3>
          <p>98347459432</p>
        </div>
        <div class="contact-info">
          <h3>Email</h3>
          <p>example@gmail.com</p>
        </div>
      </div>
      <div class="right-part-contact">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>

