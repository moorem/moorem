<?php

// Setup Instance for view
$instance = spyropress_clean_array( $instance );
$instance['callback'] = array( $this, 'generate_item_carousel' );
$instance['row'] = false;

// tempalte
$tmpl = '{content}';
    
if ( $instance['title'] ) echo '<h1>' . $instance['title'] . '</h1>';

echo '<div class="row"><div class="flexslider flexslider-top-title flexslider-center-mobile unstyled" data-plugin-options=\'{"controlNav":false, "slideshow": false, "animationLoop": true, "animation":"slide", "maxVisibleItems": 4}\'><ul class="slides">';
    
    // output content
    echo $this->query( $instance, $tmpl );

echo '</ul></div></div>';
?>