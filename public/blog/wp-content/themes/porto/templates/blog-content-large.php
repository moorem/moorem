<?php $position = get_setting( 'blog_sidebar_position', 'right' );  ?>
<div class="container">
    <?php spyropress_before_loop(); ?>
    <div class="row">
        <?php if( 'left' == $position ) { ?>
        <div class="span3">
            <aside class="sidebar">
                <?php dynamic_sidebar( 'blog' ); ?>
            </aside>
        </div>
        <?php } ?>
        <div class="span9">
            <div class="blog-posts">
            <?php
                while( have_posts() ) {
                    the_post();
                    spyropress_before_post();
                        get_template_part( 'templates/blog', 'loop' );
                    spyropress_after_post();
                }
                wp_pagenavi(array(
                    'before' => '<div class="pagination pagination-large pull-right"><ul>',
                    'after' => '</ul></div>'
                ));
            ?>
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
    <?php spyropress_after_loop(); ?>
</div>