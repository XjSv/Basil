<?php

/**
 * This function defines the WPC constants
 */
define( 'BX_THEME_CUSTOMIZER', bx_theme_file_path( "customizer/options.php" ) );

/**
 * Load the controls class
 */
require_once bx_fw_file_path( "customizer/controls.php" );

/**
 * Load the controls class for this theme
 */
require_once bx_theme_file_path( "customizer/custom_controls.php" );

/**
 * Detect support for Customizer panels.
 * This feature was introduced in WP 4.0.
 *
 * @return bool.
 */
function wpc_panel_support() {
    return ( class_exists( 'WP_Customize_Manager' ) && method_exists( 'WP_Customize_Manager', 'add_panel' ) ) || function_exists( 'wp_validate_boolean' );
}


/**
 * Define WPC settings file
 */
function wpc_customizer_file() {

    return BX_THEME_CUSTOMIZER;

}

/**
 * Register WPC Settings.
 */
function wpc_register_settings() {

    require wpc_customizer_file();

    foreach ( $options as $option ) {
        if ( $option['type'] === 'control' ) {
            if ( ! get_option( $option['id'] ) && isset($option['default']) ) {
                update_option( $option['id'], $option['default'] );
            }
        }
    }

}
add_action( 'after_switch_theme', 'wpc_register_settings' );


/**
 * Get WPC Settings.
 */
function wpc_get_settings(){

	require wpc_customizer_file();

    foreach ( $options as $option ) {
        if ( $option['type'] == 'control' && $option['option'] != 'section_heading' ) {
            $bx_options[ $option['id'] ] = get_option( $option['id'], $option['default'] );
        }
    }

    return $bx_options;

}


function wpc_customizer_conditionals() {

	require wpc_customizer_file();
	$conditionals = array();

    foreach ( $options as $option ) {

        if ( $option['type'] == 'control' && isset( $option['conditionals'] ) ) {
            $conditionals[$option['id']] = $option['conditionals'];
		}

	}

	return $conditionals;

}


function wpc_customizer_icons() {

	require wpc_customizer_file();
	$icons = array();

    foreach ( $options as $option ) {

        if ( $option['type'] == 'section' && isset( $option['icon'] ) ) {
            $icons[$option['id']] = $option['icon'];
		}

	}

	return $icons;

}


/**
 * Define WPC settings file
 */
function wpc_customizer_register( $wp_customize ) {

    require wpc_customizer_file();

    $type = 'option'; // option / theme_mod

    $i = 0;
    foreach ( $options as $option ) {

        // Add panel - WP 4.0+ only
        if ( $option['type'] == 'panel' && wpc_panel_support() ) {

            $priority       = ( isset( $option['priority'] ) ) ? $option['priority'] : $i + 10;
            $theme_supports = ( isset( $option['theme_supports'] ) ) ? $option['theme_supports'] : '';
            $title          = ( isset( $option['title'] ) ) ? esc_attr( $option['title'] ) : __( 'Untitled Panel', 'basil' );
            $description    = ( isset( $option['description'] ) ) ? esc_attr( $option['description'] ) : '';

            $wp_customize->add_panel( $option['id'], array(
                'priority'          => $priority,
                'capability'        => $capability,
                'theme_supports'    => $theme_supports,
                'title'             => $title,
                'description'       => $description,
            ) );

        }

        // Add sections
        if ( $option['type'] == 'section'  ) {

            $priority       = ( isset( $option['priority'] ) ) ? $option['priority'] : $i + 10;
            $theme_supports = ( isset( $option['theme_supports'] ) ) ? $option['theme_supports'] : '';
            $title          = ( isset( $option['title'] ) ) ? esc_attr( $option['title'] ) : __( 'Untitled Section', 'basil' );
            $description    = ( isset( $option['description'] ) ) ? esc_attr( $option['description'] ) : '';
            $panel          = ( isset( $option['panel'] ) ) ? esc_attr( $option['panel'] ) : '';

            $wp_customize->add_section( esc_attr( $option['id'] ), array(
                'priority'          => $priority,
                'capability'        => $capability,
                'theme_supports'    => $theme_supports,
                'title'             => $title,
                'description'       => $description,
                'panel'             => $panel,
            ) );

        }

        // Add controls
        if ( $option['type'] == 'control'  ) {

            $priority       = ( isset( $option['priority'] ) ) ? $option['priority'] : $i + 10;
            $section        = ( isset( $option['section'] ) ) ? esc_attr( $option['section'] ) : '';
            $default        = ( isset( $option['default'] ) ) ? $option['default'] : '';
            $transport      = ( isset( $option['transport'] ) ) ? esc_attr( $option['transport'] ) : 'refresh';
            $title          = ( isset( $option['title'] ) ) ? esc_attr( $option['title'] ) : __( 'Untitled Section', 'basil' );
            $description    = ( isset( $option['description'] ) ) ? esc_attr( $option['description'] ) : '';
            $form_field     = ( isset( $option['option'] ) ) ? esc_attr( $option['option'] ) : 'option';
            $sanitize_callback = ( isset( $option['sanitize_callback'] ) ) ? esc_attr( $option['sanitize_callback'] ) : '';

            // Add control settings
            $wp_customize->add_setting( esc_attr( $option['id'] ), array(
                'default'           => $default,
                'type'              => $type,
                'capability'        => $capability,
                'transport'         => $transport,
                'sanitize_callback' => $sanitize_callback,
            ) );

            // Add form field
            switch ( $form_field ) {

                // URL Field
                case 'url':
                    $wp_customize->add_control( esc_attr( $option['id'] ), array(
                        'type'              => 'url',
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    ) );
                break;

                // URL Field
                case 'email':
                    $wp_customize->add_control( esc_attr( $option['id'] ), array(
                        'type'              => 'email',
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    ) );
                break;

                // Password Field
                case 'password':
                    $wp_customize->add_control( esc_attr( $option['id'] ), array(
                        'type'              => 'password',
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    ) );
                break;

                // Range Field
                case 'range':
                    $input_attrs  = ( isset( $option['input_attrs'] ) ) ? $option['input_attrs'] : array();

                    $wp_customize->add_control( esc_attr( $option['id'] ), array(
                        'type'              => 'range',
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                        'input_attrs'       => $input_attrs,
                    ) );
                break;

                // Range Field
                case 'number':
                    $input_attrs  = ( isset( $option['input_attrs'] ) ) ? $option['input_attrs'] : array();

                    $wp_customize->add_control( esc_attr( $option['id'] ), array(
                        'type'              => 'number',
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                        'input_attrs'       => $input_attrs,
                    ) );
                break;

                // Text Field
                case 'text':
                    $wp_customize->add_control( esc_attr( $option['id'] ), array(
                        'type'              => 'text',
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    ) );
                break;

                // Radio Field
                case 'radio':
                    $choices  = ( isset( $option['choices'] ) ) ? $option['choices'] : array();

                    $wp_customize->add_control( esc_attr( $option['id'] ), array(
                        'type'              => 'radio',
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                        'choices'           => $choices,
                    ) );
                break;

                // Checkbox Field
                case 'checkbox':
                    $wp_customize->add_control( esc_attr( $option['id'] ), array(
                        'type'              => 'checkbox',
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    ) );
                break;

                // Radio Field
                case 'select':
                    $choices  = ( isset( $option['choices'] ) ) ? $option['choices'] : array();

                    $wp_customize->add_control( esc_attr( $option['id'] ), array(
                        'type'              => 'select',
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                        'choices'           => $choices,
                    ) );
                break;

                // Image Upload Field
                case 'image':
                    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, esc_attr( $option['id'] ), array(
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    )));
                break;

                // File Upload Field
                case 'file':
                    $wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, esc_attr( $option['id'] ), array(
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    )));
                break;

                // Color Picker Field
                case 'color':
                    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, esc_attr( $option['id'] ), array(
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    )));
                break;

                // Pages Field
                case 'pages':
                    $wp_customize->add_control( esc_attr( $option['id'] ), array(
                        'type'              => 'dropdown-pages',
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    ) );
                break;

                // Categories Field
                case 'categories':
                    $wp_customize->add_control( new WPC_Customize_Categories_Control( $wp_customize, esc_attr( $option['id'] ), array(
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    )));
                break;

                // Textarea Field
                case 'textarea':
                    $wp_customize->add_control( new WPC_Customize_Textarea_Control( $wp_customize, esc_attr( $option['id'] ), array(
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    )));
                break;

                // Menus Field
                case 'menus':
                    $wp_customize->add_control( new WPC_Customize_Menus_Control( $wp_customize, esc_attr( $option['id'] ), array(
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    )));
                break;

                // Users Field
                case 'users':
                    $wp_customize->add_control( new WPC_Customize_Users_Control( $wp_customize, esc_attr( $option['id'] ), array(
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    )));
                break;

                // Posts Field
                case 'posts':
                    $wp_customize->add_control( new WPC_Customize_Posts_Control( $wp_customize, esc_attr( $option['id'] ), array(
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    )));
                break;

                // Post Types Field
                case 'post_types':
                    $wp_customize->add_control( new WPC_Customize_Post_Type_Control( $wp_customize, esc_attr( $option['id'] ), array(
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    )));
                break;

                // Tags Field
                case 'tags':
                    $wp_customize->add_control( new WPC_Customize_Tags_Control( $wp_customize, esc_attr( $option['id'] ), array(
                        'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
                    )));
                break;

                // Section Heading
                case 'section_heading':
	                $wp_customize->add_control( new WPC_Customize_Section_Heading( $wp_customize, esc_attr( $option['id'] ), array(
					    'priority'          => $priority,
                        'section'           => $section,
                        'label'             => $title,
                        'description'       => $description,
					)));
				break;

            }



        }

    }

}
add_action( 'customize_register', 'wpc_customizer_register' );
