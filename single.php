<?php get_header(); ?>
	<section class="single-content">
        <div class="post-thumbnail-content">
	        <?php the_post_thumbnail(); ?>
        </div>
        <div class="container">
            <h1 class="post-title"><?php the_title(); ?></h1>
	        <?php
	        if(have_posts()) {
		        while (have_posts()) {
			        the_post();
			        the_content();
		        }
	        }?>
        </div>
	</section>
<?php get_footer(); ?>