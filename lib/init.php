<?php

function jumpstart_setup() {
	// Make theme available for translation
	load_theme_textdomain('jumpstart', get_template_directory() . '/lang');

	// Register wp_nav_menu() menus
	// http://codex.wordpress.org/Function_Reference/register_nav_menus
	register_nav_menus(array(
		'primary_navigation' => __('Primary Navigation', 'jumpstart')
	));

	// Add post thumbnails
	// http://codex.wordpress.org/Post_Thumbnails
	// http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
	// http://codex.wordpress.org/Function_Reference/add_image_size
	add_theme_support('post-thumbnails');

	// Add post formats
	// http://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

	// Tell the TinyMCE editor to use a custom stylesheet
	add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'jumpstart_setup');

function jumpstart_widgets_init() {
	register_sidebar(array(
		'name' => __('Primary', 'jumpstart'),
		'id' => 'sidebar-primary',
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'jumpstart_widgets_init');