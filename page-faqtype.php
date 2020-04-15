<?php
/* Template Name: FAQS */

get_header('faq');

$terms = get_terms( array(
	'taxonomy' => 'faqtype',
	'hide_empty' => false,
) );
?>

<div class="container">
	<ul>
		<?php foreach ($terms as $term) { ?>
			<li><a href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a></li>
		<?php } ?>
	</ul>
</div>

<?php get_footer(); ?>
