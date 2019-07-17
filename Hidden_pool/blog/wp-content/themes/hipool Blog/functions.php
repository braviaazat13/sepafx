<?php 
function my_career_scripts() {
	wp_enqueue_style( 'blog-style', get_stylesheet_uri() );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Ubuntu:300,300i,700i,700&amp;subset=cyrillic', false );
  wp_enqueue_script( 'blog-slick', get_template_directory_uri() . '/src/js/slick/slick.min.js', array(), '20151215', true );
  wp_enqueue_script( 'blog-main', get_template_directory_uri() . '/index.js', array('jquery'), microtime(), true );
}
add_action( 'wp_enqueue_scripts', 'my_career_scripts' );




function blog_setup() { 
  add_theme_support( 'post-thumbnails' );
  add_theme_support('title-tag');
  // add_image_size('custom-size', 780, 9999);
  // add_filter( 'image_size_names_choose', 'my_custom_sizes' );
  // function my_custom_sizes( $sizes ) {
  //     return array_merge( $sizes, array(
  //       'custom-size' => 'Дополнительный',
  //     ) );
  //   };
}
add_action( 'after_setup_theme', 'blog_setup' );
  // Disabe emoji  
	// remove all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
    
  // Add category metabox to page
  register_taxonomy_for_object_type('category', 'page');


//delete tinyMCE table styles

