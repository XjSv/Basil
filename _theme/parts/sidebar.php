<?php

$sidebar_setting = basil_is_sidebar_active();

if ( !is_active_sidebar( $sidebar_setting['sidebar'] ) ) {
	return;
}

if ( $sidebar_setting['sidebar'] == 'homepage-widgets' ):
    ?><section class="basil-homepage-widgets basil-content widget-area">
        <?php dynamic_sidebar( 'homepage-widgets' ); ?>
    </aside><?php
else:
    ?><aside id="secondary" class="basil-sidebar basil-content widget-area" role="complementary">
        <?php dynamic_sidebar( $sidebar_setting['original'] ); ?>
    </aside><?php
endif;


