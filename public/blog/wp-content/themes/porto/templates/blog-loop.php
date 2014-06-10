<article class="post post-large-image">
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
		<div class="flexslider flexslider-center-mobile flexslider-simple" data-plugin-options='{"controlNav":false, "animation":"slide", "slideshow": false, "maxVisibleItems": 1}'>
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
		<span class="day"><?php echo get_the_date( 'd' ) ?></span>
		<span class="month"><?php echo get_the_date( 'M' ) ?></span>
	</div>

	<div class="post-content">

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        
		<div class="post-meta">
            <?php if( $author = get_the_author_link() ) { ?>
			<span><i class="icon-user"></i> By <?php echo $author; ?> </span>
            <?php } ?>
            <?php the_tags( '<span><i class="icon-tag"></i> ', ', ', ' </span>' ); ?>
			<span><i class="icon-comments"></i> <?php comments_popup_link( '0 Comments' ); ?></span>
			<a href="<?php the_permalink(); ?>" class="btn btn-mini btn-primary pull-right">Read more...</a>
		</div>

	</div>
</article>