<?php
/*
* Plugin Name: Kein Produkt-Zoom Woo
* Plugin URI: https://sahu.media
* Description: Kostenloses Plugin zum Deaktivieren des Zoom in der Produktansicht.
* Version: 1.1
* Author: SAHU MEDIA ®
* Author URI: https://sahu.media
* License: GPL2
*
* @package sahu_no_zoom
* @copyright Copyright (c) 2020-2023, SAHU MEDIA®
*
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function sahu_no_zoom() {
	remove_theme_support( 'wc-product-gallery-zoom' );
}
add_filter( 'woocommerce_single_product_zoom_enabled', 'sahu_no_zoom' );

//
?>
