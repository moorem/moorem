<?php
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) return;
?>

<div class="post-block post-comments clearfix">
	<?php if ( have_comments() ) { ?>
        <h3><i class="icon-comments"></i>
			<?php
				printf( _nx( 'Comment (1)', 'Comments (%1$s)', get_comments_number(), 'comments title', 'spyropress' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h3>

		<ul class="comments">
			<?php
                ob_start();
				wp_list_comments( array(
					'short_ping'  => true,
                    'callback' => 'spyropress_comment'
				) );
                echo str_replace( 'class="children"', 'class="comments"', ob_get_clean() );
			?>
		</ul><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'spyropress' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'spyropress' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'spyropress' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'spyropress' ); ?></p>
		<?php endif; ?>

	<?php
        } else {
            echo '<h3><i class="icon-comments"></i>Comments (0)</h3>';
        }
    ?>
</div><!-- #comments -->


<div class="post-block post-leave-comment">
<?php
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields = array();
    $fields['author'] = '<div class="row controls"><div class="span4 control-group"><label for="author">Your name (required)</label><input id="author" name="author" type="text" class="span4" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div>';
    $fields['email'] = '<div class="span4 control-group"><label for="email">Your email (required)</label><input id="email" name="email" type="text" class="span4" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></div></div>';
    $fields['url'] = '<div class="row controls"><div class="span8 control-group"><label for="url">Website</label><input id="url" name="url" type="text" class="span8" placeholder="http://" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div></div>';

    $args = array(
        'title_reply' => 'Leave a comment',
        'fields' => $fields,
        'comment_field' => '<div class="row controls"><div class="span8 control-group"><label>Comment</label><textarea id="comment" name="comment" rows="10" class="span8"></textarea></div></div>',
        'format' => 'html5',
        'label_submit' => 'Post Comment',
        'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.' ) . '</p>',
        'comment_notes_after' => ''
    );

    ob_start();
    comment_form( $args );
    $comment_form = ob_get_clean();

    $comment_form = str_replace( '<p class="form-submit">', '<p class="btn-toolbar">', $comment_form );
    $comment_form = str_replace( 'id="submit"', 'id="submit" class="btn btn-primary btn-large" ', $comment_form );

    echo $comment_form;
?>
</div>