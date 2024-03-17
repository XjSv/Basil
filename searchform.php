<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label><input type="search" class="search-field" placeholder="<?php esc_html_e('Search...','basil'); ?>" value="<?php echo get_search_query(); ?>" name="s" /></label>
    <input type="submit" class="search-submit" value="<?php echo esc_html_x( 'Search', 'Submit Button', 'basil' ); ?>" />
</form>
