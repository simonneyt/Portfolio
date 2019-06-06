<div class="content-tile col-md-4">
    <div class="content-tile-inner">
    <?php 
        $args = array(
            'post-type' => 'tile',
            'post_per_page' => 10
        );
        $loop = new WP_Query( $args );
        while ($loop -> have_posts() ) : $loop-> the_post();

    ?>
        <div class="content-tile-front">
            <img src="<?php the_field('tile_image');?>" alt="Avatar" class="content-tile__image">
        </div>
        <div class="content-tile-back">
            <img src="<?php the_field('tile_image');?>" alt="Avatar" class="content-tile__image">
            <div class="overlay"></div>
            <div class="middle">
                <a class="text" href="<?php the_permalink(); ?>"><?php the_field('tile_title'); ?></a>
            </div>
        </div>
        <!-- <?php the_content(); ?> -->
        <?php endwhile; ?>
    </div>
</div>