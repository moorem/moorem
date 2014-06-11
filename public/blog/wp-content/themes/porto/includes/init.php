<?php

/**
 * Init Theme Related Settings
 */

/** Internal Settings **/
require_once 'version.php';

/**
 * Required and Recommended Plugins
 */
add_action( 'tgmpa_register', 'spyropress_register_plugins' );
function spyropress_register_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // MP6
        array(
            'name'                  => 'WP-Admin Metro Skin',
            'slug'                  => 'mp6',
            'required'              => false
        ),

        // Wordpress SEO
        array(
            'name'      => 'WordPress SEO by Yoast',
            'slug'      => 'wordpress-seo',
            'required'  => false,
        ),

        // Contact Form 7
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
        
        // Revolution slider
        array(
            'name'      => 'Revolution Slider',
            'slug'      => 'revslider',
            'required'  => true,
            'source'    => get_template_directory() . '/includes/plugins/revslider.zip'
        ),
        
        // Revolution slider
        array(
            'name'      => 'Breadcrumb NavXT',
            'slug'      => 'breadcrumb-navxt',
            'required'  => true,
            'source'    => get_template_directory() . '/includes/plugins/breadcrumb-navxt.zip'
        ),
    );

    tgmpa( $plugins );
}

add_filter( 'builder_include_modules', 'spyropress_builder_modules' );
function spyropress_builder_modules( $modules ) {
    
    $path = dirname(__FILE__) . '/builder_modules/';
    
    $modules[] = 'modules/accordion/accordion.php';
    $modules[] = 'modules/blog/blog.php';
    $modules[] = 'modules/call-action/call-action.php';
    $modules[] = 'modules/carousel/carousel.php';
    $modules[] = 'modules/divider/divider.php';
    $modules[] = 'modules/feature-list/feature-list.php';
    $modules[] = 'modules/flickr-feed/flickr.php';
    $modules[] = 'modules/gmap/gmap.php';
    $modules[] = 'modules/heading/heading.php';
    $modules[] = 'modules/home-concept/home-concept.php';
    $modules[] = 'modules/html/html.php';
    $modules[] = 'modules/icon-list/icon-list.php';
    $modules[] = 'modules/our-clients/clients.php';
    $modules[] = 'modules/parallax/parallax.php';
    $modules[] = 'modules/recent-posts/recent-posts.php';
    $modules[] = 'modules/sidebar/sidebar.php';
    $modules[] = 'modules/sitemap/sitemap.php';
    $modules[] = 'modules/tabs/tabs.php';
    $modules[] = 'modules/teaser-content/teaser-content.php';
    $modules[] = 'modules/timeline/timeline.php';
    $modules[] = 'modules/toggle/toggle.php';
    
    return $modules;
}
?>