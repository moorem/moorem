<header class="single-menu flat-menu">
	<div class="container">
        <?php spyropress_logo( 'tag=h1' ); ?>
		<?php spyropress_social_icons( 'header_social' ); ?>
		<?php
            spyropress_get_nav_menu( array(
                'container_class' => 'noclass',
                'menu_class' => 'nav nav-pills nav-main',
                'menu_id' => 'mainMenu'
            ) );
        ?>
	</div>
</header>