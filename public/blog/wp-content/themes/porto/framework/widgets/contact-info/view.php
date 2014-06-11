<?php

echo $before_widget;

if ( '' != $title ) echo $before_title . $title . $after_title;
    
echo '<ul class="contact">';

    if ( $address )
        echo '<li><p><i class="icon-map-marker"></i> <strong>Address:</strong> ' . $address . '</p></li>';

    if ( $phone )
        echo '<li><p><i class="icon-phone"></i> <strong>Phone:</strong> ' . $phone . '</p></li>';
    
    if ( $email )
        echo '<li><p><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:' . $email . '">' . $email . '</a></p></li>';

echo '</ul>';

echo $after_widget;

?>