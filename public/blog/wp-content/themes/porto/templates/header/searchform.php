<?php if( get_setting( 'search_disable', false ) ) return; ?>
<div class="search">
	<form class="form-search" id="searchForm" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
		<div class="control-group">
			<input type="text" class="input-medium search-query" name="q" id="q" placeholder="<?php get_setting_e( 'search_placeholder' ) ?>" value="<?php echo get_search_query(); ?>">
			<button class="search" type="submit"><i class="icon-search"></i></button>
		</div>
	</form>
</div>