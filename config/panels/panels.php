<?php

function footer_customize_register( $wp_customize ) {
	$wp_customize->add_panel( 'activities_footer_options', array(
		'title' => __('Footer Options', 'activities'),
		'priority' => 160,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_section('footer_social_section' , array(
		'title' => __('Social', 'activities'),
		'panel' => 'activities_footer_options',
		'priority' => 2,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting('facebook_url', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting('instagram_url', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));


	$wp_customize->add_control('facebook_url', array(
		'label' => __('Facebook Link', 'activities'),
		'section' => 'footer_social_section',
		'priority' => 1,
		'type' => 'text',
	));

	$wp_customize->add_control('instagram_url', array(
		'label' => __('Instagram Link', 'activities'),
		'section' => 'footer_social_section',
		'priority' => 1,
		'type' => 'text',
	));

	$wp_customize->add_section('analytics_section' , array(
		'title' => 'Analytics',
		'panel' => 'activities_footer_options',
		'priority' => 4,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting('analytics', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('analytics', array(
		'label' => __('Analytics ID', 'activities'),
		'section' => 'analytics_section',
		'priority' => 1,
		'type' => 'text',
	));

	/* CORE URL  */

	$wp_customize->add_section('cm_section' , array(
		'title' => 'Core & CM',
		'panel' => 'activities_footer_options',
		'priority' => 4,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting('core_url', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('core_url', array(
		'label' => __('URL Core', 'activities'),
		'section' => 'cm_section',
		'priority' => 1,
		'type' => 'text',
	));

	$wp_customize->add_section('images_section' , array(
		'title' => __('Images', 'activities'),
		'panel' => 'activities_footer_options',
		'priority' => 3,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting('footer_logo', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
		'label' => __('Footer Logo'),
		'section'   => 'images_section'
	) ));

}
add_action( 'customize_register', 'footer_customize_register' );