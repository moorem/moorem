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
    $position = get_setting( 'blog_single_sidebar_position', 'right' );
    spyropress_before_loop();
    while( have_posts() ) {
        the_post();

        spyropress_before_post();
    ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
            get_template_part( 'templates/post', 'top' );
            spyropress_before_post_content();
        ?>
            <div class="container">
                <div class="row">
                    <?php if( 'left' == $position ) { ?>
                    <div class="span3">
                        <aside class="sidebar">
                            <?php dynamic_sidebar( 'blog' ); ?>
                        </aside>
                    </div>
                    <?php } ?>
                	<div class="span9">
                        <div class="blog-posts single-post">
        					<article class="post post-large-image blog-single-post">
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
                                <div class="post-image">
                                    <div class="flexslider flexslider-center-mobile flexslider-simple" data-plugin-options='{"animation":"slide", "animationLoop": true, "maxVisibleItems": 1}'>
                                        <ul class="slides">
                                        <?php
                                            foreach( $attachments as $attachment ) {
                                                $id = $attachment->ID;
                                                $image = get_image( array(
                                                    'attachment' => $id,
                                                    'echo' => false,
                                                    'width' => 9999,
                                                    'responsive' => true,
                                                    'class' => 'img-rounded'
                                                ));

                                                echo '<li>' . $image . '</li>';
                                            }
                                        ?>
                            			</ul>
                                    </div>
                                </div>
                                <?php } ?>

                                <div class="post-date">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <?php echo get_avatar( get_the_author_meta( 'email' ), '150' ); ?>
                                        </a>
                                    </div>
                                    <span class="day"><?php echo get_the_date( 'd' ) ?></span>
                                    <span class="month"><?php echo get_the_date( 'M' ) ?></span>
                                </div>

        						<div class="post-content">

        							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        							<div class="post-meta">
        								<?php if( $author = get_the_author_link() ) { ?>
                                        <span><i class="icon-user"></i> By <?php echo $author; ?> </span>
                                        <?php } ?>
                                        <?php the_tags( '<span><i class="icon-tag"></i> ', ', ', ' </span>' ); ?>
        								<span><i class="icon-comments"></i> <?php comments_popup_link( '0 Comments' ); ?></span>
        							</div>

        							<?php the_content(); ?>
                                    
                                    <?php
                                        wp_link_pages( array(
                                            'before' => '<div class="pagination pagination-large pull-right"><ul>',
                                            'after' => '</ul></div><div class="clearfix"></div>',
                                        ) );
                                    ?>


        							<div class="post-block post-share">
        								<h3><i class="icon-share"></i>Share this post</h3>

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

                                    <?php //get_template_part( 'templates/author', 'box' ); ?>

                                    <?php comments_template( '', true ); ?>
        						</div>
        					</article>
        				</div>
                	</div>
                    <?php if( 'right' == $position ) { ?>
                    <div class="span3">
                        <aside class="sidebar">
                            <?php dynamic_sidebar( 'blog' ); ?>
                        </aside>
                    </div>
                    <?php } ?>
                </div>
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