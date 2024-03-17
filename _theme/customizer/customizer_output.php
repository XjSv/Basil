<?php

add_action( 'wp_head', 'bx_customizer_styling' );

function bx_customizer_styling(){

	global $bx_options;

	$bx_google_fonts = bx_get_google_fonts( 'simple' );

	?><style type="text/css">

		/* Background Color */
		<?php echo get_background_color() ? 'body { background-color:#' . get_background_color() . '; }' : ''; ?>

		/* Default Font */
		html { font-size:<?php echo $bx_options['basil_default_text_size']; ?>; }
		html, body, input, button, select, textarea {
			font-family:<?php
			if ($bx_options['basil_default_font'] == 'system'):
				?>-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;<?php
			else:
				echo '"' . $bx_google_fonts[ $bx_options['basil_default_font'] ] . '",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;';
			endif;
			?>
		}

		/* Main Content */
		#basil-main { background-color:<?php echo $bx_options['basil_main_content_bg']; ?>; }
		#basil-homepage-widgets .widget { background-color:<?php echo $bx_options['basil_main_content_bg']; ?>; }
		#basil-main { color:<?php echo $bx_options['basil_main_content_text']; ?>; }
		a { color:<?php echo $bx_options['basil_main_content_link']; ?>; }
		#basil-slider .basil-slider-slides .slick-slide .single-slide:hover .slide-line { background:<?php echo $bx_options['basil_main_content_link']; ?>; }
		a:hover { color:<?php echo $bx_options['basil_main_content_link_hover']; ?>; }
		h1 { color:<?php echo $bx_options['basil_main_content_h1']; ?>; }
		h2, #reply-title, .basil-column-content-widget .basil-column-content-title { color:<?php echo $bx_options['basil_main_content_h2']; ?>; }
		h3 { color:<?php echo $bx_options['basil_main_content_h3']; ?>; }
		h4 { color:<?php echo $bx_options['basil_main_content_h4']; ?>; }
		h5 { color:<?php echo $bx_options['basil_main_content_h5']; ?>; }
		h6 { color:<?php echo $bx_options['basil_main_content_h6']; ?>; }
		legend { color:<?php echo $bx_options['basil_main_content_h2']; ?>; }
		h2.widget-title { color:<?php echo $bx_options['basil_main_content_text']; ?>; }
		#basil-main h2.entry-title { color:<?php echo $bx_options['basil_main_content_h1']; ?>; }

		/* Other Fonts */
		<?php echo ( $bx_options['basil_h1_font'] != 'system' ? 'body h1, .basil-parallax-widget .basil-parallax-title, .basil-recipes-widget .basil-recipes-title, .basil-blog-posts-widget .basil-blog-posts-title { font-family:"' . $bx_google_fonts[ $bx_options['basil_h1_font'] ] . '",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; }' : '' );
		echo ( $bx_options['basil_h2_font'] != 'system' ? 'body h2, #reply-title, .basil-column-content-widget .basil-column-content-title { font-family:"' . $bx_google_fonts[ $bx_options['basil_h2_font'] ] . '",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; }' : '' );
		echo ( $bx_options['basil_h3_font'] != 'system' ? 'body h3 { font-family:"' . $bx_google_fonts[ $bx_options['basil_h3_font'] ] . '",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; }' : '' );
		echo ( $bx_options['basil_h4_font'] != 'system' ? 'body h4 { font-family:"' . $bx_google_fonts[ $bx_options['basil_h4_font'] ] . '",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; }' : '' );
		echo ( $bx_options['basil_h5_font'] != 'system' ? 'body h5 { font-family:"' . $bx_google_fonts[ $bx_options['basil_h5_font'] ] . '",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; }' : '' );
		echo ( $bx_options['basil_h6_font'] != 'system' ? 'body h6 { font-family:"' . $bx_google_fonts[ $bx_options['basil_h6_font'] ] . '",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; }' : '' ); ?>

		/* Slider */
		#basil-slider { background:<?php echo $bx_options['basil_slider_bg_color']; ?>; }
		#basil-slider .basil-slider-bgs { opacity:<?php echo (float)$bx_options['basil_slider_bg_transparency']; ?>; filter:grayscale(<?php echo ( $bx_options['basil_slider_bg_grayscale'] == 'enabled' ? 1 : 0 ); ?>); }
		#basil-slider .basil-slider-bgs .slick-track > div { filter:blur(<?php echo number_format( $bx_options['basil_slider_bg_blur'],0 ); ?>px); }
		#basil-slider .basil-slider-title { font-size:<?php echo $bx_options['basil_slider_heading_size']; ?>rem; line-height:<?php echo (float)str_replace( 'rem', '', $bx_options['basil_slider_heading_size'] ) + 0.75; ?>rem; color:<?php echo $bx_options['basil_slider_heading_color']; ?>; padding:<?php echo $bx_options['basil_slider_padding'] - 10; ?>px 0 0; }
		#basil-slider .basil-slider-subheading { font-size:<?php echo $bx_options['basil_slider_subheading_size']; ?>rem; line-height:<?php echo (float)str_replace( 'rem', '', $bx_options['basil_slider_subheading_size'] ) + 0.75; ?>rem; color:<?php echo $bx_options['basil_slider_subheading_color']; ?>; }
		#basil-slider .basil-slider-slides .slick-slide { margin:<?php echo $bx_options['basil_slider_padding']; ?>px 20px; }
		#basil-slider .basil-slider-title a, #basil-slider .basil-slider-subheading a { color:<?php echo $bx_options['basil_slider_link_color']; ?>; }
		#basil-slider .basil-slider-title a:hover { color:<?php echo $bx_options['basil_slider_heading_color']; ?>; }
		#basil-slider .basil-slider-subheading a:hover { color:<?php echo $bx_options['basil_slider_subheading_color']; ?>; }

		<?php

		$heading_adjusted = $bx_options['basil_slider_heading_size'] * 0.8;
		$subheading_adjusted = $bx_options['basil_slider_subheading_size'] * 0.8;

		?>

		@media screen and ( max-width: 960px ) {
			#basil-slider .basil-slider-title { font-size:<?php echo number_format( $heading_adjusted, 2 ); ?>rem; line-height:<?php echo (float)str_replace( 'rem', '', $heading_adjusted ) + 0.75; ?>rem; }
	    	#basil-slider .basil-slider-subheading { font-size:<?php echo number_format( $subheading_adjusted, 2 ); ?>rem; line-height:<?php echo (float)str_replace( 'rem', '', $subheading_adjusted ) + 0.75; ?>rem; }
		}

		/* Headings */
		#basil-main h1.entry-title,
		.basil-page-banner h1.entry-title,
		#basil-wrapper article.hentry h1 { font-size:<?php echo $bx_options['basil_h1_text_size']; ?>; line-height:<?php echo (float)str_replace( 'rem', '', $bx_options['basil_h1_text_size'] ) + 0.5; ?>rem; }
		#basil-wrapper article.hentry h2, #reply-title, .basil-column-content-widget .basil-column-content-title { font-size:<?php echo $bx_options['basil_h2_text_size']; ?>; line-height:<?php echo (float)str_replace( 'rem', '', $bx_options['basil_h2_text_size'] ) + 0.5; ?>rem; }
		#basil-wrapper article.hentry h3 { font-size:<?php echo $bx_options['basil_h3_text_size']; ?>; line-height:<?php echo (float)str_replace( 'rem', '', $bx_options['basil_h3_text_size'] ) + 0.5; ?>rem; }
		#basil-wrapper article.hentry h4 { font-size:<?php echo $bx_options['basil_h4_text_size']; ?>; line-height:<?php echo (float)str_replace( 'rem', '', $bx_options['basil_h4_text_size'] ) + 0.5; ?>rem; }
		#basil-wrapper article.hentry h5 { font-size:<?php echo $bx_options['basil_h5_text_size']; ?>; line-height:<?php echo (float)str_replace( 'rem', '', $bx_options['basil_h5_text_size'] ) + 0.5; ?>rem; }
		#basil-wrapper article.hentry h6 { font-size:<?php echo $bx_options['basil_h6_text_size']; ?>; line-height:<?php echo (float)str_replace( 'rem', '', $bx_options['basil_h6_text_size'] ) + 0.5; ?>rem; }

		/* Buttons */
		button,.bx-button,input[type="submit"], .nav-links > a { background:<?php echo $bx_options['basil_main_button_bg_color']; ?> !important; color:<?php echo $bx_options['basil_main_button_text_color']; ?> !important; }
		button:hover,.bx-button:hover,input[type="submit"]:hover, .nav-links > a:hover { background:<?php echo $bx_options['basil_main_button_bg_hover_color']; ?> !important; color:<?php echo $bx_options['basil_main_button_text_hover_color']; ?> !important; }
		button.bx-button-alt,.bx-button.bx-button-alt,input[type="submit"].bx-button-alt { background:<?php echo $bx_options['basil_secondary_button_bg_color']; ?> !important; color:<?php echo $bx_options['basil_secondary_button_text_color']; ?> !important; }
		button.bx-button-alt:hover,.bx-button.bx-button-alt:hover,input[type="submit"].bx-button-alt:hover { background:<?php echo $bx_options['basil_secondary_button_bg_hover_color']; ?> !important; color:<?php echo $bx_options['basil_secondary_button_text_hover_color']; ?> !important; }
		.bx-button.bx-button-bordered { background:transparent !important; color:<?php echo $bx_options['basil_main_button_bg_color']; ?> !important; border:2px solid <?php echo $bx_options['basil_main_button_bg_color']; ?> !important; }
		.bx-button.bx-button-bordered:hover { background:<?php echo $bx_options['basil_main_button_bg_color']; ?> !important; color:<?php echo $bx_options['basil_main_button_text_color']; ?> !important; border:2px solid <?php echo $bx_options['basil_main_button_bg_color']; ?>; }

		/* Audio Player Controls */
		body .mejs-controls .mejs-time-rail .mejs-time-current { background:<?php echo $bx_options['basil_main_button_bg_color']; ?>; }
		.mejs-button button:hover { background:transparent url(<?php echo includes_url(); ?>/js/mediaelement/mejs-controls.svg) !important; }

		/* Blog */
		#basil-main article.hentry:hover:before { background:<?php echo $bx_options['basil_main_button_bg_color']; ?>; }
		#basil-main .post-thumbnail img { border-radius:6px; }

		<?php if ( $bx_options['basil_button_style'] == 'rounded' ): ?>
		button,.bx-button,input[type="submit"] { -moz-border-radius:50px; -webkit-border-radius:50px; border-radius:50px; }
		<?php endif; ?>

		<?php if ( $bx_options['basil_button_style'] == 'sharp' ): ?>
		#basil-main .post-thumbnail img { border-radius:0; }
		button,.bx-button,input[type="submit"] { -moz-border-radius:0; -webkit-border-radius:0; border-radius:0; }
		<?php endif; ?>

		/* Footer */
		#basil-footer { color:<?php echo $bx_options['basil_footer_text_color']; ?>; background-color:<?php echo $bx_options['basil_footer_bg_color']; ?>; }
		#basil-footer a { color:<?php echo $bx_options['basil_footer_link_color']; ?>; }
		#basil-footer a:hover { color:<?php echo $bx_options['basil_footer_link_color_hover']; ?>; }
		#basil-footer .basil-footer-widgets, #basil-footer .basil-footer-widgets h2.widget-title { color:<?php echo $bx_options['basil_footer_widget_text_color']; ?>; }
		#basil-footer .basil-footer-widgets a { color:<?php echo $bx_options['basil_footer_widget_link_color']; ?>; }
		#basil-footer .basil-footer-widgets a:hover { color:<?php echo $bx_options['basil_footer_widget_link_color_hover']; ?>; }
		#basil-footer .basil-footer-widgets input, #basil-footer .basil-footer-widgets select { color:#000; }

		/* Content Sizing (No Sidebar) */
		<?php if ( $bx_options['basil_content'] != 'default' ): ?>
			.basil-main-template { max-width:<?php echo ( $bx_options['basil_content'] == 'full' ? '100%' : $bx_options['basil_content'] ); ?>; margin:0 auto; }
		<?php endif; ?>

		#basil-header {
			background-color:<?php echo $bx_options['basil_header_bg_color']; ?>;
			min-height:<?php echo $bx_options['basil_header_height']; ?>px;
			max-height:<?php echo $bx_options['basil_header_height']; ?>px;
			height:<?php echo $bx_options['basil_header_height']; ?>px;
		}

		#basil-header .basil-shell {
			min-height:<?php echo $bx_options['basil_header_height']; ?>px;
			max-height:<?php echo $bx_options['basil_header_height']; ?>px;
			height:<?php echo $bx_options['basil_header_height']; ?>px;
		}

		#wp-custom-header { overflow:hidden; }

		#wp-custom-header,
		#basil-header-wrapper {
			min-height:<?php echo $bx_options['basil_header_height']; ?>px;
			max-height:<?php echo $bx_options['basil_header_height']; ?>px;
			height:<?php echo $bx_options['basil_header_height']; ?>px;
		}

		body.home #wp-custom-header {
			min-height:0;
			max-height:100%;
			height:auto;
		}

		body.basil-header-transparent #basil-header { background:transparent; }
		h1#basil-logo a, h1#basil-logo a:hover { color:<?php echo $bx_options['basil_header_logo_color']; ?>; }

		<?php if ( class_exists('WooCommerce') && isset($bx_options['basil_woocommerce_table_bg']) ): ?>
		/* WooCommerce */
		.woocommerce table.shop_table { background:<?php echo $bx_options['basil_woocommerce_table_bg']; ?>; }
		#basil-main .basil-main-template table.shop_table thead { background:<?php echo $bx_options['basil_woocommerce_table_header_bg']; ?>; color:<?php echo $bx_options['basil_woocommerce_table_header_text']; ?>; }
		#basil-main .basil-main-template table.shop_table tfoot { background:<?php echo $bx_options['basil_woocommerce_table_footer_bg']; ?>; color:<?php echo $bx_options['basil_woocommerce_table_footer_text']; ?>; }
		<?php endif; ?>

		<?php if ( class_exists('WooCommerce') ):
			$theme_setting = get_option( 'woocommerce_catalog_columns', 4 );
		    if ( $theme_setting < 3 ):
		        ?>.woocommerce-page #basil-main .basil-main-template section.upsells ul.products.columns-4 li,
				.woocommerce-page #basil-main .basil-main-template section.upsells .products ul.columns-4 li { width:47%; }<?php
		    else:
		        ?>.woocommerce-page #basil-main .basil-main-template section.upsells ul.products.columns-4 li,
				.woocommerce-page #basil-main .basil-main-template section.upsells .products ul.columns-4 li { width:30.333%; }<?php
		    endif;
		endif; ?>

		/* Nav */
		#basil-nav-wrapper { background-color:<?php echo $bx_options['basil_nav_bar_bg_color']; ?>; }
		#basil-nav a, #basil-nav > div > ul li.menu-item-has-children::after { color:<?php echo $bx_options['basil_nav_bar_text_color']; ?>; }
		#basil-nav > div > ul > li:hover > a, #basil-nav > div > ul > li.current-menu-item > a, #basil-nav > div > ul > li.current_page_parent > a { background:<?php echo $bx_options['basil_nav_bar_text_bg_color_hover']; ?>; color:<?php echo $bx_options['basil_nav_bar_text_color_hover']; ?>; }
		#basil-nav-wrapper .bx-social-icon { color:<?php echo $bx_options['basil_nav_bar_text_color_hover']; ?>; }

		/* Nav Dropdowns */
		#basil-nav > div > ul > li ul { background-color:<?php echo $bx_options['basil_nav_bar_dropdown_bg_color']; ?>; }
		#basil-nav > div > ul > li ul a { color:<?php echo $bx_options['basil_nav_bar_dropdown_text_color']; ?>; }
		#basil-nav > div > ul > li ul a:hover { color:<?php echo $bx_options['basil_nav_bar_dropdown_text_color_hover']; ?>; }

		/* Nav Search */
		#basil-nav .search-form .search-field { border-color:<?php echo $bx_options['basil_nav_bar_text_color']; ?>; color:<?php echo $bx_options['basil_nav_bar_text_color_hover']; ?>; }
		#basil-nav .search-form .search-field::-webkit-input-placeholder { color:<?php echo $bx_options['basil_nav_bar_text_color']; ?>; }
		#basil-nav .search-form .search-field::-moz-placeholder { color:<?php echo $bx_options['basil_nav_bar_text_color']; ?>; }
		#basil-nav .search-form .search-field:-ms-input-placeholder { color:<?php echo $bx_options['basil_nav_bar_text_color']; ?>; }
		#basil-nav .search-form .search-field:-moz-placeholder { color:<?php echo $bx_options['basil_nav_bar_text_color']; ?>; }
		#basil-nav .search-form .search-field::placeholder { color:<?php echo $bx_options['basil_nav_bar_text_color']; ?>; }
		#basil-nav .search-form .search-submit { color:<?php echo $bx_options['basil_nav_bar_text_color']; ?>; background-color:<?php echo $bx_options['basil_nav_bar_bg_color']; ?>; }
		#basil-nav .search-form .search-submit:hover { color:<?php echo $bx_options['basil_nav_bar_text_color']; ?>; background-color:<?php echo $bx_options['basil_nav_bar_text_bg_color_hover']; ?>; }

		/* Mobile Nav */
		.js .bx-nav-collapse { background:<?php echo esc_attr( $bx_options['basil_nav_bar_text_color_hover'] ); ?>; }
		.boxytheme-mobile-nav > li a { color:<?php echo esc_attr( $bx_options['basil_header_bg_color'] ); ?>; }

		/* Page Banner */
		.basil-page-banner .entry-title, .basil-page-banner .bx-breadcrumbs, .basil-page-banner .bx-breadcrumbs a { color:<?php echo $bx_options['basil_page_banner_title']; ?>; }
		.basil-banner-overlay { background-color:<?php echo $bx_options['basil_page_thumbnail_overlay']; ?>; opacity:<?php echo $bx_options['basil_page_thumbnail_transparency']; ?>; }

		/* Page Thumbnail Style */
		<?php if ( $bx_options['basil_page_thumbnail_border'] ): ?>
		.basil-page-thumbnail { border-color:<?php echo $bx_options['basil_page_thumbnail_border']; ?>; }
		<?php endif; ?>

	</style><?php

	if ( $bx_options['basil_default_font'] != 'system'
	  	|| $bx_options['basil_h1_font'] != 'system'
	  	|| $bx_options['basil_h2_font'] != 'system'
	  	|| $bx_options['basil_h3_font'] != 'system'
	  	|| $bx_options['basil_h4_font'] != 'system'
	  	|| $bx_options['basil_h5_font'] != 'system'
	  	|| $bx_options['basil_h6_font'] != 'system' ):

		?><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
		  WebFont.load({
		    google: {
		      families: [<?php
			      echo $bx_options['basil_default_font'] != 'system' ? "'" . $bx_google_fonts[ $bx_options['basil_default_font'] ] . ":100,200,300,400,500,600,700'," : "";
			      echo $bx_options['basil_h1_font'] != 'system' ? "'" . $bx_google_fonts[ $bx_options['basil_h1_font'] ] . ":100,200,300,400,500,600,700'," : "";
			      echo $bx_options['basil_h2_font'] != 'system' ? "'" . $bx_google_fonts[ $bx_options['basil_h2_font'] ] . ":100,200,300,400,500,600,700'," : "";
			      echo $bx_options['basil_h3_font'] != 'system' ? "'" . $bx_google_fonts[ $bx_options['basil_h3_font'] ] . ":100,200,300,400,500,600,700'," : "";
			      echo $bx_options['basil_h4_font'] != 'system' ? "'" . $bx_google_fonts[ $bx_options['basil_h4_font'] ] . ":100,200,300,400,500,600,700'," : "";
			      echo $bx_options['basil_h5_font'] != 'system' ? "'" . $bx_google_fonts[ $bx_options['basil_h5_font'] ] . ":100,200,300,400,500,600,700'," : "";
			      echo $bx_options['basil_h6_font'] != 'system' ? "'" . $bx_google_fonts[ $bx_options['basil_h6_font'] ] . ":100,200,300,400,500,600,700'," : "";
			  ?>]
		    }
		  });
		</script><?php

	endif;

}
