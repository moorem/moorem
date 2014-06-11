<!--<header class="single-menu flat-menu">
	<div class="container">
        <?php //spyropress_logo( 'tag=h1' ); ?>
		<?php //spyropress_social_icons( 'header_social' ); ?>
		<?php /*?><?php
            spyropress_get_nav_menu( array(
                'container_class' => 'noclass',
                'menu_class' => 'nav nav-pills nav-main',
                'menu_id' => 'mainMenu'
            ) );
        ?><?php */?>
	</div>
</header>-->


<div class="container">
    <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </a>
    <?php spyropress_logo( 'tag=h1' ); ?>
	<?php spyropress_social_icons( 'header_social' ); ?>
    <?php
            spyropress_get_nav_menu( array(
                'container_class' => 'nav-collapse collapse custom-nav',
                'menu_class' => 'nav'
            ) );
        ?>
    <!-- nav-collapse -->
    </div><!-- container -->
    </div><!-- navbar inner -->
    </div><!-- navbar -->

</div>