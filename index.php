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
              <h2>2018-2019 okt-mrt</h2>
              <p>IBO contract bij Hellogoodbye in Brugge, waar ik mijn 1ste werkervaring binnen het Front-end development heb opgedaan.
              Hier heb ik nieuwe vaardigheden bijgeleerd zoals sass, wordpress & laravel. Tijdens mijn IBO contract heb ik ook een avondopleiding programmeren gevold.
              En hier heb ik .NET en Javascript bijgeleerd.</p>
            </div>
          </div>
          <div class="container right">
            <div class="content">
              <h2>2016-2018</h2>
              <p>2 jarige opleiding HBO5 MIT, waar ik hoofdzakelijk websites heb leren maken en HTML5, CSS, Javascript en PHP bijgeleerd heb.
              En een leuke stage waar ik vooral video en grafisch werk gedaan heb.</p>
            </div>
          </div>
          <div class="container left">
            <div class="content">
              <h2>2015-2016</h2>
              <p>1 jarige opleiding binnen Syntra West Multimedia Developer, waar ik zowel websites als grafisch en video's werken heb gemaakt. 
              HTML5, CSS3, Drupal, Illustrator, Photoshop en premiere zijn de vaardigheden die ik hier opgedaan heb.</p>
            </div>
          </div>
          <div class="container right">
            <div class="content">
              <h2>2011-2014</h2>
              <p>In mijn laatste graad en 7de specialisatie heb ik Publiciteit en illustratie gedaan, en hier heb ik gewerkt met Photoshop, Illustrator en Indesign.</p>
            </div>
          </div>
  </div>
  </div>
  <div class="contact">
    <div class="contact__content">
      <h1 id="about">ABOUT ME</h1>
      <p class="AboutText">Ik ben een moderne man en een dierenvriend. Samen met mijn vriendin hebben we 2 katten. Ik kijk graag een serie, film of anime.
      Af en toe een cinemabezoekje doe ik ook graag, of een pintje met maten. Een reis is ook altijd mooi meegenomen, ik heb altijd een top 3.
      Het is belangrijk voor mij om mezelf te blijven verbeteren. Dat kan gaan over mijn programmeertalen onderhouden en bijschaven, nieuwe ontwikkelingen 
      binnen de IT wereld of bijvoorbeeld leren koken. Ik ben een gezellige persoon die streeft om de beste versie van mezelf te zijn, zowel prive als op de werkvloer.
      </p>
    </div>
    <img src="<?php echo get_template_directory_uri() .  '/images/demo/charts-computer-data-669615.jpg'; ?>" alt="Avatar" class="contact__foto">
    <div class="contact__background">
    </div>
  </div>
</main>
<?php get_footer(); ?>
      