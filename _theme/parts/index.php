<?php

get_header();

global $bx_options,$bx_page_settings;

if ( is_singular() || is_home() ):

	if ( is_page() ):
		$bx_page_settings = get_post_meta( $post->ID, '_basil_page_settings', true);
	elseif ( is_home() ):
		$blog_id = get_option( 'page_for_posts' );
		$bx_page_settings = get_post_meta( $blog_id, '_basil_page_settings', true);
	else:
		$bx_page_settings = false;
	endif;

	basil_page_banner();

endif;

$sidebar_setting = basil_is_sidebar_active();

if ( !is_front_page() || is_front_page() && isset($bx_page_settings['homepage_content']) && $bx_page_settings['homepage_content'] != 'hide' || is_front_page() && !isset($bx_page_settings['homepage_content']) ):

	?><section id="basil-main"<?php echo ( isset($bx_page_settings['page_content']) && isset($bx_options['basil_content']) && $bx_page_settings['page_content'] != $bx_options['basil_content'] ? ' class="bx-width-' . $bx_page_settings['page_content'] . '"' : '' ); ?>>
		<div class="basil-shell bx-clearfix">

			<section class="basil-main-template <?php echo ( isset($sidebar_setting['sidebar']) && $sidebar_setting['sidebar'] != 'homepage-widgets' ? 'basil-has-sidebar' : '' ); ?>"><?php

				do_action( 'basil_before_main_template' );

				$custom_template = apply_filters( 'basil_load_main_template', null );

				if ($custom_template):

					// Custom Template
					get_template_part( '_theme/_templates/' . $custom_template );

				else:

					if ( is_home() ):

						// Blog Page
						get_template_part( '_theme/_templates/blog' );

					elseif ( is_front_page() ):

						// When viewing the homepage
						get_template_part( '_theme/_templates/homepage' );

					elseif ( is_page( apply_filters( 'basil_is_page_filter', null ) ) || is_single( apply_filters( 'basil_is_single_filter', null ) ) ):

						// Normal Page
						get_template_part( '_theme/_templates/single' );

					elseif ( is_tax() || is_author() || is_tag() || is_archive() || is_search() ):

						// Taxonomy Archive
						get_template_part( '_theme/_templates/loop' );

					else:

						// 404 Page
						get_template_part( '_theme/_templates/404' );

					endif;

				endif;

				// Homepage Content
				if ( isset($sidebar_setting['sidebar']) && $sidebar_setting['sidebar'] == 'homepage-widgets' ):
					get_sidebar();
				endif;

			?></section><?php

			// Sidebar
			if ( isset($sidebar_setting['sidebar']) && $sidebar_setting['sidebar'] != 'homepage-widgets' ):
				get_sidebar();
			endif;

			do_action( 'basil_after_main_template' );

		?></div>

	</section><?php

endif;

if ( is_front_page() ):
	echo '<div id="basil-homepage-widgets">';
		dynamic_sidebar( 'homepage-widgets' );
	echo '</div>';
endif;

get_footer();
