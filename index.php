<?php get_header(); ?>
<main>
  <div class="container-full">
    <button id="scrollUp" class="scroll-up">Top</button>
    <div class='some-page-wrapper'>
      <div id="work" class='row'>
        <?php 
          $args = array(
              'post-type' => 'tile',
              'post_per_page' => 10
          );
          $loop = new WP_Query( $args );
          while ($loop->have_posts() ) : $loop->the_post();

        ?>
        <div class="content-tile col-md-4">
          <div class="content-tile-inner">

            <div class="content-tile-front">
                <img src="<?php the_field('tile_image');?>" alt="Avatar" class="content-tile__image">
            </div>
            <div class="content-tile-back">
                <img src="<?php the_field('tile_image');?>" alt="Avatar" class="content-tile__image">
                <div class="overlay"></div>
                <div class="middle">
                    <a class="text" href=<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <div class="container">
  <h1>TIMELINE</h1>
  <div id="timeline" class="timeline">
          <div class="container left">
            <div class="content">
              <h2>2018</h2>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="container right">
            <div class="content">
              <h2>2016</h2>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="container left">
            <div class="content">
              <h2>2014</h2>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
  </div>
  </div>
  <div class="contact">
    <div class="contact__content">
      <h1 id="about">ABOUT ME</h1>
      <p class="AboutText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
      </p>
    </div>
    <img src="<?php echo get_template_directory_uri() .  '/images/demo/charts-computer-data-669615.jpg'; ?>" alt="Avatar" class="contact__foto">
    <div class="contact__background">
    </div>
  </div>
</main>
<?php get_footer(); ?>
      