<?php

if( !get_setting( 'related_portfolio_enable', false ) ) return;

$limit = get_setting( 'related_portfolio_number', 4 );
$related_by = get_setting( 'related_portfolio_by' );

global $post;
$args = array(
    'post__not_in'      => array( $post->ID ),
    'posts_per_page'    => $limit,
    'caller_get_posts'  => 1,
    'post_type'         => 'portfolio'
);

// by tags
if( 'portfolio_service' == $related_by ) {
    $tags = wp_get_post_terms( $post->ID, 'portfolio_service' );
    if ( $tags ) {
        $tag_ids = array();
        foreach( $tags as $individual_tag )
            $tag_ids[] = $individual_tag->term_id;
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'portfolio_service',
                'field' => 'id',
                'terms' => $tag_ids
            )
        );
    }
}
// by category
elseif( 'portfolio_category' == $related_by ) {
    $categories = wp_get_post_terms( $post->ID, 'portfolio_category' );
    if ( $categories ) {
        $category_ids = array();
        foreach( $categories as $individual_category )
            $category_ids[] = $individual_category->term_id;
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'portfolio_category',
                'field' => 'id',
                'terms' => $category_ids
            )
        );
    }
}

$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
?>
<div class="row">     
    <div class="span12">
    	<h3><?php get_setting_e( 'related_portfolio_title' ) ?></h3>
    </div>
    
    <ul class="portfolio-list">
        <?php
            while( $my_query->have_posts() ) {
                $my_query->the_post();
            
                $image = array(
                    'post_id' => $post_ID,
                    'echo' => false,
                    'width' => 300,
                    'responsive' => true
                );
                $image_tag = get_image( $image );
                
                $cat = '';
                $terms = get_the_terms( $post_ID, 'portfolio_category' );
                if( !empty( $terms ) && !is_wp_error( $terms ) ) {
                    $cat = current($terms)->name;
                }
        ?>
        <li class="span3">
    		<div class="portfolio-item thumbnail mobile-max-width">
    			<a href="<?php the_permalink(); ?>" class="thumb-info">
    				<?php echo $image_tag; ?>
    				<span class="thumb-info-title">
    					<span class="thumb-info-inner"><?php the_title(); ?></span>
    					<span class="thumb-info-type"><?php echo $cat; ?></span>
    				</span>
    				<span class="thumb-info-action">
    					<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-link"></i></span>
    				</span>
    			</a>
    		</div>
    	</li>
        <?php
            }
        ?>
    </ul>    
</div>
<?php
}
?>