<?php
/* Template Name: FAQS */

get_header('faq');

$terms = get_terms( array(
	'taxonomy' => 'faqtype',
	'hide_empty' => false,
) );
?>

<div class="page-title">
    <h2>Preguntas Frecuentes</h2>
</div>

<div class="faq-banner">
    <img src="<?php echo get_template_directory_uri()?>/assets/images/background-faq.jpg" class="faq-banner-background">
	<?php get_search_form(); ?>
</div>

<div class="container">
    <div class="faq-content">
        <?php if (have_posts()): while (have_posts()): the_post();
            the_content();
        endwhile; endif; ?>
    </div>
    <div class="faq-list">
        <ul>
            <?php foreach ($terms as $term) { ?>
                <li><a href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>

<?php get_footer(); ?>
