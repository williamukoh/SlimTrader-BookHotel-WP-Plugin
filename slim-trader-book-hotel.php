<?php
/*
 * Plugin Name: Slim Trader Book Hotel
 * Version: 1.0
 * Description: Inserts a Book Hotel button on website
 * Author: William Ukoh
 * Author URI: http://www.twitter.com/williamukoh
 * Requires at least: 3.9
 * Tested up to: 3.9.1
 *
 * @package WordPress
 * @author William Ukoh
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Include plugin class files
require_once( 'includes/class-slim-trader-book-hotel.php' );
require_once( 'includes/class-slim-trader-book-hotel-settings.php' );

/**
 * Returns the main instance of Slim_Trader_Book_Hotel to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Slim_Trader_Book_Hotel
 */
function Slim_Trader_Book_Hotel () {
	$instance = Slim_Trader_Book_Hotel::instance( __FILE__, '1.0.0' );
	if( is_null( $instance->settings ) ) {
		$instance->settings = Slim_Trader_Book_Hotel_Settings::instance( $instance );
	}
	return $instance;
}

Slim_Trader_Book_Hotel();
