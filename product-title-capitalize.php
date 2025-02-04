<?php
/**
 * Plugin Name:       Product Title Capitalize
 * Plugin URI:        https://github.com/
 * Description:       A lightweight plugin to format WooCommerce product titles to title case on single product pages.
 * Version:           1.0.0
 * Requires at least: 6.5
 * Requires PHP:      7.2
 * Author:            jalal02
 * Author URI:        https://jalal.blog/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       product-title-capitalize
 * Domain Path:       /languages
 * Requires Plugins:  woocommerce
 *
 */

/**
 * Product Title Capitalize is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Product Title Capitalize is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with  Product Title Capitalize. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/**
 * Main Functionality: Capitalize WooCommerce product titles.
 *
 * @param string $post_title The title of the post.
 * @param int    $post_id    The ID of the post.
 * @return string            Modified post title.
 */
function skptc_capitalize_single_product_title( $post_title, $post_id ) {
    if ( ! is_admin() && 'product' === get_post_type( $post_id ) ) {
        $post_title = ucwords( strtolower( $post_title ) );
    }
    return $post_title;
}
add_filter( 'the_title', 'skptc_capitalize_single_product_title', 9999, 2 );
