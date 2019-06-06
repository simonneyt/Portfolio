<div class="post">
    <img src="<?php the_field('tile_image');?>" alt="Avatar" class="post__image">
    <h2 class="post-title"><?php the_field('tile_title'); ?></h2>
    <p class="post-content"><?php the_field('tile_content'); ?></p>
	<?php the_content(); ?>
</div><!-- /.blog-post -->