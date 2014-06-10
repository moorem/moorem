<?php

// Setup Instance for view
$instance = spyropress_clean_array( $instance );
$instance['row'] = false;

// title
if ( $instance['title'] ) echo '<h2>' . $instance['title'] . '</h2>';

// filter
$filter = isset( $instance['filters'] );
if( $filter ) {
    $terms = get_terms( 'portfolio_category' );
    if( !empty( $terms ) && !is_wp_error( $terms ) ) {
        wp_enqueue_script( 'jquery-isotope' );
        
        echo '<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter"><li data-option-value="*" class="active"><a href="#">Show All</a></li>';
        
        foreach( $terms as $item )
            echo '<li data-option-value=".' . $item->slug . '"><a href="#">' . $item->name . '</a></li>';
        
        echo '</ul><hr />';
    }
}

echo '<div class="row"><ul class="portfolio-list sort-destination" data-sort-id="portfolio">';
    
    // output content
    echo $this->query( $instance, '{content}' );

echo '</ul></div>';
?>