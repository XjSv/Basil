<?php get_template_part( '_theme/parts/before', 'loop' );

if ( have_posts() ) :

	while ( have_posts() ) : the_post();

		get_template_part( '_theme/_templates/content', get_post_format() );

	endwhile;

	the_posts_pagination( array(
		'prev_text'          => __( 'Previous page', 'basil' ),
		'next_text'          => __( 'Next page', 'basil' ),
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'basil' ) . ' </span>',
	) );

else :

	get_template_part( '_theme/_templates/content', 'none' );

endif;
