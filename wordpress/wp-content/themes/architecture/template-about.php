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
<section class="work-process">
  <div class="row">
    <h1 class="section-heading">How we works with clients.</h1>
    <div class="process-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/proc1.jpg" alt="">
      <h3>01</h3>
      <h1>Approach</h1>
      <p>Our design approach is rooted in research, the creative testing of ideas, and a singular focus in execution. We believe that creating memorable and usable spaces is a process of discovery, iteration and constant curiosity. The context of a project in its widest sense is important to us. Our curiosity leads us to explore the broad circumstances around each project in the search for insight and inspiration. This process is enriched by connecting a project to wider references of material culture, science, technology, art and landscape.
      By actively resisting preconceptions, we are able to tap into a spectrum of information that continually informs and inspires the design process. This is complemented by our communicative attitude and a disciplined project management to ensure projects are realised within planned budgets and timelines.</p>
    </div>
    <div class="process-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/proc2.jpg" alt="">
      <h3>02</h3>
      <h1 class="section-heading">Research.</h1>
      <p>At Nex, we design by research. It informs, influences and defines everything – the nature of a problem, context, creativity, even the inner workings of an organisation. But most importantly, it puts user experience at the forefront of our minds. Insight allows us to push boundaries, learn and set our sights on real impact, not just a formal or formulaic solution.

      At Nex, we design by research. It informs, influences and defines everything – the nature of a problem, context, creativity, even the inner workings of an organisation. But most importantly, it puts user experience at the forefront of our minds. Insight allows us to push boundaries, learn and set our sights on real impact, not just a formal or formulaic solution.
      We let this knowledge set the pace and approach, asking and listening before taking action. This is very much our culture, our way. From influencing strategy to focusing feasibility, high value is placed on continual research and exploration of the opportunities it presents. Research isn’t a step in our process, it’s the fuel that keeps us moving forward..</p>
    </div>
    <div class="process-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/proc3.jpg" alt="">
      <h3>03</h3>
      <h1 class="section-heading">Environment.</h1>
      <p>The performance of a building is open-ended, and bigger than any organisation, user or owner. This ensures that our responsibility goes beyond ticking the sustainability box. Environmental performance is about more than mindful use of energy and materials, while minimising carbon and waste. It’s about looking to natural processes and structures for insight and inspiration, looking for opportunities to creatively reuse, and citing new ways to create virtuous cycles of sustainability.
      Architecture changes people, places, environments and communities, and we want that change to be for the better. Our approach weaves this consideration into the very fabric of our design process from day one. It’s simply our way of working. To us, architectural sustainability is about designing well and for future flexibility, and whenever possible we encourage our partners to invest in the long term vision.</p>
    </div>
    <div class="process-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/proc4.jpg" alt="">
      <h3>04</h3>
      <h1 class="section-heading">Modelling.</h1>
      <p>Design Modelling affords us freedom and our clients’ clarity. It enables our process to be iterative and responsive, adapting to opportunity continually. Design modelling enables us to fully form ideas and explore possibilities with a keener eye.
      So change doesn’t compromise our design, it enriches it. It allows creativity to become a constant in our process. Every model we produce is a digital or handcrafted prototype of our problem solving approach. Modelling is communicative tool as much as a design one, allowing us to collaborate more meaningfully with our clients and consultants.
      </p>
    </div>
    <div class="process-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/proc5.jpg" alt="">
      <h3>05</h3>
      <h1 class="section-heading">Collaboration.</h1>
      <p>Collaboration is instinctive to Nex. Rather than be reserved for specific project stages, collaboration shapes our every action from inquiry to end result. We continue to ask questions, listen and discuss, nurturing an environment that’s open and inclusive.
      Partnership is integral to what we do and how we do it. Our clients and collaborators are like-minded and driven by the same values and vision as ourselves. This collaboration strengthens the role of design, turning it into a project-long experience, not just a singular step.</p>
    </div>
  </div>
</section>
<?php get_footer();?>
