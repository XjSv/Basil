<?php get_template_part( '_theme/parts/before', 'blog' );

global $bx_page_settings;

echo '<div class="basil-blog-posts' . ( isset( $bx_page_settings['page_thumbnail_layout'] ) && $bx_page_settings['page_thumbnail_layout'] == 'page_banner' ? ' basil-has-page-banner' : '' ) . '">';

    if ( have_posts() ) :

    	while ( have_posts() ) : the_post();

    		get_template_part( '_theme/_templates/content', get_post_format() );

    	endwhile;

    	the_posts_pagination( array(
    		'prev_text'          => esc_html__( 'Previous page', 'basil' ),
    		'next_text'          => esc_html__( 'Next page', 'basil' ),
    		'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'basil' ) . ' </span>',
    	) );

    else :

    	get_template_part( '_theme/_templates/content', 'none' );

    endif;

echo '</div>';
