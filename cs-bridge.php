<?php
/*
Plugin Name: CS Bridge
Version: 0.1-alpha
Description: PLUGIN DESCRIPTION HERE
Author: YOUR NAME HERE
Author URI: YOUR SITE HERE
Plugin URI: PLUGIN SITE HERE
Text Domain: cs-bridge
Domain Path: /languages
*/

add_action( 'rest_api_init', function () {

    register_rest_route( 'cs-bridge/v1', '/taxnonomy/(?P<name>\w+)', array(
        'methods' => 'GET',
        'callback' => function (WP_REST_Request $request) {
              if (isset($request['name']))
                return get_taxonomy($request['name']);
              return get_taxonomies();
            },
        'args' => array(
            'name' => array(
                'validate_callback' => 'taxonomy_exists'
            ),
        ),
    ) );

} );
