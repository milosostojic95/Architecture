<?php get_header(); ?>
<?php $hero = get_field('home_hero'); ?>
  <section class="hero" style="background: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="row">
      <div class="overlay"></div>
      <div class="hero-wrapper flex-center">
        <div class="hero-content">
          <h3 class="small-heading"><?php echo $hero['small_title']; ?></h3>
          <h1 class="main-heading"><?php echo $hero['main_title']; ?></h1>
          <p>
            <?php echo $hero['main_text'];?>
          </p>
          <div class="hero-btn">
            <a href="http://architecture/?page_id=45"><?php echo $hero['main_button'];?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php $about = get_field('about_title');?>
  <section class="about">
    <div class="row">
      <div class="columns">
        <div class="left-part-about flex-center">
          <div class="about-title">
            <h1><?php echo $about['years'];?></h1>
            <p>years of experience</p>
          </div>
        </div>
        <div class="right-part-about">
          <h2 class="section-small-heading"><?php echo $about['small_title'];?></h2>
          <h1 class="section-heading">
          <?php echo $about['big_title'];?>
          </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quod ratione consequatur explicabo corrupti quisquam tempore asperiores iusto, fuga rerum ducimus veritatis id eaque assumenda architecto enim, repellat ex alias.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, quisquam ipsum! Eveniet eius error libero possimus, quos labore soluta et sunt fuga adipisci perspiciatis aliquid fugit. Asperiores vero ab repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique cumque maiores sed impedit facere, voluptates iste, consectetur enim magnam qui. Aut culpa dolorem in ipsum labore ea libero optio.</p>
        </div>
      </div>
    </div>
  </section>
  <?php $projects = get_field('project_title'); ?>
  <section class="projects only-lg">
    <div class="row">
      <div class="projects-title">
        <h2 class="section-small-heading"><?php echo $projects['small_title'];?></h2>
        <h1 class="section-heading"><?php echo $projects['big_title']; ?></h1>
      </div>
        <!-- project 1 -->
      <?php
        $args = array(
          'type' => 'post',
          'posts_per_page' => 4,
        );
        $lastblog = new WP_Query($args);
      ?>
      <?php if($lastblog->have_posts()) : ?>
        <?php while($lastblog->have_posts()) : $lastblog->the_post(); ?>
          <div class="columns">
            <div class="project">
              <div class="left-part-img">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="right-part-content">
                <h3 class="section-small-heading">2010</h3>
                <a href="<?php the_permalink(); ?>" >
                  <h1 class="section-heading"><?php the_title();?></h1>
                </a>
                <?php the_excerpt()?>
                <div class="project-btn-left">
                  <a href="<?php the_permalink(); ?>">Read more
                    <span class="right-arrow"></span>
                  </a>
              </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
<?php get_footer(); ?>
