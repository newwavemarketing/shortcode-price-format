<?php
/*
Plugin Name: Price Formatter
Plugin URI: https://robertwent.com/
Description: A shortcode to format prices. [price-format field="price" prefix="€" suffix="" decimals="0" default="Price on request"]
Version: 1.0
Author: Robert Went
Author URI: https://robertwent.com/
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_shortcode( 'price-format', 'price_format_shortcode' );

function price_format_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'field' => '',
        'prefix' => '',
        'suffix' => '',
        'decimals' => 0,
        'default' => '',
    ), $atts );

    $price = get_post_meta( get_the_ID(), $atts['field'], true );
    if ( empty( $price ) ) {
        return $atts['default'];
    }
    $formatted_price = number_format( $price, $atts['decimals'] );

    return $atts['prefix'] . $formatted_price . $atts['suffix'];
}
