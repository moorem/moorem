<form class="form-search" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
     <div class="input-append">
       	<input type="text" name="s" class="span2 search-query" placeholder="Search the blog..." value="<?php echo get_search_query(); ?>">
        <button type="submit" class="btn btn-primary"><i class="icon-search"></i></button>
    </div>
</form>