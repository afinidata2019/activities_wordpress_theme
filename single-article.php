<?php

get_header();

$licence = null; //premium, patrocinado, trial_premium, free
$licence = $_GET['licence'];
$lang = substr(explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE'])[0], 0, 2);
?>
	<section class="single-content">
		<div class="post-thumbnail-content">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="container">
			<div class="single-box">
				<?php
				if($licence == 'premium' || $licence == 'patrocinado' || $licence == 'trial_premium') {
					if(have_posts()) {
						while (have_posts()) {
							the_post();
							the_content();
						} }
				} else {
					if(have_posts()) {
						while (have_posts()) {
							the_post();
							the_excerpt();
						} }
				} ?>
			</div>
		</div>
		<?php if($licence != 'premium' && $licence != 'patrocinado' && $licence != 'trial_premium') { ?>
			<div class="container" style="text-align: center; margin-top: 2em;">
				<?php if($lang == 'en') {
					echo '<span>By being a premium member, you get access to this and more items, compra tu paquete </span>';
				} else {
					echo '<span>Al ser parte de premium, obtienes acceso a este y más artículos, get the complete access </span>';
				}
				?>
				<?php if($lang == 'en') {
					echo '<a href="https://afini.org/reservarkits">here.</a>';
				} else {
					echo '<a href="https://afini.org/reservarkits">aquí.</a>';
				}
				?>
			</div>
		<?php }?>
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