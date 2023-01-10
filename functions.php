<?php

function veteri_script_enqueue(){	
	//swiper
	wp_enqueue_style('swiper_css', get_template_directory_uri() . '/css/swiper.min.css');
  //boodstrap
	wp_enqueue_style('boodstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	//style
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/poshtrash.css');

	//tooltip
  wp_enqueue_style( 'tooltipstyle', get_template_directory_uri() . '/css/tooltip.css');

  
  //animation
	wp_enqueue_style('animation', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
  

	//Scripts  
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'veteri_script_enqueue');