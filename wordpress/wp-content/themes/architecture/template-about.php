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
<section class="about-numbers">
  <div class="row">
    <div class="numbers-wrapper">
      <div class="left-part-numbers">
        <div class="number-titles">
          <h1>980</h1>
          <p>project done</p>
        </div>
        <div class="number-titles">
        <h1>185</h1>
          <p>happy clients</p>
        </div>
        <div class="number-titles">
        <h1>756</h1>
          <p>working hours</p>
        </div>
        <div class="number-titles">
        <h1>185</h1>
          <p>project done</p>
        </div>
      </div>
      <div class="right-part-numbers">
        <h2>NUMBERS</h2>
        <h1>
          Make with love
          all what we do.
        </h1>
        <p>
          Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations. All our projects incorporate a unique artistic image and functional solutions.
        </p>
        <p>
          Client is the soul of the project. Our main goal is to illustrate his/hers values and individuality through design. So we wait to hear your wishes.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="about-us">
  <div class="row">
    <div class="about-us-wrapper">
      <h1><?php the_title();?></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum consectetur optio fugiat id qui nemo ducimus? Tempore, accusamus animi, dolor consectetur quasi optio molestiae expedita quae dolorem repudiandae, dolores minus! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus laborum at, harum eligendi sed nobis voluptate nisi corporis blanditiis magnam earum vel tempore delectus neque maiores adipisci, ut odio itaque!</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita veritatis nostrum, fugiat non eligendi autem quos vitae doloribus in quia perferendis ipsum? Quidem, cupiditate nulla? Molestiae reprehenderit veritatis accusantium odit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit voluptates quasi impedit accusantium labore laboriosam ab quidem veniam quas nisi repellat expedita asperiores reiciendis est ut enim, voluptatibus minus molestias.</p>
    </div>
  </div>
</section>
<?php get_footer();?>
