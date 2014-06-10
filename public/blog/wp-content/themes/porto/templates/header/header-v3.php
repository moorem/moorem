<header class="flat-menu clean-top">
	<div class="header-top">
		<div class="container">
			<?php include_once 'topbar.php'; ?>
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