<?php

$bx_options = wpc_get_settings();

// Basic WooCommerce Support
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'bx_wc_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'bx_wc_theme_wrapper_end', 10);
add_action( 'after_setup_theme', 'bx_wc_support' );
add_filter( 'woocommerce_show_page_title' , 'bc_wc_hide_page_title' );
function bc_wc_hide_page_title() { return false; }
function bx_wc_theme_wrapper_start() { echo '<article' . post_class( 'basil-content bx-clearfix' ) . '><div class="entry-content">'; }
function bx_wc_theme_wrapper_end() { echo '</div></article>'; }
function bx_wc_support() {
    add_theme_support( 'woocommerce', array(
        'product_grid'          => array(
            'min_columns'     => 1,
            'max_columns'     => 6,
        ),
    ) );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

add_filter( 'woocommerce_output_related_products_args', 'basil_related_products_args' );
function basil_related_products_args( $args ) {
    $theme_setting = get_option( 'woocommerce_catalog_columns', 4 );
    if ( $theme_setting < 3 ):
        $args['posts_per_page'] = 2;
        $args['columns'] = 2;
    else:
        $args['posts_per_page'] = 3;
        $args['columns'] = 3;
    endif;
    return $args;
}

if ( isset($bx_options['basil_woocommerce_upsells']) && $bx_options['basil_woocommerce_upsells'] == 'hide' ):
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
endif;

if ( isset($bx_options['basil_woocommerce_related_products']) && $bx_options['basil_woocommerce_related_products'] == 'hide' ):
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
endif;
