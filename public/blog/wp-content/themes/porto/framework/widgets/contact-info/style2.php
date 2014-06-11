<?php

echo $before_widget;

if ( '' != $title ) echo '<h5 class="short">' . $title . '</h5>';

if ( $phone )
    echo '<span class="phone">' . $phone . '</span>';

if ( $int_phone )
    echo '<p class="short">International: ' . $int_phone . '</p>';

if ( $fax )
    echo '<p class="short">Fax: ' . $fax . '</p>';

echo '<ul class="list icons unstyled pull-top">';
    if ( $address )
        echo '<li><i class="icon-map-marker"></i> <strong>Address:</strong> ' . $address . '</li>';
    
    if ( $email )
        echo '<li><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:' . $email . '">' . $email . '</a></li>';

echo '</ul>';

echo $after_widget;

?>