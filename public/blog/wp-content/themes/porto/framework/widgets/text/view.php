<?php

echo $before_widget;
if ( $title != '' ) echo $before_title . $title . $after_title;

if( $photo ) {
    echo '<a href="index.html" class="logo pull-bottom">';
        echo '<img src="' . $photo . '" alt="" />';
    echo '</a>';
}
echo '<div class="text">' . ( isset($instance['filter'] ) ? wpautop( $content ) : $content ) . '</div><div class="clear"></div>';
echo $after_widget;

?>