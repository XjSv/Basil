<?php global $bx_options,$post;

$blog_id = get_option( 'page_for_posts' );
$post = get_post( $blog_id, object );
setup_postdata( $post );

if ( is_singular() ): ?><article id="post-<?php the_ID(); ?>" <?php post_class( 'basil-content bx-clearfix' ); ?>><?php endif;

if ( $bx_options['basil_page_thumbnail_position'] == 'above' ): basil_page_thumbnail(); endif;

if ( $bx_options['basil_page_thumbnail_layout'] != 'page_banner' || !has_post_thumbnail() ):

    if ( is_home() && ! is_front_page() ):

        bx_breadcrumbs();
        basil_the_title( '<h1 class="entry-title">', '</h1>' );

    endif;

endif;

if ( $bx_options['basil_page_thumbnail_position'] == 'below' ): basil_page_thumbnail(); endif;

if ( is_singular() ): ?></article><?php endif;

wp_reset_postdata();
