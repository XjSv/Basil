<?php

/* Cooked Pro Active? */
add_action( 'after_setup_theme', 'bx_cooked_setup' );
function bx_cooked_setup() {
	if ( class_exists( 'Cooked_Pro_Plugin' ) ):
		define( 'COOKED_PRO_ACTIVE', true );
	else:
		define( 'COOKED_PRO_ACTIVE', false );
	endif;
}

add_action('after_setup_theme', 'bx_setup_theme');
function bx_setup_theme() {

	global $bx_options;

	// Widgets
	require bx_theme_file_path( 'widgets/init.php' );

	/**
	 * Theme Support - Title Tag
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Theme Support - Valid HTML5 Elements
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/**
	 * Theme Support - Selective Refresh for Widgets
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Theme Support - Custom Background
	 */
	$defaults = array( 'default-color' => '#ffffff' );
	add_theme_support( 'custom-background', $defaults );

	/**
	 * Theme Support - Custom Header
	 */
	$defaults = array( 'header-text' => false, 'width' => 1000, 'height' => 700, 'flex-height' => true, 'flex-width' => true, 'uploads' => true, 'video' => true );
	add_theme_support( 'custom-header', $defaults );

	/**
	 * Theme Support - Logo
	 */
	$defaults = array( 'height' => 100, 'width' => 400, 'flex-height' => true, 'flex-width'  => true, 'header-text' => false );
	add_theme_support( 'custom-logo', $defaults );

	/**
	 * Theme Support - Automatic Feed Links
	 */
	add_theme_support('automatic-feed-links');

	/**
	 * Theme Support - Menus
	 */
	register_nav_menus(array(
		'main-menu' => esc_html__('Main Menu', 'basil'),
		'mobile-menu' => esc_html__( 'Mobile Menu','basil' )
	));

	/**
	 * Theme Support - Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( apply_filters( 'basil_post_thumbnail_width', 350 ), apply_filters( 'basil_post_thumbnail_height', 350 ), true );
	add_image_size( 'basil_page_banner', apply_filters( 'basil_page_banner_width', 1400 ), apply_filters( 'basil_page_banner_height', 700 ), true );
	add_image_size( 'basil_page_thumbnail', apply_filters( 'basil_page_thumbnail_width', 1400 ), apply_filters( 'basil_page_thumbnail_height', 1400 ), false );

	/**
	 * Theme Support - Post Formats
	 */
	add_theme_support( 'post-formats', apply_filters( 'basil_post_formats', array( 'video', 'audio', 'image', 'gallery' ) ) );

}

/* Empty Menu Message */
function basil_menu_message() {
	?><div class="basil-main-menu"><ul><li><a href="<?php echo trailingslashit(get_admin_url()); ?>nav-menus.php?action=edit"><?php esc_html_e('Create a menu for this area','basil'); ?>&nbsp;&nbsp;<i class="fas fa-arrow-right fa-fw"></i></a></li></ul></div><?php
}