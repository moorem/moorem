<div class="container">
    <?php spyropress_before_loop(); ?>
    <div class="row">
        <div class="span12">
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
    </div>
    <?php spyropress_after_loop(); ?>
</div>