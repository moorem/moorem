<?php

// if one page tempalte return;
if( is_page_template( 'one-page.php') ) return;

$page_options = get_post_meta( get_the_ID(), '_page_options', true );

// if no option return;
if( empty( $page_options ) ) return;

// if no header return;
if( 'none' == $page_options['top_header'] ) return;

// default header
if( 'default' == $page_options['top_header'] ) {
?>
<section class="page-top">
	<div class="container">
		<div class="row">
			<div class="span12">
				<ul class="breadcrumb">
                <?php                    
                    if(function_exists('bcn_display')) {
                        bcn_display_list();
                    }  
                ?>
                </ul>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</section>
<?php
}
elseif( 'custom' == $page_options['top_header'] ) {
?>
<section class="page-top custom-product">
    <?php spyropress_the_bucket( $page_options['bucket'] ); ?>
</section>
<?php
}
?>