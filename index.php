<?php
/*
Plugin Name: ScrollToLast
Description: Scrolls window to last visit's position. Plugin for dem-mihailov.ru
Version: 1.0
Author: dimas
Author URI: http://odminstudios.ru/
*/
function os_scro_styles_and_scripts() {
	$ver=1;
	if(!is_admin() && is_single() ){
		wp_enqueue_style( 'os_scro_style', plugins_url( '/style.css' , __FILE__ ), false, $ver );
		wp_enqueue_script( 'jqcookie', plugins_url( '/jquery.cookie.js' , __FILE__ ), array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'os_scro_script', plugins_url( '/script.js' , __FILE__ ), array( 'jquery', 'jqcookie' ), $ver, true );
	}
}
add_action( 'wp_enqueue_scripts', 'os_scro_styles_and_scripts' );
