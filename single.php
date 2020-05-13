<?php

get_header();

    $shared = null;
    $shared = $_GET['shared'];
    $lang = substr(explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE'])[0], 0, 2);
?>
	<section class="single-content">
        <div class="post-thumbnail-content">
	        <?php the_post_thumbnail(); ?>
        </div>
        <div class="container">
            <div class="single-box">
                <?php
                if(have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }?>
            </div>
        </div>
        <div class="container">
            <div class="share-buttons">
                <?php if($lang == 'en') { ?>
                    <a target="popup"
                       class="facebook-button"
                       href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola"
                       onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola','popup','width=600,height=600')";
                    >Share on Facebook</a>
                <?php } else { ?>
                    <a target="popup"
                       class="facebook-button"
                       href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola"
                       onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola','popup','width=600,height=600')";
                    >Comparte en Facebook</a>
                <?php } ?>
            </div>
        </div>
	</section>

<?php if($shared == 'true') { ?>
    <div class="disclaimer">
        <div class="disclaimer-content">
            <button class="disclaimer-close">
                <img src="<?php bloginfo('template_url');?>/assets/images/button.png" class="close" alt="">
            </button>
            <img src="<?php bloginfo('template_url');?>/assets/images/shared.jpg" alt="">
            <div class="text-disclaimer">
                <?php if($lang == 'en') { ?>
                    <h1>+500 activities</h1>
                    <h2>especified for your child</h2>
                    <span>Get started now </span><strong>FREE</strong><br>
                    <a href="https://m.me/afinidata?ref=shared_activity">Click Here</a>
                <?php } else { ?>
                    <h1>+500 actividades</h1>
                    <h2>específicas para tu peque</h2>
                    <span>Comienza ahora totalmente </span><strong>GRATIS</strong><br>
                    <a href="https://m.me/afinidata?ref=shared_activity">Click Aquí</a>
                <?php } ?>
                    
            </div>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>