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
<section class="service-items">
  <div class="row">
    <div class="service-item">
      <h1>Architectural planning</h1>
      <p>
        The architect usually begins to work when the site and the type and cost of a building have been determined.
      </p>
      <p>
        The site involves the varying behaviour of the natural environment that must be adjusted to the unvarying physical needs of human beings; the type is the generalized form established by society that must be adjusted to the special use for which the building is required; the cost implies the economics of land, labour, and materials that must be adjusted to suit a particular sum.
      </p>
      <p>
        Thus, planning is the process of particularizing and, ultimately, of harmonizing the demands of environment, use, and economy. This process has a cultural as well as a utilitarian value, for in creating a plan for any social activity the architect inevitably influences the way in which that activity is performed.
      </p>
      <div class="service-images">
        <img src="<?php echo get_template_directory_uri();?>/assets/service-detail-1.jpg" alt="">
        <img src="<?php echo get_template_directory_uri();?>/assets/service-detail-2.jpg" alt="">
      </div>
    </div>
    <div class="service-item">
      <h1>Planning the environment</h1>
      <p>
        The natural environment is at once a hindrance and a help, and the architect seeks both to invite its aid and to repel its attacks. To make buildings habitable and comfortable, he must control the effects of heat, cold, light, air, moisture, and dryness and foresee destructive potentialities such as fire, earthquake, flood, and disease.
      </p>
      <p>
        The methods of controlling the environment considered here are only the practical aspects of planning. They are treated by the architect within the context of the expressive aspects. The placement and form of buildings in relation to their sites, the distribution of spaces within buildings, and other planning devices discussed below are fundamental elements in the aesthetics of architecture.
      </p>
    </div>
    <div class="service-item">
      <h1>Orientation</h1>
      <p>
        The arrangement of the axes of buildings and their parts is a device for controlling the effects of sun, wind, and rainfall. The sun is regular in its course; it favours the southern and neglects the northern exposures of buildings in the Northern Hemisphere, so that it may be captured for heat or evaded for coolness by turning the axis of a plan toward or away from it. Within buildings, the axis and placement of each space determines the amount of sun it receives. Orientation may control air for circulation and reduce the disadvantages of wind, rain, and snow, since in most climates the prevailing currents can be foreseen. The characteristics of the immediate environment also influence orientation: trees, land formations, and other buildings create shade and reduce or intensify wind, while bodies of water produce moisture and reflect the sun.
      </p>
    </div>
    <div class="service-btn">
      <a href="http://architecture/?page_id=42">start project</a>
    </div>
  </div>
</section>
<?php get_footer();?>
