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

    // Highlight JS for code highlighting
    wp_enqueue_script(
      'highlightjs',
        '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/highlight.min.js'
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

    wp_enqueue_style(
        'highlighjs-style',
        '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/styles/default.min.css'
    );

    wp_enqueue_style(
        'theme-styles',
        get_stylesheet_directory_uri() . '/assets/css/style.css'
    );


}

add_action('wp_enqueue_scripts', 'angjs_scripts');


// HLJS / Pre / Code shortcode
// CURRENTLY NOT WORKING
function hljs_pre_code_shortcode($atts, $content = "") {
    extract( shortcode_atts( array(
        'tag' =>"",
        'attr'=>""
    ), $atts ) );

    return "<div " . $tag . " hljs class='php'><pre><code>" . $content . "</code></pre>";
}

add_shortcode('hljs', 'hljs_pre_code_shortcode');

