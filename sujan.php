<?php 


/*
Plugin Name: scroll to top plugin 
Plugin URI: http://softtech-it.com 
Author: sujan 
Author URI: http://mtmsujan.com 
Version: 1.0
Description: simple scroll to top plugin
*/



add_action('wp_enqueue_scripts', 'scroll_font_awesome');
function scroll_font_awesome(){
	wp_enqueue_style('font-awesome', plugins_url('css/font-awesome.min.css', __FILE__));

	wp_enqueue_style('custom', plugins_url('css/custom.css', __FILE__));


	wp_enqueue_script('scrolltotop', plugins_url('js/scrolltotop.js', __FILE__), array('jquery'));


}


function scrolltotop(){
	

	echo '<div class="scrolltotop"><a href="#"><i class="fa fa-chevron-up"></i></a></div>';


	

}

add_action('wp_footer', 'scrolltotop');