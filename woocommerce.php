<?php

get_header();

global $bx_options,$bx_page_settings,$post;

$shop_page = get_option( 'woocommerce_shop_page_id' );
$post = get_post( $shop_page );
$bx_page_settings = get_post_meta( $shop_page, '_basil_page_settings', true );
basil_page_banner();
$sidebar_setting = basil_is_sidebar_active();
wp_reset_postdata();

?><section id="basil-main"<?php echo ( isset($bx_page_settings['page_content']) && isset($bx_options['basil_content']) && $bx_page_settings['page_content'] != $bx_options['basil_content'] ? ' class="bx-width-' . $bx_page_settings['page_content'] . '"' : '' ); ?>>
    <div class="basil-shell bx-clearfix">

        <section class="basil-main-template <?php echo ( $sidebar_setting['sidebar'] && $sidebar_setting['sidebar'] != 'homepage-widgets' ? 'basil-has-sidebar' : '' ); ?>"><?php

            do_action( 'basil_before_main_template' );

            ?><article id="post-<?php the_ID(); ?>" <?php post_class( 'basil-content bx-clearfix' ); ?>><?php

                if ( $bx_options['basil_page_thumbnail_position'] == 'above' ): basil_page_thumbnail(); endif;

                if ( $bx_options['basil_page_thumbnail_layout'] != 'page_banner' || !has_post_thumbnail() ):

                    bx_breadcrumbs();
                    echo '<h1 class="entry-title">'; woocommerce_page_title(); echo '</h1>';

                endif;

                if ( $bx_options['basil_page_thumbnail_position'] == 'below' ): basil_page_thumbnail(); endif; ?>

                <div class="entry-content"><?php
                    woocommerce_content();
                ?></div>

            </article>

        </section><?php

        // Sidebar
        if ( $sidebar_setting['sidebar'] ):
            get_sidebar();
        endif;

        do_action( 'basil_after_main_template' );

    ?></div>

</section><?php

get_footer();