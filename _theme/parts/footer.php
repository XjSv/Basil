<?php global $bx_options;

    ?><footer id="basil-footer" class="bx-clearfix">
        <div class="basil-shell"><?php

            if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ):
                ?><div class="basil-footer-widgets"><?php
                    if ( is_active_sidebar( 'footer-1' ) ):
                        ?><div class="basil-footer-widget-block"><?php dynamic_sidebar( 'footer-1' ); ?></div><?php
                    endif;
                    if ( is_active_sidebar( 'footer-2' ) ):
                        ?><div class="basil-footer-widget-block"><?php dynamic_sidebar( 'footer-2' ); ?></div><?php
                    endif;
                    if ( is_active_sidebar( 'footer-3' ) ):
                        ?><div class="basil-footer-widget-block"><?php dynamic_sidebar( 'footer-3' ); ?></div><?php
                    endif;
                    if ( is_active_sidebar( 'footer-4' ) ):
                        ?><div class="basil-footer-widget-block"><?php dynamic_sidebar( 'footer-4' ); ?></div><?php
                    endif;
                ?></div><?php
            endif;

            ?><div class="basil-left">
                <?php switch($bx_options['basil_footer_left_content']):

                    case 'socials':
                        bx_social_icons();
                    break;

                    case 'text':
                        echo do_shortcode( $bx_options['basil_footer_left_text'] );
                    break;

                endswitch; ?>
            </div>
            <div class="basil-right">
                <?php switch($bx_options['basil_footer_right_content']):

                    case 'socials':
                        bx_social_icons();
                    break;

                    case 'text':
                        echo do_shortcode( $bx_options['basil_footer_right_text'] );
                    break;

                endswitch; ?>
            </div>
        </div>
    </footer>
</div><?php

wp_footer();

?></body></html>
