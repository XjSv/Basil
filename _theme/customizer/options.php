<?php

/* ---------------------------------------------------------------------------------------------------
    Initial Settings
--------------------------------------------------------------------------------------------------- */

// Google Fonts
$bx_google_fonts = bx_get_google_fonts( 'simple' );

// Base Font Sizes
$start_size = 10;
$end_size = 50;
$current_size = $start_size;
do {
     $bx_font_sizes[ $current_size . 'px' ] = $current_size . 'px';
     $current_size++;
} while ( $current_size <= $end_size );

// Font Adjustment Sizes
$start_size = 0.5;
$end_size = 10;
$current_size = $start_size;
do {
     $bx_adj_font_sizes[ $current_size . 'rem' ] = $current_size . 'rem';
     $current_size = $current_size + 0.1;
} while ( $current_size <= $end_size );

$bx_font_sizes = apply_filters( BX_THEME_SLUG . '_text_sizes', $bx_font_sizes );
$bx_adj_font_sizes = apply_filters( BX_THEME_SLUG . '_adjustment_text_sizes', $bx_adj_font_sizes );

// Some setup variables
$capability = 'edit_theme_options';
$options = array();

/* ---------------------------------------------------------------------------------------------------
    Panels
--------------------------------------------------------------------------------------------------- */

$options[] = array( 'title'             => __( 'Theme Settings', 'basil' ), // Panel name
                    'id'                => BX_THEME_SLUG . '_theme_settings', // unique ID
                    'priority'          => 30,
                    'theme_supports'    => '',
                    'type'              => 'panel' ); // type = panel


/* ---------------------------------------------------------------------------------------------------
    Sections
--------------------------------------------------------------------------------------------------- */

$options[] = array( 'title'             => __( 'General', 'basil' ), // Section name
                    'description'       => '',
                    'panel'             => BX_THEME_SLUG . '_theme_settings', // panel
                    'id'                => BX_THEME_SLUG . '_style', // unique ID
                    'icon'			=> 'desktop',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' ); // type = section

$options[] = array( 'title'             => __( 'Recipe Slider', 'basil' ), // Section name
                    'description'       => '',
                    'panel'             => BX_THEME_SLUG . '_theme_settings', // panel
                    'id'                => BX_THEME_SLUG . '_slider', // unique ID
                    'icon'              => 'columns',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' ); // type = section

$options[] = array( 'title'             => __( 'Header', 'basil' ), // Section name
                    'description'       => '',
                    'panel'             => BX_THEME_SLUG . '_theme_settings', // panel
                    'id'                => BX_THEME_SLUG . '_header', // unique ID
                    'icon'			=> 'arrow-up',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' ); // type = section

$options[] = array( 'title'             => __( 'Footer', 'basil' ), // Section name
                    'description'       => '',
                    'panel'             => BX_THEME_SLUG . '_theme_settings', // panel
                    'id'                => BX_THEME_SLUG . '_footer', // unique ID
                    'icon'              => 'arrow-down',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' ); // type = section

$options[] = array( 'title'             => __( 'Typography', 'basil' ), // Section name
                    'description'       => '',
                    'panel'             => BX_THEME_SLUG . '_theme_settings', // panel
                    'id'                => BX_THEME_SLUG . '_typography', // unique ID
                    'icon'			=> 'font',
                    'priority'          => 10,
                    'theme_supports'    => '',
				'type'              => 'section' ); // type = section

$options[] = array( 'title'             => __( 'Pages & Posts', 'basil' ), // Section name
                    'description'       => '',
                    'panel'             => BX_THEME_SLUG . '_theme_settings', // panel
                    'id'                => BX_THEME_SLUG . '_pages_posts', // unique ID
                    'icon'			=> 'file-invoice',
                    'priority'          => 10,
                    'theme_supports'    => '',
				'type'              => 'section' ); // type = section

$options[] = array( 'title'             => __( 'WooCommerce', 'basil' ), // Section name
                    'description'       => '',
                    'panel'             => BX_THEME_SLUG . '_theme_settings', // panel
                    'id'                => BX_THEME_SLUG . '_woocommerce', // unique ID
                    'icon'			=> 'shopping-cart',
                    'priority'          => 10,
                    'theme_supports'    => '',
				'type'              => 'section' ); // type = section

$options[] = array( 'title'             => __( 'Socials', 'basil' ), // Section name
                    'description'       => '',
                    'panel'             => BX_THEME_SLUG . '_theme_settings', // panel
                    'id'                => BX_THEME_SLUG . '_socials', // unique ID
                    'icon'		     => 'share-alt',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' ); // type = section

$options[] = array( 'title'             => __( 'Advanced', 'basil' ), // Section name
                    'description'       => '',
                    'panel'             => BX_THEME_SLUG . '_theme_settings', // panel
                    'id'                => BX_THEME_SLUG . '_advanced_options', // unique ID
                     'icon'			=> 'code',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' ); // type = section

/* ---------------------------------------------------------------------------------------------------
    General
--------------------------------------------------------------------------------------------------- */

$options[] = array( 'title'             => __( 'Layout Settings', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_style',
                    'id'                => BX_THEME_SLUG . '_layout_heading',
                    'option'            => 'section_heading',
                    'type'				=> 'control' );

$options[] = array( 'title'             => __( 'Layout Style', 'basil' ),
                    'description'       => __( 'Choose between a Full or Boxed layout','basil' ),
                    'section'           => BX_THEME_SLUG . '_style',
                    'id'                => BX_THEME_SLUG . '_layout_style',
                    'default'           => 'full',
                    'option'            => 'select',
                    'choices'           => array(
                        'full' => __('Full','basil'),
                        'boxed' => __('Boxed','basil')
                    ),
					'type'              => 'control' );

$options[] = array( 'title'             => __( 'Button Style', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_style',
                    'id'                => BX_THEME_SLUG . '_button_style',
                    'default'           => 'default',
                    'option'            => 'select',
                    'choices'           => array(
                         'sharp' => __('Sharp Corners','basil'),
                         'default' => __('Rounded Corners','basil'),
                         'rounded' => __('Rounded','basil')
                    ),
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Mobile Optimized (responsive)', 'basil' ),
                    'description'       => 'Layout will adjust to fit mobile devices.',
                    'section'           => BX_THEME_SLUG . '_style',
                    'id'                => BX_THEME_SLUG . '_mobile_optimized',
                    'default'           => '1',
                    'option'            => 'checkbox',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Recipe Slider
--------------------------------------------------------------------------------------------------- */

$options[] = array( 'title'             => __( 'Recipe Slider', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_slider',
                    'id'                => BX_THEME_SLUG . '_slider_heading',
                    'option'            => 'section_heading',
                    'type'                   => 'control' );

$options[] = array(
          'title'             => __( 'Background Image(s)', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_slider',
          'id'                => BX_THEME_SLUG . '_slider_bg_images',
          'default'           => 'recipes',
          'option'            => 'select',
          'choices'           => array(
               'recipes'           => __('Recipe Images','basil'),
               'featured'          => __('Featured Image','basil')
          ),
          'type'              => 'control' );

$options[] = array(
          'title'             => __( 'Background Transparency', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_slider',
          'id'                => BX_THEME_SLUG . '_slider_bg_transparency',
          'default'           => '0.2',
          'option'            => 'select',
          'choices'           => array(
               '1.0'               => __('None','basil'),
               '0.9'               => __('90%','basil'),
               '0.8'               => __('80%','basil'),
               '0.7'               => __('70%','basil'),
               '0.6'               => __('60%','basil'),
               '0.5'               => __('50%','basil'),
               '0.4'               => __('40%','basil'),
               '0.3'               => __('30%','basil'),
               '0.2'               => __('20%','basil'),
               '0.1'               => __('10%','basil'),
               '0'                 => __('Hidden','basil'),
          ),
          'type'              => 'control' );

$options[] = array(
          'title'             => __( 'Background Blur', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_slider',
          'id'                => BX_THEME_SLUG . '_slider_bg_blur',
          'default'           => '0',
          'option'            => 'select',
          'choices'           => array(
               '100'               => __('100px','basil'),
               '75'               => __('75px','basil'),
               '50'               => __('50px','basil'),
               '40'               => __('40px','basil'),
               '30'               => __('30px','basil'),
               '20'               => __('20px','basil'),
               '15'               => __('15px','basil'),
               '10'               => __('10px','basil'),
               '5'               => __('5px','basil'),
               '3'               => __('3px','basil'),
               '0'                 => __('None','basil'),
          ),
          'type'              => 'control' );

$options[] = array( 'title'   => __( 'Slider Background Grayscale', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_slider',
          'id'                => BX_THEME_SLUG . '_slider_bg_grayscale',
          'default'           => 'enabled',
          'option'            => 'radio',
          'choices'           => array(
              'enabled'          => __('Enabled','basil'),
              'disabled'           => __('Disabled','basil')
          ),
          'type'              => 'control' );

$options[] = array(
          'title'             => __( 'Slider Padding', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_slider',
          'id'                => BX_THEME_SLUG . '_slider_padding',
          'default'           => '60',
          'option'            => 'select',
          'choices'           => array(
               '150'              => '150px',
               '140'              => '140px',
               '130'              => '130px',
               '120'              => '120px',
               '110'              => '110px',
               '100'              => '100px',
               '90'               => '90px',
               '80'               => '80px',
               '70'               => '70px',
               '60'               => '60px',
               '50'               => '50px',
               '40'               => '40px',
          ),
          'type'              => 'control' );

$options[] = array(
          'title'             => __( 'Background Color', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_slider',
          'id'                => BX_THEME_SLUG . '_slider_bg_color',
          'default'           => '#222222',
          'option'            => 'color',
          'type'              => 'control' );

$options[] = array(
          'title'             => __( 'Heading Color', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_slider',
          'id'                => BX_THEME_SLUG . '_slider_heading_color',
          'default'           => '#ffffff',
          'option'            => 'color',
          'type'              => 'control' );

$options[] = array(
          'title'             => __( 'Heading Size', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_slider',
          'id'                => BX_THEME_SLUG . '_slider_heading_size',
          'default'           => '2.5',
          'option'            => 'select',
          'choices'           => array(
               '5'                 => '5',
               '4.5'               => '4.5',
               '4'                 => '4',
               '3.5'               => '3.5',
               '3'                 => '3',
               '2.5'               => '2.5',
               '2'                 => '2',
               '1.75'              => '1.75',
               '1.5'               => '1.5',
               '1.25'              => '1.25',
               '1'                 => '1',
          ),
          'type'              => 'control' );

$options[] = array(
          'title'             => __( 'Subheading Color', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_slider',
          'id'                => BX_THEME_SLUG . '_slider_subheading_color',
          'default'           => '#ffffff',
          'option'            => 'color',
          'type'              => 'control' );

$options[] = array(
          'title'             => __( 'Subheading Size', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_slider',
          'id'                => BX_THEME_SLUG . '_slider_subheading_size',
          'default'           => '1.25',
          'option'            => 'select',
          'choices'           => array(
               '5'                 => '5',
               '4.5'               => '4.5',
               '4'                 => '4',
               '3.5'               => '3.5',
               '3'                 => '3',
               '2.5'               => '2.5',
               '2'                 => '2',
               '1.75'              => '1.75',
               '1.5'               => '1.5',
               '1.25'              => '1.25',
               '1'                 => '1',
          ),
          'type'              => 'control' );

$options[] = array(
          'title'             => __( 'Link Color', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_slider',
          'id'                => BX_THEME_SLUG . '_slider_link_color',
          'default'           => '#0abe5f',
          'option'            => 'color',
          'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Header
--------------------------------------------------------------------------------------------------- */

$options[] = array( 'title'             => __( 'Main Header', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_header',
                    'id'                => BX_THEME_SLUG . '_header_heading',
                    'option'            => 'section_heading',
                    'type'				=> 'control' );

$options[] = array( 'title'             => __( 'Header Height', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_header',
                    'id'                => BX_THEME_SLUG . '_header_height',
                    'default'           => 120,
                    'option'            => 'number',
                    'input_attrs'       => array(),
                    'type'              => 'control' );

$search_options = array(
     'disabled'     => __( 'Disabled','basil' ),
     'enabled'    => __( 'Enabled','basil' )
);

if ( class_exists( 'Cooked_Recipes' ) ):
     $search_options['enabled'] = __( 'WordPress Search','basil' );
     $search_options['cooked'] = __( 'Cooked Recipe Search','basil' );
endif;

$options[] = array( 'title'             => __( 'Search', 'basil' ),
                    'section'           => BX_THEME_SLUG . '_header',
                    'id'                => BX_THEME_SLUG . '_header_search',
                    'default'           => 'disabled',
                    'option'            => 'radio',
                    'choices'           => $search_options,
				'type'              => 'control' );

if ( class_exists( 'Cooked_Profiles' ) ):
     $options[] = array( 'title'             => __( 'Cooked Profile Buttons', 'basil' ),
                         'description'       => __( 'Enabling this will show a "Login" button to non-logged-in users and "Profile" and "Sign Out" buttons to your logged-in users.', 'basil' ),
                         'section'           => BX_THEME_SLUG . '_header',
                         'id'                => BX_THEME_SLUG . '_header_profile',
                         'default'           => 'disabled',
                         'option'            => 'radio',
                         'choices'           => array(
                             'disabled'          => __('Disabled','basil'),
                             'enabled'           => __('Enabled','basil')
                         ),
                         'type'              => 'control' );
endif;



/* ---------------------------------------------------------------------------------------------------
    WooCommerce
--------------------------------------------------------------------------------------------------- */

if ( class_exists( 'WooCommerce' ) ):

     $options[] = array( 'title'             => __( 'Cart/Checkout Background', 'basil' ),
                         'description'       => '',
                         'section'           => BX_THEME_SLUG . '_woocommerce',
                         'id'                => BX_THEME_SLUG . '_woocommerce_table_bg',
                         'default'           => '#ffffff',
                         'option'            => 'color',
                         'type'              => 'control' );

     $options[] = array( 'title'             => __( 'Cart/Checkout Header Background', 'basil' ),
                         'description'       => '',
                         'section'           => BX_THEME_SLUG . '_woocommerce',
                         'id'                => BX_THEME_SLUG . '_woocommerce_table_header_bg',
                         'default'           => '#0abe5f',
                         'option'            => 'color',
                         'type'              => 'control' );

     $options[] = array( 'title'             => __( 'Cart/Checkout Header Text Color', 'basil' ),
                         'description'       => '',
                         'section'           => BX_THEME_SLUG . '_woocommerce',
                         'id'                => BX_THEME_SLUG . '_woocommerce_table_header_text',
                         'default'           => '#ffffff',
                         'option'            => 'color',
                         'type'              => 'control' );

     $options[] = array( 'title'             => __( 'Cart/Checkout Footer Background', 'basil' ),
                         'description'       => '',
                         'section'           => BX_THEME_SLUG . '_woocommerce',
                         'id'                => BX_THEME_SLUG . '_woocommerce_table_footer_bg',
                         'default'           => '#333333',
                         'option'            => 'color',
                         'type'              => 'control' );

     $options[] = array( 'title'             => __( 'Cart/Checkout Footer Text Color', 'basil' ),
                         'description'       => '',
                         'section'           => BX_THEME_SLUG . '_woocommerce',
                         'id'                => BX_THEME_SLUG . '_woocommerce_table_footer_text',
                         'default'           => '#ffffff',
                         'option'            => 'color',
                         'type'              => 'control' );

     $options[] = array( 'title'             => __( 'Product Upsells', 'basil' ),
                         'description'       => '',
                         'section'           => BX_THEME_SLUG . '_woocommerce',
                         'id'                => BX_THEME_SLUG . '_woocommerce',
                         'default'           => 'show',
                         'option'            => 'radio',
                         'choices'           => array(
                             'show'          => __('Show','basil'),
                             'hide'           => __('Hide','basil')
                         ),
                         'type'              => 'control' );

     $options[] = array( 'title'             => __( 'Related Products', 'basil' ),
                         'description'       => '',
                         'section'           => BX_THEME_SLUG . '_woocommerce',
                         'id'                => BX_THEME_SLUG . '_woocommerce_related_products',
                         'default'           => 'show',
                         'option'            => 'radio',
                         'choices'           => array(
                             'show'          => __('Show','basil'),
                             'hide'           => __('Hide','basil')
                         ),
                         'type'              => 'control' );

endif;

/* ---------------------------------------------------------------------------------------------------
    Socials
--------------------------------------------------------------------------------------------------- */

$options[] = array( 'title'             => 'Facebook',
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_socials',
                    'id'                => 'bx_socials_facebook',
                    'default'           => '',
                    'option'            => 'text',
                    'input_attrs'       => array(),
                    'type'              => 'control' );

$options[] = array( 'title'             => 'Twitter',
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_socials',
                    'id'                => 'bx_socials_twitter',
                    'default'           => '',
                    'option'            => 'text',
                    'input_attrs'       => array(),
                    'type'              => 'control' );

$options[] = array( 'title'             => 'Instagram',
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_socials',
                    'id'                => 'bx_socials_instagram',
                    'default'           => '',
                    'option'            => 'text',
                    'input_attrs'       => array(),
                    'type'              => 'control' );

$options[] = array( 'title'             => 'Youtube',
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_socials',
                    'id'                => 'bx_socials_youtube',
                    'default'           => '',
                    'option'            => 'text',
                    'input_attrs'       => array(),
                    'type'              => 'control' );

$options[] = array( 'title'             => 'Vimeo',
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_socials',
                    'id'                => 'bx_socials_vimeo',
                    'default'           => '',
                    'option'            => 'text',
                    'input_attrs'       => array(),
                    'type'              => 'control' );

$options[] = array( 'title'             => 'Snapchat',
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_socials',
                    'id'                => 'bx_socials_snapchat',
                    'default'           => '',
                    'option'            => 'text',
                    'input_attrs'       => array(),
                    'type'              => 'control' );

$options[] = array( 'title'             => 'Pinterest',
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_socials',
                    'id'                => 'bx_socials_pinterest',
                    'default'           => '',
                    'option'            => 'text',
                    'input_attrs'       => array(),
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Pages & Posts
--------------------------------------------------------------------------------------------------- */

$options[] = array(
		'title'             => __( 'Breadcrumbs', 'basil' ),
		'description'       => '',
		'section'           => BX_THEME_SLUG . '_pages_posts',
        'id'                => BX_THEME_SLUG . '_breadcrumbs',
		'default'           => 'enabled',
		'option'            => 'radio',
        'choices'           => array(
            'enabled' 			=> __('Enabled','basil'),
			'disabled' 			=> __('Disabled','basil'),
        ),
		'type'              => 'control' );

$options[] = array(
          'title'             => __( 'Page Title', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_pages_posts',
        'id'                => BX_THEME_SLUG . '_page_title',
          'default'           => 'enabled',
          'option'            => 'radio',
        'choices'             => array(
            'enabled'              => __('Enabled','basil'),
          'disabled'          => __('Disabled','basil'),
        ),
          'type'              => 'control' );

$options[] = array(
          'title'             => __( 'Content Width', 'basil' ),
          'description'       => '',
          'section'           => BX_THEME_SLUG . '_pages_posts',
          'id'                => BX_THEME_SLUG . '_content',
          'default'           => 'default',
          'option'            => 'radio',
          'choices'           => apply_filters( 'boxy_content_width_options', array(
               'disabled'          => __('Full-Width','basil'),
               'default'           => __('1100px','basil'),
               '1000px'            => __('1000px','basil'),
               '900px'             => __('900px','basil'),
               '800px'             => __('800px','basil'),
               '700px'             => __('700px','basil'),
               '600px'             => __('600px','basil')
          )),
          'type'              => 'control' );

$options[] = array( 'title'             => __( 'Featured Image Layout', 'basil' ),
                    'description'       => __( 'Choose how and where you featured images display.','basil' ),
                    'section'           => BX_THEME_SLUG . '_pages_posts',
                    'id'                => BX_THEME_SLUG . '_page_thumbnail_layout',
                    'default'           => 'page_banner',
                    'option'            => 'select',
                    'choices'           => array(
	                   'disabled' 		=> __('Disabled','basil'),
                        'page_banner' 		=> __('Page Banner w/Title','basil'),
                        'page_banner_blank'  => __('Page Banner w/o Title','basil'),
                        'inline' 			=> __('Inline','basil'),
                    ),
				'type'              => 'control' );

$options[] = array(
		'title'             => __( 'Image Position', 'basil' ),
		'description'       => '',
		'section'           => BX_THEME_SLUG . '_pages_posts',
        'id'                => BX_THEME_SLUG . '_page_thumbnail_position',
		'default'           => 'above',
		'conditionals'		=> array( BX_THEME_SLUG . '_page_thumbnail_layout' => 'inline' ),
		'option'            => 'radio',
        'choices'           => array(
            'above' 			=> __('Above Title','basil'),
			'below' 			=> __('Below Title','basil'),
        ),
		'type'              => 'control' );

$options[] = array(
		'title'             => __( 'Image Styling', 'basil' ),
		'description'       => '',
		'section'           => BX_THEME_SLUG . '_pages_posts',
        'id'                => BX_THEME_SLUG . '_page_thumbnail_style',
		'default'           => 'disabled',
		'conditionals'		=> array( BX_THEME_SLUG . '_page_thumbnail_layout' => 'inline' ),
		'option'            => 'radio',
        'choices'           => array(
            'disabled' 			=> __('Disabled','basil'),
			'bordered_1' 		=> __('Bordered 1','basil'),
			'bordered_2' 		=> __('Bordered 2','basil'),
			'bordered_3' 		=> __('Bordered 3','basil'),
			'bordered_4' 		=> __('Bordered 4','basil'),
			'bordered_5' 		=> __('Bordered 5','basil'),
			'shadow_1' 			=> __('Small Shadow','basil'),
			'shadow_2' 			=> __('Medium Shadow','basil'),
			'shadow_3' 			=> __('Large Shadow','basil'),
			'floating' 			=> __('Floating','basil'),
        ),
		'type'              => 'control' );

$options[] = array(
		'title'             => __( 'Image Border Color', 'basil' ),
		'description'       => '',
		'section'           => BX_THEME_SLUG . '_pages_posts',
        'id'                => BX_THEME_SLUG . '_page_thumbnail_border',
		'default'           => '',
		'conditionals'		=> array( BX_THEME_SLUG . '_page_thumbnail_layout' => 'inline' ),
		'option'            => 'color',
		'type'              => 'control' );

$options[] = array(
		'title'             => __( 'Page Title Style', 'basil' ),
		'description'       => '',
		'section'           => BX_THEME_SLUG . '_pages_posts',
        'id'                => BX_THEME_SLUG . '_page_banner_title_style',
		'default'           => 'centered',
		'conditionals'		=> array( BX_THEME_SLUG . '_page_thumbnail_layout' => 'page_banner' ),
		'option'            => 'radio',
        'choices'           => array(
            'centered' 		=> __('Centered','basil'),
			'left' 				=> __('Left','basil'),
			'right' 			=> __('Right','basil'),
        ),
		'type'              => 'control' );

$options[] = array(
		'title'             => __( 'Overlay Color', 'basil' ),
		'description'       => '',
		'section'           => BX_THEME_SLUG . '_pages_posts',
        'id'                => BX_THEME_SLUG . '_page_thumbnail_overlay',
		'default'           => '#333333',
		'conditionals'		=> array( BX_THEME_SLUG . '_page_thumbnail_layout' => 'page_banner' ),
		'option'            => 'color',
		'type'              => 'control' );

$options[] = array(
		'title'             => __( 'Overlay Transparency', 'basil' ),
		'description'       => '',
		'section'           => BX_THEME_SLUG . '_pages_posts',
        'id'                => BX_THEME_SLUG . '_page_thumbnail_transparency',
		'default'           => '0.8',
		'conditionals'		=> array( BX_THEME_SLUG . '_page_thumbnail_layout' => 'page_banner' ),
		'option'            => 'radio',
        'choices'           => array(
            '1.0' 				=> __('Solid Color','basil'),
			'0.9' 				=> __('90%','basil'),
			'0.8' 				=> __('80%','basil'),
			'0.7' 				=> __('70%','basil'),
			'0.6' 				=> __('60%','basil'),
			'0.5' 				=> __('50%','basil'),
			'0.4' 				=> __('40%','basil'),
			'0.3' 				=> __('30%','basil'),
			'0.2' 				=> __('20%','basil'),
			'0.1' 				=> __('10%','basil'),
			'0' 				=> __('Transparent','basil'),
        ),
		'type'              => 'control' );

$options[] = array(
		'title'             => __( 'Page Title Color', 'basil' ),
		'description'       => '',
		'section'           => BX_THEME_SLUG . '_pages_posts',
        'id'                => BX_THEME_SLUG . '_page_banner_title',
		'default'           => '#ffffff',
		'conditionals'		=> array( BX_THEME_SLUG . '_page_thumbnail_layout' => 'page_banner' ),
		'option'            => 'color',
		'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Colors - Header
--------------------------------------------------------------------------------------------------- */

$options[] = array(
     'title'             => __( 'Header Colors', 'basil' ),
     'description'       => '',
     'section'           => 'colors',
     'id'                => BX_THEME_SLUG . '_header_colors_heading',
     'option'            => 'section_heading',
     'type'                   => 'control' );

$header_colors = array(
     BX_THEME_SLUG . '_header_bg_color' => array(
          'title' => __( 'Header Background Color', 'basil' ),
          'default' => '#ffffff',
     ),
     BX_THEME_SLUG . '_header_logo_color' => array(
          'title' => __( 'Header Logo Text Color', 'basil' ),
          'default' => '#333333',
     ),
     BX_THEME_SLUG . '_nav_bar_bg_color' => array(
          'title' => __( 'Navigation Background', 'basil' ),
          'default' => '#0dbe5f',
     ),
     BX_THEME_SLUG . '_nav_bar_text_color' => array(
          'title' => __( 'Navigation Text', 'basil' ),
          'default' => '#ffffff',
     ),
     BX_THEME_SLUG . '_nav_bar_text_color_hover' => array(
          'title' => __( 'Navigation Text on Hover', 'basil' ),
          'default' => '#ffffff',
     ),
     BX_THEME_SLUG . '_nav_bar_text_bg_color_hover' => array(
          'title' => __( 'Navigation Text Background on Hover', 'basil' ),
          'default' => '#22cc6e',
     ),
     BX_THEME_SLUG . '_nav_bar_dropdown_bg_color' => array(
          'title' => __( 'Navigation Dropdown Background', 'basil' ),
          'default' => '#22cc6e',
     ),
     BX_THEME_SLUG . '_nav_bar_dropdown_text_color' => array(
          'title' => __( 'Navigation Dropdown Text', 'basil' ),
          'default' => '#ffffff',
     ),
     BX_THEME_SLUG . '_nav_bar_dropdown_text_color_hover' => array(
          'title' => __( 'Navigation Dropdown Text on Hover', 'basil' ),
          'default' => '#ffffff',
     ),
);

foreach( $header_colors as $hco_id => $hco ):

     $options[] = array(
          'title'             => $hco['title'],
          'description'       => '',
          'section'           => 'colors',
          'id'                => $hco_id,
          'default'           => $hco['default'],
          'option'            => 'color',
          'type'              => 'control' );

endforeach;

/* ---------------------------------------------------------------------------------------------------
    Colors - Footer
--------------------------------------------------------------------------------------------------- */

$options[] = array(
     'title'             => __( 'Footer Colors', 'basil' ),
     'description'       => '',
     'section'           => 'colors',
     'id'                => BX_THEME_SLUG . '_footer_colors_heading',
     'option'            => 'section_heading',
     'type'                   => 'control' );

$footer_colors = array(
     BX_THEME_SLUG . '_footer_bg_color' => array(
          'title' => __( 'Footer Background Color', 'basil' ),
          'default' => '#111111',
     ),
     BX_THEME_SLUG . '_footer_widget_text_color' => array(
          'title' => __( 'Footer Widgets - Text Color', 'basil' ),
          'default' => '#ffffff',
     ),
     BX_THEME_SLUG . '_footer_widget_link_color' => array(
          'title' => __( 'Footer Widgets - Link Color', 'basil' ),
          'default' => '#39db7f',
     ),
     BX_THEME_SLUG . '_footer_widget_link_color_hover' => array(
          'title' => __( 'Footer Widgets - Link Color on Hover', 'basil' ),
          'default' => '#ffffff',
     ),
     BX_THEME_SLUG . '_footer_text_color' => array(
          'title' => __( 'Footer Bottom - Text Color', 'basil' ),
          'default' => '#888888',
     ),
     BX_THEME_SLUG . '_footer_link_color' => array(
          'title' => __( 'Footer Bottom - Link Color', 'basil' ),
          'default' => '#888888',
     ),
     BX_THEME_SLUG . '_footer_link_color_hover' => array(
          'title' => __( 'Footer Bottom - Link Color on Hover', 'basil' ),
          'default' => '#ed5e4e',
     )
);

foreach( $footer_colors as $fco_id => $fco ):

     $options[] = array(
          'title'             => $fco['title'],
          'description'       => '',
          'section'           => 'colors',
          'id'                => $fco_id,
          'default'           => $fco['default'],
          'option'            => 'color',
          'type'              => 'control' );

endforeach;

/* ---------------------------------------------------------------------------------------------------
    Colors - Buttons
--------------------------------------------------------------------------------------------------- */

$options[] = array(
	'title'             => __( 'Button Colors', 'basil' ),
	'description'       => '',
	'section'           => 'colors',
	'id'                => BX_THEME_SLUG . '_button_colors_heading',
	'option'            => 'section_heading',
	'type'				=> 'control' );

$button_colors = array(
	BX_THEME_SLUG . '_main_button_bg_color' => array(
		'title' => __( 'Main Button Background Color', 'basil' ),
		'default' => '#0dbe5f',
	),
	BX_THEME_SLUG . '_main_button_text_color' => array(
		'title' => __( 'Main Button Text Color', 'basil' ),
		'default' => '#ffffff',
	),
	BX_THEME_SLUG . '_main_button_bg_hover_color' => array(
		'title' => __( 'Main Button Background Color on Hover', 'basil' ),
		'default' => '#008466',
	),
	BX_THEME_SLUG . '_main_button_text_hover_color' => array(
		'title' => __( 'Main Button Text Color on Hover', 'basil' ),
		'default' => '#ffffff',
	),
	BX_THEME_SLUG . '_secondary_button_bg_color' => array(
		'title' => __( 'Secondary Button Background Color', 'basil' ),
		'default' => '#333333',
	),
	BX_THEME_SLUG . '_secondary_button_text_color' => array(
		'title' => __( 'Secondary Button Text Color', 'basil' ),
		'default' => '#ffffff',
	),
	BX_THEME_SLUG . '_secondary_button_bg_hover_color' => array(
		'title' => __( 'Secondary Button Background Color on Hover', 'basil' ),
		'default' => '#000000',
	),
	BX_THEME_SLUG . '_secondary_button_text_hover_color' => array(
		'title' => __( 'Secondary Button Text Color on Hover', 'basil' ),
		'default' => '#ffffff',
	)
);

foreach( $button_colors as $bco_id => $bco ):

	$options[] = array(
		'title'             => $bco['title'],
		'description'       => '',
		'section'           => 'colors',
		'id'                => $bco_id,
		'default'           => $bco['default'],
		'option'            => 'color',
		'type'              => 'control' );

endforeach;

/* ---------------------------------------------------------------------------------------------------
    Colors - Main Content
--------------------------------------------------------------------------------------------------- */

$options[] = array(
	'title'             => __( 'Main Content Colors', 'basil' ),
	'description'       => '',
	'section'           => 'colors',
	'id'                => BX_THEME_SLUG . '_main_colors_heading',
	'option'            => 'section_heading',
	'type'				=> 'control' );

$main_colors = array(
	BX_THEME_SLUG . '_main_content_bg' => array(
		'title' => __( 'Content Background Color', 'basil' ),
		'default' => '#ffffff',
	),
	BX_THEME_SLUG . '_main_content_text' => array(
		'title' => __( 'Content Text Color', 'basil' ),
		'default' => '#333333',
	),
	BX_THEME_SLUG . '_main_content_link' => array(
		'title' => __( 'Content Link Color', 'basil' ),
		'default' => '#0083be',
	),
	BX_THEME_SLUG . '_main_content_link_hover' => array(
		'title' => __( 'Content Link Color on Hover', 'basil' ),
		'default' => '#333333',
	),
	BX_THEME_SLUG . '_main_content_h1' => array(
		'title' => __( 'H1 Header Color', 'basil' ),
		'default' => '#333333',
	),
	BX_THEME_SLUG . '_main_content_h2' => array(
		'title' => __( 'H2 Header Color', 'basil' ),
		'default' => '#333333',
	),
	BX_THEME_SLUG . '_main_content_h3' => array(
		'title' => __( 'H3 Header Color', 'basil' ),
		'default' => '#333333',
	),
	BX_THEME_SLUG . '_main_content_h4' => array(
		'title' => __( 'H4 Header Color', 'basil' ),
		'default' => '#333333',
	),
	BX_THEME_SLUG . '_main_content_h5' => array(
		'title' => __( 'H5 Header Color', 'basil' ),
		'default' => '#333333',
	),
	BX_THEME_SLUG . '_main_content_h6' => array(
		'title' => __( 'H6 Header Color', 'basil' ),
		'default' => '#333333',
	)
);

foreach( $main_colors as $mco_id => $mco ):

	$options[] = array(
		'title'             => $mco['title'],
		'description'       => '',
		'section'           => 'colors',
		'id'                => $mco_id,
		'default'           => $mco['default'],
		'option'            => 'color',
		'type'              => 'control' );

endforeach;

/* ---------------------------------------------------------------------------------------------------
    Typography
--------------------------------------------------------------------------------------------------- */

$options[] = array( 'title'             => __( 'Base Font', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_default_font',
                    'default'           => 'roboto',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_google_fonts,
					'type'              => 'control' );

$options[] = array( 'title'             => __( 'Base Text Size', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_default_text_size',
                    'default'           => '16px',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_font_sizes,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'H1 Heading (Page Title)', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h1_font',
                    'default'           => 'roboto-slab',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_google_fonts,
				'type'              => 'control' );

$options[] = array( 'title'             => __( 'H1 Size', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h1_text_size',
                    'default'           => '2rem',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_adj_font_sizes,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'H2 Heading', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h2_font',
                    'default'           => 'roboto-slab',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_google_fonts,
					'type'              => 'control' );

$options[] = array( 'title'             => __( 'H2 Size', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h2_text_size',
                    'default'           => '1.5rem',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_adj_font_sizes,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'H3 Heading', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h3_font',
                    'default'           => 'roboto',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_google_fonts,
					'type'              => 'control' );

$options[] = array( 'title'             => __( 'H3 Size', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h3_text_size',
                    'default'           => '1.2rem',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_adj_font_sizes,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'H4 Heading', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h4_font',
                    'default'           => 'roboto',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_google_fonts,
					'type'              => 'control' );

$options[] = array( 'title'             => __( 'H4 Size', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h4_text_size',
                    'default'           => '1.1rem',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_adj_font_sizes,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'H5 Heading', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h5_font',
                    'default'           => 'roboto',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_google_fonts,
				'type'              => 'control' );

$options[] = array( 'title'             => __( 'H5 Size', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h5_text_size',
                    'default'           => '1rem',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_adj_font_sizes,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'H6 Heading', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h6_font',
                    'default'           => 'roboto',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_google_fonts,
					'type'              => 'control' );

$options[] = array( 'title'             => __( 'H6 Size', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_typography',
                    'id'                => BX_THEME_SLUG . '_h6_text_size',
                    'default'           => '0.9rem',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $bx_adj_font_sizes,
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Footer
--------------------------------------------------------------------------------------------------- */

$options[] = array( 'title'             => __( 'Footer', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_footer',
                    'id'                => BX_THEME_SLUG . '_footer_heading',
                    'option'            => 'section_heading',
                    'type'                   => 'control' );

$options[] = array( 'title'             => __( 'Left Content', 'basil' ),
                    'section'           => BX_THEME_SLUG . '_footer',
                    'id'                => BX_THEME_SLUG . '_footer_left_content',
                    'default'           => 'disabled',
                    'option'            => 'radio',
                    'choices'           => array(
                         'disabled'               => __('Nothing','basil'),
                        'text'                    => __('Text/HTML','basil'),
                        'socials'            => __('Social Icons','basil')
                    ),
                         'type'              => 'control' );

$options[] = array( 'title'             => __( 'Left Text', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_footer',
                    'id'                => BX_THEME_SLUG . '_footer_left_text',
                    'default'           => '',
                    'conditionals'      => array( BX_THEME_SLUG . '_footer_left_content' => 'text' ),
                    'option'            => 'text',
                    'input_attrs'       => array(),
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Right Content', 'basil' ),
                    'section'           => BX_THEME_SLUG . '_footer',
                    'id'                => BX_THEME_SLUG . '_footer_right_content',
                    'default'           => 'disabled',
                    'option'            => 'radio',
                    'choices'           => array(
                         'disabled'               => __('Nothing','basil'),
                        'text'                    => __('Text/HTML','basil'),
                        'socials'            => __('Social Icons','basil')
                    ),
                         'type'              => 'control' );

$options[] = array( 'title'             => __( 'Right Text', 'basil' ),
                    'description'       => '',
                    'section'           => BX_THEME_SLUG . '_footer',
                    'id'                => BX_THEME_SLUG . '_footer_right_text',
                    'default'           => '',
                    'conditionals'      => array( BX_THEME_SLUG . '_footer_right_content' => 'text' ),
                    'option'            => 'text',
                    'input_attrs'       => array(),
                    'type'              => 'control' );



/*

// Text field - Example Panel - section 1
$options[] = array( 'title'             => __( 'Text Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_id', // section
                    'id'                => BX_THEME_SLUG . 'text', // unique ID
                    'default'           => 'Default value',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' ); // type = control

// Textarea field - Example Panel - section 1
$options[] = array( 'title'             => __( 'Textarea Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_id', // section
                    'id'                => BX_THEME_SLUG . 'textarea', // unique ID
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => 'esc_textarea',
                    'type'              => 'control' ); // type = control

// Color Picker field - Example Panel - section 1
$options[] = array( 'title'             => __( 'Color Picker Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_id', // section
                    'id'                => BX_THEME_SLUG . 'color', // unique ID
                    'default'           => '#BADA55', // HEX
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Radio field - Example Panel - section 1
$options[] = array( 'title'             => __( 'Radio Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_id', // section
                    'id'                => BX_THEME_SLUG . 'radio', // unique ID
                    'default'           => 'value2',
                    'option'            => 'radio',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        'value1' => 'Choice 1',
                        'value2' => 'Choice 2',
                        'value3' => 'Choice 3',
                    ),
                    'type'              => 'control' ); // type = control

// Checkbox field - Example Panel - section 1
$options[] = array( 'title'             => __( 'Checkbox Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_id', // section
                    'id'                => BX_THEME_SLUG . 'checkbox', // unique ID
                    'default'           => '', // 1 for checked
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Image Upload field - Example Panel - section 1
$options[] = array( 'title'             => __( 'Image Upload Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_id', // section
                    'id'                => BX_THEME_SLUG . 'image', // unique ID
                    'default'           => '',
                    'option'            => 'image',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' ); // type = control

// File Upload field - Example Panel - section 1
$options[] = array( 'title'             => __( 'File Upload Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_id', // section
                    'id'                => BX_THEME_SLUG . 'file', // unique ID
                    'default'           => '',
                    'option'            => 'file',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control


// URL field - Example Panel - section 2
$options[] = array( 'title'             => __( 'URL Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_2', // section
                    'id'                => BX_THEME_SLUG . 'url', // unique ID
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' ); // type = control

// Email field - Example Panel - section 2
$options[] = array( 'title'             => __( 'Email Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_2', // section
                    'id'                => BX_THEME_SLUG . 'email', // unique ID
                    'default'           => '',
                    'option'            => 'email',
                    'sanitize_callback' => 'sanitize_email',
                    'type'              => 'control' ); // type = control

// Password field - Example Panel - section 2
$options[] = array( 'title'             => __( 'Password Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_2', // section
                    'id'                => BX_THEME_SLUG . 'password', // unique ID
                    'default'           => '',
                    'option'            => 'password',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' ); // type = control


// Pages field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Pages Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_3', // section
                    'id'                => BX_THEME_SLUG . 'pages', // unique ID
                    'default'           => 0,
                    'option'            => 'pages',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Categories field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Categories Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_3', // section
                    'id'                => BX_THEME_SLUG . 'categories', // unique ID
                    'default'           => 0,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Tags field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Tags Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_3', // section
                    'id'                => BX_THEME_SLUG . 'tags', // unique ID
                    'default'           => '',
                    'option'            => 'tags',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Post Types field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Post Types Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_3', // section
                    'id'                => BX_THEME_SLUG . 'post_types', // unique ID
                    'default'           => '',
                    'option'            => 'post_types',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Posts field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Posts Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_3', // section
                    'id'                => BX_THEME_SLUG . 'posts', // unique ID
                    'default'           => '',
                    'option'            => 'posts',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Users field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Users Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_3', // section
                    'id'                => BX_THEME_SLUG . 'users', // unique ID
                    'default'           => '',
                    'option'            => 'users',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Menus field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Menus Field', 'basil' ), // Control label
                    'description'       => '', // Control description
                    'section'           => BX_THEME_SLUG . 'section_3', // section
                    'id'                => BX_THEME_SLUG . 'menus', // unique ID
                    'default'           => '',
                    'option'            => 'menus',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

*/


/* ---------------------------------------------------------------------------------------------------
    End Control Options
--------------------------------------------------------------------------------------------------- */

// Do not edit or delete below. This will include any child theme options.
if ( file_exists( get_stylesheet_directory() .'/customizer.php' ) ) {
    include get_stylesheet_directory() . '/customizer.php';
}
