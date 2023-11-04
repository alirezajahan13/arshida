<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

echo apply_filters(
	'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
	sprintf(
		'<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
		'<svg height="25" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m464.5 301.1 36.5-178H141.3l-12.5-59.2L20.4 11 11 29.7l99 47.8 50 238.8h289s28.5 17.9 17.5 40.5c-4.9 7-12.5 15.6-26.1 15.6H152.8V393h287.7c19.8 0 36.5-10.4 45.9-27 18.4-34.4-21.9-64.9-21.9-64.9zm-286.7-5.7-32.3-151.6H476l-31.3 151.6H177.8zm34.4 126.7c-21.9 0-39.6 17.6-39.6 39.4s17.7 39.4 39.6 39.4 39.6-17.6 39.6-39.4-17.7-39.4-39.6-39.4zm0 58.1c-10.4 0-18.8-8.3-18.8-18.7s8.3-18.7 18.8-18.7 18.8 8.3 18.8 18.7-8.4 18.7-18.8 18.7zm212.7-58.1c-21.9 0-39.6 17.6-39.6 39.4S403 501 424.9 501s40.7-17.6 39.6-39.4c0-21.8-17.7-39.5-39.6-39.5zm18.8 39.5c0 10.4-8.3 18.7-18.8 18.7s-18.8-8.3-18.8-18.7 8.3-18.7 18.8-18.7 19.8 8.3 18.8 18.7z"/></svg>'
	),
	$product,
	$args
);
