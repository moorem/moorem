<?php

/**
 * Default Page Template
 */
?>
<?php get_header(); ?>

<?php spyropress_before_main_container(); ?>
<!-- content -->
<div role="main" class="main">
    <?php get_template_part( 'templates/page-top', '404' ); ?>
    <div class="container">
        <section class="page-not-found">
    		<div class="row">
    			<div class="span6 offset1">
    				<div class="page-not-found-main">
    					<h2>404 <i class="icon-file"></i></h2>
    					<p>We're sorry, but the page you were looking for doesn't exist.</p>
    				</div>
    			</div>
    			<div class="span4">
    				<h4>Here are some useful links</h4>
    				<?php
                        spyropress_get_nav_menu( array(
                            'container' => false,
                            'menu_class' => 'nav nav-list primary'
                        ), 'page-404' );
                    ?>
    			</div>
    		</div>
    	</section>
     </div>
</div>
<!-- /content -->
<?php spyropress_after_main_container(); ?>
<?php get_footer(); ?>