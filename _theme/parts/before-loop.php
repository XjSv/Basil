<?php global $bx_options;

?><article id="post-<?php the_ID(); ?>" <?php post_class( 'basil-content bx-clearfix' ); ?>><?php

    bx_breadcrumbs();
    basil_the_title( '<h1 class="entry-title">', '</h1>' );

?></article><?php

wp_reset_postdata();
