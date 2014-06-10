<?php
/**
 * SpyroPress Comments
 *
 * @category    WordPress
 * @package     SpyroPress
 *
 */

/**
 * Comment Callback
 */
function spyropress_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'spyropress' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'spyropress' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
    	<div class="comment">
    		<div class="thumbnail">
                <?php echo get_avatar( $comment, 80 ); ?>
    		</div>
    		<div class="comment-block">
    			<div class="comment-arrow"></div>
    			<span class="comment-by">
    				<strong><?php comment_author(); ?></strong>
    				<span class="pull-right">
                        <span><?php
                            comment_reply_link( array_merge( $args, array(
                                'depth' => $depth,
                                'reply_text' => 'Reply',
                                'max_depth' => $args['max_depth'],
                                'before' => '<i class="icon-reply"></i> '
                            ) ) );
                        ?></span>
    				</span>
    			</span>
                <?php if ( $comment->comment_approved == '0' ) { ?>
                    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'spyropress' ); ?></em><br />
                <?php }
                comment_text(); ?>
    			<span class="date pull-right"><?php printf( __( '%1$s at %2$s', 'spyropress' ), get_comment_date(), get_comment_time() ) ?></span>
    		</div>
    	</div>
	<?php
			break;
	endswitch;
}
?>