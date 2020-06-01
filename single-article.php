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
				if($licence == 'premium' || $licence == 'patrocinado' || $licence == 'trial_premium' || is_user_logged_in()) {
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
        <?php if(!is_user_logged_in()) { ?>
	        <?php if($licence != 'premium' && $licence != 'patrocinado' && $licence != 'trial_premium' ) { ?>
		        <div class="locked">
			        <div class="container">
				        <?php if($lang == 'en' || $lang == 'ar') {
					        echo '<strong>¡Continue reading!</strong><span>Switch to <b>Afini Premium</b> today.</span>';
				        } else {
					        echo '<strong>¡Continua leyendo!</strong><span>Cámbiate a <b>Afini Premium</b> hoy.</span>';
				        }
				        ?>
				        <?php if($lang == 'en') {
					        echo '<a href="https://afini.org/reservarkits/membresiaafinimensual-blts6">Click Here</a>';
				        } else {
					        echo '<a href="https://afini.org/reservarkits/membresiaafinimensual-blts6">Click Aquí</a>';
				        }
				        ?>
			        </div>
		        </div>
	        <?php }?>
        <?php } ?>
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