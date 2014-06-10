<footer class="short" id="footer">
	<div class="container">
		<div class="row">
			<div class="span3">
                <?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
			<div class="span3">
                <?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
			<div class="span3">
                <?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
			<div class="span3">
                <?php dynamic_sidebar( 'footer-4' ); ?>
			</div>
		</div>
	</div>
    <?php if( $copyright = get_setting( 'footer_copyright' ) ) { ?>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="span12">
					<?php echo do_shortcode( $copyright ); ?>
				</div>
			</div>
		</div>
	</div>
    <?php } ?>
</footer>