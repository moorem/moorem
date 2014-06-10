<?php

if( empty( $socials ) ) return;

echo $before_widget;

    if ( $title != '' ) echo $before_title . $title . $after_title;
    
    echo '<ul class="social-icons">';
        foreach( $socials as $social )
            echo '<li class="' . $social['network'] . '"><a href="' . $social['url'] . '" target="_blank" title="' . ucwords( $social['network'] ) . '">' . ucwords( $social['network'] ) . '</a></li> ';
    echo '</ul>';

echo $after_widget;

?>