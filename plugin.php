<?php
/*
Plugin Name: REST API Taxonomy
Version: 1.0
Description: Exposes all taxonomies in the WP REST API.
Author: Nick Breen
Author URI: http://foobar.net.nz
Plugin URI: https://github.com/nickbreen/wordpress-plugin-rest-api-taxonomy
Text Domain: rest-api-taxonomy
Domain Path: /languages
*/

/* Expose all taxonomies in the WP REST API. */
add_action('init', function () {
  $taxonomies = get_taxonomies( '', 'objects' );
  foreach( $taxonomies as $taxonomy ) {
      $taxonomy->show_in_rest = true;
  }
}, 30);
