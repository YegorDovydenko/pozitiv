<?php
include('settings.php');
add_theme_support( 'woocommerce' );
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
	register_nav_menu('header-menu','Header Menu');
	add_theme_support( 'post-thumbnails' );
	add_image_size('home-small-box',565,365,false);
	add_image_size('st-blog-image',1180,500,false);
}

function ds_get_excerpt($num_chars) {
    $temp_str = substr(strip_tags(strip_shortcodes(get_the_content())),0,$num_chars);
    $temp_parts = explode(" ",$temp_str);
    $temp_parts[(count($temp_parts) - 1)] = '';
    
    if(strlen(strip_tags(strip_shortcodes(get_the_content()))) > $num_chars)
      return implode(" ",$temp_parts) . '...';
    else
      return implode(" ",$temp_parts);
}
if ( function_exists('register_sidebar') ) {
        register_sidebar(array(
                'name'=>'No Sidebar',
		'before_widget' => '<div class="side_box">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="side_title">',
		'after_title' => '</h3>',
	));
         
}

?>