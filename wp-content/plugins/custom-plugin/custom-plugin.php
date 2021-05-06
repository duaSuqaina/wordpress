<?php
/**
 * Plugin Name: Movies
 * Version: 1.0
 * Author: Duaa
 */

add_action( 'init', 'custom_post_type' );

function custom_post_type ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}

?>