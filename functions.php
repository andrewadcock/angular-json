<?php
/*
 * Theme functions
 */

function angjs_scripts()
{

    // Angular.js Core
    wp_enqueue_script(
        'angularjs',
        get_stylesheet_directory_uri() . '/bower_components/angular/angular.min.js'
    );

    // URL Redirects for Angular
    wp_enqueue_script(
        'angularjs-route',
        get_stylesheet_directory_uri() . '/bower_components/angular-route/angular-route.min.js'
    );

    // Sanitize content before displaying as HTML
    wp_register_script(
        'angularjs-sanitize',
        get_stylesheet_directory_uri() . '/bower_components/angular-sanitize/angular-sanitize.min.js'
    );

    wp_enqueue_script(
        'theme-scripts',
        get_stylesheet_directory_uri() . '/assets/js/scripts.js',
        array( 'angularjs', 'angularjs-route', 'angularjs-sanitize' )
    );



    wp_localize_script(
        'theme-scripts',
        'themeLocalized',
        array(
            'partials' => trailingslashit( get_template_directory_uri() ) . 'partials/'
        )
    );
}

add_action('wp_enqueue_scripts', 'angjs_scripts');