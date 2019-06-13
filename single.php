<?php get_header(); ?>
<main>
  <button id="scrollUp" class="scroll-up">Top</button>
  <div class="row">
    <div class="col-sm-12">

      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content-single', get_post_format() );
        endwhile; endif;
      ?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</main>
<?php get_footer(); ?>
      