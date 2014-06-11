<header class="colored flat-menu darken-top-border">
	<div class="header-top">
		<div class="container">
			<?php include_once 'topbar.php'; ?>
            <?php include_once 'searchform.php' ?>
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