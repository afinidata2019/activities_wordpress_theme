<?php get_header('faq'); ?>
  <div class="container">
    <?php
      $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
      $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
      $args = array(
          'post_type' => 'faq',
          'posts_per_page' => 20,
          'status' => 'publish',
          'paged' => $paged
      );
      $faqs = get_posts(array(
          'post_type' => 'faq',
          'numberposts' => 20,
          'tax_query' => array(
              array(
                  'taxonomy' => get_query_var('taxonomy'),
                  'field' => 'term_id',
                  'terms' => $term->term_id,
                  'include_children' => false
              )
          )
      ));
    ?>
      <ul>
	      <?php foreach ($faqs as $faq) { ?>
		      <li><a href="<?php the_permalink($faq->ID); ?>"><?php echo $faq->post_title; ?></a></li>
	      <?php } ?>
      </ul>

  </div>
<?php get_footer(); ?>