<?php

function add_faq_size_image() {
	add_image_size( 'faq-size', 1310,384, true);
}

add_action('init', 'add_faq_size_image');