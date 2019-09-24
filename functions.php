<?php
function basetheme_enqueue_scripts(){
    wp_enqueue_style('basetheme-fonts', '//fonts.googleapis.com/css?family=Lato:400,700&display=swap', null, time(), 'all');
    wp_enqueue_style('basetheme-style', get_template_directory_uri() . '/assets/css/basetheme-style.css', array('dashicons'), time(), 'all');
    wp_enqueue_script('basetheme-scripts', get_template_directory_uri() . '/assets/js/basetheme-scripts.js', null, time(), true);
}
add_action('wp_enqueue_scripts', 'basetheme_enqueue_scripts');


function basetheme_theme_features(){
    $post_format = array( 'aside', 'gallery', 'link', 'video', 'audio', 'quote' );
    add_theme_support( 'post-formats',  $post_format);
    add_theme_support('post-thumbnails');
    $nav_menus = array(
        'header-menu' => __('Primary Header Menu', 'basetheme'),
        'footer-menu' => __('Secondary Footer Menu', 'basetheme'),
    );
    register_nav_menus($nav_menus);
}
add_action('after_setup_theme', 'basetheme_theme_features');


function basetheme_content_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );
	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

function basetheme_get_embedded_media( $type = array() ){
	$content = do_shortcode( apply_filters( 'the_content', get_the_content() ) );
	$embed = get_media_embedded_in_content( $content, $type );
	
	if( in_array( 'audio' , $type) ):
		$output = str_replace( '?visual=true', '?visual=false', $embed[0] );
	else:
		$output = $embed[0];
	endif;
	
	return $output;
}


function get_post_parent(){
    global $post;
    if($post->post_parent){
        $children = get_post_ancestors( $post->ID );
        return children[0];
    }

    return $post->ID;
}