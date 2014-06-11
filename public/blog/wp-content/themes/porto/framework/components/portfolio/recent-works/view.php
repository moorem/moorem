<?php

// Setup Instance for view
$instance = spyropress_clean_array( $instance );

// tempalte
$tmpl = '{content}{pagination}';

echo $before_widget;
    
    if ( $instance['title'] ) echo $before_title . $instance['title'] . $after_title;
    
    echo '<ul class="unstyled recent-work">';
        
        // output content
        echo $this->query( $instance, $tmpl );

    echo '</ul>';
    
    if( $instance['url_enable'] )
        echo '<a href="' . home_url( '/portfolio/' ) . '" class="btn-flat pull-right btn-mini view-more-recent-work">' . $instance['url_text'] . ' <i class="icon-arrow-right"></i></a>';
    
echo $after_widget;
?>