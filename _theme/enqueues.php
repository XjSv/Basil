<?php

/* Admin Enqueus */
function boxy_theme_admin_enqueues() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_media();
	wp_enqueue_style( 'bx-font-awesome', bx_theme_file_uri( 'css/fontawesome-all.min.css' ), [], '5.0.4' );
	wp_enqueue_style( 'basil_admin_styles', bx_theme_file_uri( 'css/admin.css' ), [], BX_THEME_VERSION );
	wp_enqueue_script( 'basil-conditionals', bx_theme_file_uri( 'scripts/admin/conditionals.js' ), array( 'jquery' ), BX_THEME_VERSION, true );
}

add_action( 'admin_enqueue_scripts', 'boxy_theme_admin_enqueues' );

/* Front-End Enqueus */
function boxy_theme_enqueues() {
	global $bx_options;

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'basil-dropdowns', bx_theme_file_uri( 'scripts/dropdowns.js' ), array( 'jquery' ), BX_THEME_VERSION, true );

	if ( is_singular() || is_home() || is_front_page() || function_exists('is_shop') && is_shop() ):
		wp_enqueue_script( 'comment-reply' );
		wp_enqueue_script( 'basil-fitvids', bx_theme_file_uri( 'scripts/vendor/fitvids.min.js' ), array( 'jquery' ), BX_THEME_VERSION, true );
		wp_enqueue_script( 'basil-videos', bx_theme_file_uri( 'scripts/videos.js' ), array( 'jquery' ), BX_THEME_VERSION, true );
	endif;


	wp_enqueue_style( 'bx_fw_styles', bx_fw_file_uri( 'css/bx-fw.css' ), array(), BX_THEME_VERSION );
	wp_register_style( 'bx_theme_styles', bx_theme_file_uri( 'css/theme.css' ), array(), BX_THEME_VERSION );
	wp_register_style( 'bx_wc_styles', bx_theme_file_uri( 'css/woocommerce.css' ), array(), BX_THEME_VERSION );
	wp_register_style( 'bx_responsive_styles', bx_theme_file_uri( 'css/responsive.css' ), array(), BX_THEME_VERSION );
	wp_register_script( 'basil_search', bx_theme_file_uri( 'scripts/search.js' ), array( 'jquery' ), BX_THEME_VERSION, true );

	// Basil Slider
	wp_register_style( 'basil_slick_css', bx_theme_file_uri( 'scripts/vendor/slick/slick.css' ), array(), BX_THEME_VERSION );
	wp_register_style( 'basil_slick_css_theme', bx_theme_file_uri( 'scripts/vendor/slick/slick-theme.css' ), array(), BX_THEME_VERSION );
	wp_register_script( 'basil_slick_js', bx_theme_file_uri( 'scripts/vendor/slick/slick.js' ), array( 'jquery' ), BX_THEME_VERSION, true );
	wp_register_script( 'basil_slider_js', bx_theme_file_uri( 'scripts/slider.js' ), array( 'jquery' ), BX_THEME_VERSION, true );

	// User-Generated Custom CSS
	if ( isset($bx_options['basil_custom_css']) && $bx_options['basil_custom_css'] ) {
		wp_add_inline_style( 'bx_theme_styles', $bx_options['basil_custom_css'] );
	}

	wp_enqueue_style( 'bx-font-awesome', bx_theme_file_uri( 'css/fontawesome-all.min.css' ), array(), '5.4.1' );
	wp_enqueue_style( 'bx_theme_styles' );

	// Responsive Stuff
	if ( isset($bx_options['basil_mobile_optimized']) && $bx_options['basil_mobile_optimized'] ) {
		wp_enqueue_style( 'bx_responsive_styles' );
		wp_enqueue_script( 'bx_responsive_nav', bx_theme_file_uri( 'scripts/vendor/responsive-nav.min.js' ), array( 'jquery' ), BX_THEME_VERSION, true );
		wp_add_inline_script( 'bx_responsive_nav',
		'if (jQuery(".bx-nav-collapse").length) {
			var nav = responsiveNav(".bx-nav-collapse", {
				animate: true,
				transition: 284,
				label: "<i class=\"fas fa-bars\"></i>",
				closeOnNavClick: false,
				navClass: "bx-nav-collapse",
			});
		}' );
	}

	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'bx_wc_styles' );
	}

	if ( isset($bx_options['basil_header_search']) && $bx_options['basil_header_search'] != 'disabled' ) {
		wp_enqueue_script( 'basil_search' );
	}

	wp_enqueue_style( 'basil_slick_css' );
	wp_enqueue_style( 'basil_slick_css_theme' );
	wp_enqueue_script( 'basil_slick_js' );
	wp_enqueue_script( 'basil_slider_js' );
}

add_action( 'wp_enqueue_scripts', 'boxy_theme_enqueues' );

/* Customizer Styling */
function boxy_theme_customizer_enqueues() {
	$bx_customizer_vars['conditionals'] = wpc_customizer_conditionals();
	$bx_customizer_vars['icons'] = wpc_customizer_icons();

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bx-fort-awesome', 'https://use.fortawesome.com/7965b2ba.js', array(), BX_THEME_VERSION );

	wp_register_script( 'bx_customizer_scripts', bx_fw_file_uri( 'customizer/customizer.js' ), array( 'jquery' ), BX_THEME_VERSION );
	wp_localize_script( 'bx_customizer_scripts', 'bx_customizer_vars', $bx_customizer_vars );
	wp_enqueue_script( 'bx_customizer_scripts' );

	wp_register_style( 'bx_customizer_styles', bx_fw_file_uri( 'customizer/customizer.css' ), array(), BX_THEME_VERSION );
	wp_enqueue_style( 'bx_customizer_styles' );
}

add_action( 'customize_controls_print_styles', 'boxy_theme_customizer_enqueues' );

/* Customizer Output */
require_once bx_theme_file_path( 'customizer/customizer_output.php' );
