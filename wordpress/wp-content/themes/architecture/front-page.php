<?php get_header(); ?>
  <section class="hero" style="background: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="row">
      <div class="overlay"></div>
      <div class="hero-wrapper flex-center">
        <div class="hero-content">
          <h3 class="small-heading">Cacak, Serbia</h3>
          <h1 class="main-heading">Awesome Design for the Vorokhta Hub</h1>
          <p>
            The main objective of the project – transformation of Vorokhta City in innovative <br> SMART CITY (village) and tourist center.
          </p>
          <div class="hero-btn">
            <a href="http://architecture/?page_id=45">explore it</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="row">
      <div class="columns">
        <div class="left-part-about flex-center">
          <div class="about-title">
            <h1>20</h1>
            <p>years of experience</p>
          </div>
        </div>
        <div class="right-part-about">
          <h2 class="section-small-heading">About Us</h2>
          <h1 class="section-heading">
            Break out of your routine with
            a global perspective.
          </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quod ratione consequatur explicabo corrupti quisquam tempore asperiores iusto, fuga rerum ducimus veritatis id eaque assumenda architecto enim, repellat ex alias.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, quisquam ipsum! Eveniet eius error libero possimus, quos labore soluta et sunt fuga adipisci perspiciatis aliquid fugit. Asperiores vero ab repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique cumque maiores sed impedit facere, voluptates iste, consectetur enim magnam qui. Aut culpa dolorem in ipsum labore ea libero optio.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="projects only-lg">
    <div class="row">
      <div class="projects-title">
        <h2 class="section-small-heading">Last Projects</h2>
        <h1 class="section-heading">Make it with passion.</h1>
      </div>
        <!-- project 1 -->
      <div class="columns">
        <div class="project">
          <div class="left-part-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/hero.jpg" alt="">
          </div>
          <div class="right-part-content">
            <h3>2010</h3>
            <a href="" class="right-title">
              <h1>Poolscape Villa</h1>
            </a>
            <p>
              The Seascape Villas project constitutes one of the first urban interventions in this very unique context, a landscape dominated by mountains and sea.
            </p>
            <div class="project-btn-left">
              <a href="">read more
                <span class="right-arrow"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
        <!-- project 2 -->
      <div class="columns">
        <div class="project">
        <div class="left-part-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/project2.jpg" alt="">
          </div>
          <div class="right-part-content">
            <h3>2010</h3>
            <a href="" class="left-title">
              <h1>Poolscape Villa</h1>
            </a>
            <p>
              The Seascape Villas project constitutes one of the first urban interventions in this very unique context, a landscape dominated by mountains and sea.
            </p>
            <div class="project-btn-left">
              <a href="">read more
                <span class="right-arrow"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
        <!-- project 3 -->
      <div class="columns">
        <div class="project">
          <div class="left-part-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/project3.jpg" alt="">
          </div>
          <div class="right-part-content">
            <h3>2010</h3>
            <a href="" class="right-title">
              <h1>Poolscape Villa</h1>
            </a>
            <p>
              The Seascape Villas project constitutes one of the first urban interventions in this very unique context, a landscape dominated by mountains and sea.
            </p>
            <div class="project-btn-left">
              <a href="">read more
                <span class="right-arrow"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
