<?php

global $bx_options,$bx_page_settings;

while ( have_posts() ) : the_post();

	?><article id="post-<?php the_ID(); ?>" <?php post_class( 'basil-content bx-clearfix' ); ?>><?php

		if ( $bx_options['basil_page_thumbnail_position'] == 'above' ): basil_page_thumbnail(); endif;

		if ( $bx_options['basil_page_thumbnail_layout'] != 'page_banner' || !has_post_thumbnail() ):

			bx_breadcrumbs();
			basil_the_title( '<h1 class="entry-title">', '</h1>' );

		endif;

		if ( $bx_options['basil_page_thumbnail_position'] == 'below' ): basil_page_thumbnail(); endif;

		the_content();

	?></article><?php

endwhile;

?>
