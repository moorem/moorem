<header class="colored flat-menu">
	<div class="header-top">
		<div class="container">
			<?php
                spyropress_get_nav_menu( array(
                    'menu_class' => 'nav nav-pills nav-top',
                    'container_class' => '',
                    'link_before' => '<i class="icon-angle-right"></i>' ), 'secondary' );
            ?>
			<?php spyropress_social_icons( 'header_social' ); ?>
		</div>
	</div>
	<div class="container">
		<?php spyropress_logo( 'tag=h1' ); ?>
		<?php
            spyropress_get_nav_menu( array(
                'container_class' => 'noclass',
                'menu_class' => 'nav nav-pills nav-main',
                'menu_id' => 'mainMenu'
            ) );
        ?>
	</div>
</header>