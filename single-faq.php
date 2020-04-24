<?php get_header('faq'); ?>

	<section class="faq-single-content">
        <div class="post-thumbnail-content">
	        <?php the_post_thumbnail(); ?>
        </div>
        <div class="container">
        <h2><?php the_title(); ?></h2>
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