<?php get_header('faq'); ?>
	<div class="faq-banner">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/background-faq.jpg" class="faq-banner-background">
		<?php get_search_form(); ?>
	</div>
	<div class="search-results">
		<div class="container">
			<h2 class="title">Resultados de: "<?php the_search_query(); ?>"</h2>
			<div class="result-list faqtype-list-content">
				<?php if (have_posts()): ?>
					<ul>
						<?php while (have_posts()): the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
                <div class="navigation page-navigation">
                    <p><?php posts_nav_link(); ?></p>
                </div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>