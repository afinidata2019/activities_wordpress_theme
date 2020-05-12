<?php

get_header();

    $shared = null;
    $shared = $_GET['shared'];
    $lang = substr(explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE'])[0], 0, 2);
?>
	<section class="single-content">
        <?php if($shared == 'true') { ?>
            <div class="container">
                <div class="disclaimer">
                    <span>
                        <?php
                            if($lang == 'en') {
                                echo 'This activity may not be suitable for your baby, if you want personalized activities subscribe ';
                            } else {
                                echo 'Esta actividad podría no ser adecuada para tu bebé, si quieres actividades personalizadas suscríbete ';
                            }
                        ?>
                    </span>
                    <a href="https://m.me/afinidata?ref=shared_activity">
	                    <?php
	                    if($lang == 'en') {
		                    echo 'here.';
	                    } else {
		                    echo 'aquí.';
	                    }
	                    ?>
                    </a>
                </div>
            </div>
        <?php } ?>
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
                <a target="popup"
                   href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=hola"
                   onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=hola','popup','width=600,height=600')";
                >share</a>
            </div>
        </div>
	</section>
<?php get_footer(); ?>