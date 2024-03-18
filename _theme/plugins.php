<?php

require_once BX_FW_DIR . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'basil_register_required_plugins' );

function basil_register_required_plugins() {
    $plugins = array(
        array(
            'name'     => 'Cooked',
            'slug'     => 'cooked',
            'required' => false,
        ),
        /* array(
            'name'     => 'Cooked Pro',
            'slug'     => 'cooked-pro',
            'source'   => get_template_directory() . '/plugins/cooked-pro.zip',
            'required' => false,
            'version'  => BASIL_CP_VERSION,
        ), */
        array(
            'name'     => 'WooCommerce',
            'slug'     => 'woocommerce',
            'required' => false
        ),
        array(
            'name'     => 'WooCommerce Colors',
            'slug'     => 'woocommerce-colors',
            'required'=> false
        )
    );

    $config = array(
        'id'           => 'basil_tgmpa',           // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'basil-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}