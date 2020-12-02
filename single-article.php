<?php

get_header();

$license = null; //premium, patrocinado, trial_premium, free
$license = $_GET['license'];
$lang = substr(explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE'])[0], 0, 2);
?>
	<section class="single-content">
		<div class="post-thumbnail-content">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="container">
			<div class="single-box">
				<?php
				#if($license == 'premium' || $license == 'patrocinado' || $license == 'trial_premium' || is_user_logged_in()) {
					if(have_posts()) {
						while (have_posts()) {
							the_post();
							the_content();
						} }
				#} else {
				#	if(have_posts()) {
				#		while (have_posts()) {
				#			the_post();
				#			the_excerpt();
				#		} }
				#} ?>
			</div>
		</div>
		<!--
		<div class="container">
			<div class="share-buttons">
				<a target="popup"
				   href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=hola"
				   onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=hola','popup','width=600,height=600')";
				>share</a>
			</div>
		</div> -->
	</section>
<?php get_footer(); ?>