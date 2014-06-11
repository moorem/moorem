<header class="single-menu flat-menu">
	<div class="container">
        <?php spyropress_logo( 'tag=h1' ); ?>
		<?php spyropress_social_icons( 'header_social' ); ?>
		<?php
            $menu = spyropress_get_nav_menu( array(
                'echo' => false,
                'container_class' => 'noclass',
                'menu_class' => 'nav nav-pills nav-main',
                'menu_id' => 'mainMenu'
            ), 'one-page' );
            
            $url = ( is_front_page() || is_page_template( 'one-page.php' ) ) ? '#' : home_url('/#');
            echo str_replace( '#HOME_URL#', $url, $menu );
        ?>
	</div>
</header>