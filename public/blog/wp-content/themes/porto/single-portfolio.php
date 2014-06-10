<?php

/**
 * Default Page Template
 */
?>
<?php get_header(); ?>

<?php spyropress_before_main_container(); ?>
<!-- content -->
<div role="main" class="main">
    <div id="content" class="content full">
    <?php
    spyropress_before_loop();
    while( have_posts() ) {
        the_post();

        spyropress_before_post();
    ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
            get_template_part( 'templates/page-top', 'portfolio' );
            spyropress_before_post_content();
        ?>
            <div class="container">
                <h2><?php the_title(); ?></h2>
        
                <div class="row">
                	<div class="span6">
                        <?php
                        
                        $attachments = get_children( array(
                            'post_parent'       => get_the_ID(),
                            'post_status'       => 'inherit',
                            'post_type'         => 'attachment',
                            'post_mime_type'    => 'image',
                            'orderby'           => 'date',
                            'order'             => 'ASC'
                        ) );
                        
                        if ( !empty( $attachments ) ) {
                        ?>
                		<div class="flexslider flexslider-center-mobile" data-plugin-options='{"animation":"slide", "animationLoop": true, "maxVisibleItems": 1}'>
                			<ul class="slides">
                            <?php
                                foreach( $attachments as $attachment ) {
                                    $id = $attachment->ID;
                                    $image = get_image( array(
                                        'attachment' => $id,
                                        'echo' => false,
                                        'width' => 9999,
                                        'responsive' => true
                                    ));
                                    
                                    echo '<li>' . $image . '</li>';
                                }
                            ?>
                			</ul>
                		</div>
                        <?php } ?>
                		<!-- AddThis Button BEGIN -->
                		<div class="addthis_toolbox addthis_default_style ">
                			<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                			<a class="addthis_button_tweet"></a>
                			<a class="addthis_button_pinterest_pinit"></a>
                			<a class="addthis_counter addthis_pill_style"></a>
                		</div>
                		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                		<!-- AddThis Button END -->
                
                	</div>
                
                	<div class="span6">
                
                		<h4><?php get_setting_e( 'portfolio_desc_title' ); ?></h4>
                		<?php the_content(); ?>
                        
                        <?php
                        // live url
                        $live_url = get_post_meta( get_the_ID(), 'project_url', true );
                        if( $live_url )
                            echo '<a href="' . $live_url . '" class="btn btn-primary">' . get_setting( 'portfolio_preview_title' ) . '</a> <span class="arrow hlb hidden-phone" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>';
                        
                        $terms = get_the_terms( $post_ID, 'portfolio_service' );
                        if( !empty( $terms ) && !is_wp_error( $terms ) ) {
                            
                            echo '<h4 class="pull-top">' . get_setting( 'portfolio_service_title' ) . '</h4><ul class="list icons unstyled">';
                            
                            foreach( $terms as $term ) {
                                echo '<li><i class="icon-ok"></i> ' . $term->name . '</li>';
                            }
                            
                            echo '</ul>';
                        }
                        ?>
                	</div>
                </div>
                
                <hr class="tall" />
                
                <?php get_template_part( 'templates/related', 'works' ); ?>
            </div>
            <?php spyropress_after_post_content(); ?>
        </div>
    <?php

        spyropress_after_post();
    }
    spyropress_after_loop();
    ?>
    </div>
</div>
<!-- /content -->
<?php spyropress_after_main_container(); ?>
<?php get_footer(); ?>