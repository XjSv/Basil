<?php

/**
 * [year] Shortcode
 */

if ( !shortcode_exists( 'year' ) ):
    add_shortcode( 'year', 'boxy_year_shortcode' );
endif;

function boxy_year_shortcode(){
    return date_i18n( 'Y' );
}

/**
 * Get Google Fonts (using Google Font API)
 */
function bx_get_google_fonts( $type = 'detailed' ){

	$bx_font_array = array();
	$bx_google_fonts = get_transient( 'bx_google_fonts' );

	$bx_font_array['system']['family'] = esc_html__( 'System Font (WordPress Default)','basil');
	$bx_font_array['system']['variants'] = array();
    $bx_font_simple_array['system'] = esc_html__( 'System Font (WordPress Default)','basil');

	if ( !$bx_google_fonts ):

		if ( function_exists('curl_version') ):

			$bx_google_api_url = "https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyD9D8gitmc9arkEqMLLnmfk92J2j56vidA";
			$bx_ch = curl_init();
			curl_setopt($bx_ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($bx_ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($bx_ch, CURLOPT_URL,$bx_google_api_url);
			$bx_result=curl_exec($bx_ch);
			curl_close($bx_ch);
			$bx_google_fonts = json_decode($bx_result, true);
			$bx_google_fonts = isset( $bx_google_fonts['items'] ) ? $bx_google_fonts['items'] : array();

		else:

			$bx_google_fonts = array();

		endif;
	endif;

	if ( !empty($bx_google_fonts) ):

		foreach( $bx_google_fonts as $slug => $font ):

            if ( $slug != 'system' && $slug != 'system-font-wordpress-default' ):

                $key = sanitize_title_with_dashes( $font['family'] );

    			$bx_font_simple_array[$key] = esc_html( $font['family'] );
    			$bx_font_array[$key]['family'] = esc_html( $font['family'] );
    			$bx_font_array[$key]['variants'] = $font['variants'];

            endif;

		endforeach;

		set_transient( 'bx_google_fonts', $bx_font_array, 86400 );

		if ( $type == 'simple' ):
			return $bx_font_simple_array;
		else:
			return $bx_font_array;
		endif;

	endif;

	return $bx_font_array;

}

// get_header_image_tag callback
function bx_get_header_image_tag( $html, $header, $attr ) {
	return '<img src="'.$attr['src'].'" width="'.$attr['width'].'" height="'.$attr['height'].'" alt="'.$attr['alt'].'" srcset="'.$attr['srcset'].'" sizes="'.$attr['sizes'].'">';
};
add_filter( 'get_header_image_tag', 'bx_get_header_image_tag', 10, 3 );

function bx_get_custom_logo( $html, $blog_id ){

	$html = '';
    $switched_blog = false;

    if ( is_multisite() && ! empty( $blog_id ) && (int) $blog_id !== get_current_blog_id() ) {
        switch_to_blog( $blog_id );
        $switched_blog = true;
    }

    $custom_logo_id = get_theme_mod( 'custom_logo' );

    // We have a logo. Logo is go.
    if ( $custom_logo_id ) {
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		$logo_height = $logo[2] / 2; $logo_pos = $logo_height / 2;
        $html = sprintf( '<a href="%1$s" id="basil-logo" class="custom-logo-link" style="margin-top:-' . $logo_pos . 'px; width:auto; height:' . $logo_height . 'px;" rel="home" itemprop="url">%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
                'itemprop' => 'logo',
            ) )
        );
    }

    // If no logo is set but we're in the Customizer, leave a placeholder (needed for the live preview).
    elseif ( is_customize_preview() ) {
	    $html = '';
        $html = sprintf( '<h1 id="basil-logo" class="custom-logo-link"><a href="%1$s">' . get_bloginfo('name') . '<img class="custom-logo"/></a></h1>',
            esc_url( home_url( '/' ) )
        );
    }

    if ( $switched_blog ) {
        restore_current_blog();
    }

    return $html;

}
add_filter( 'get_custom_logo', 'bx_get_custom_logo', 10, 2 );

/**
 * Header Markup (to support WP 4.6 and lower)
 */
function bx_custom_header_markup(){
	if ( get_header_image() ):
		$custom_markup = '<div id="wp-custom-header" class="wp-custom-header">';
		$custom_markup .= get_header_image_tag();
		$custom_markup .= '</div>';
		return $custom_markup;
	else:
		return false;
	endif;
}

/**
 * Theme Path DIR (_theme)
 */
function bx_theme_file_path( $file_path ){
	if ( function_exists('get_theme_file_path') ):
		return get_theme_file_path( '_theme/' . $file_path );
	else:
		return BX_THEME_DIR . $file_path;
	endif;
}

/**
 * Theme Path DIR (_theme)
 */
function bx_fw_file_path( $file_path ){
	if ( function_exists('get_theme_file_path') ):
		return get_theme_file_path( '_framework/' . $file_path );
	else:
		return BX_FW_DIR . $file_path;
	endif;
}

/**
 * Theme Path URL (_theme)
 */
function bx_theme_file_uri( $file_path ){
	if ( function_exists('get_theme_file_uri') ):
		return get_theme_file_uri( '_theme/' . $file_path );
	else:
		return BX_THEME_URL . $file_path;
	endif;
}

/**
 * Framework Path URL (_framework)
 */
function bx_fw_file_uri( $file_path ){
	if ( function_exists('get_theme_file_uri') ):
		return get_theme_file_uri( '_framework/' . $file_path );
	else:
		return BX_FW_URL . $file_path;
	endif;
}

/**
 * Social Icons
 */
function bx_social_icons() {
	global $bx_options;

	foreach ( $bx_options as $id => $value ):
		if ( $value && strpos($id, 'bx_socials') !== false ):
			$id = explode( '_', $id );
			$id = $id[2];
			echo '<a href="'.$value.'" class="bx-social-icon"><i class="fab fa-'.$id.'"></i></a>';
		endif;
	endforeach;
}

/**
 * Add Item to Menu
 */
function bx_custom_nav_menu_item( $title, $url, $order = 0, $parent = 0, $classes = array() ){
	$item = new stdClass();
	$item->ID = 1000000 + $order + $parent;
	$item->db_id = $item->ID;
	$item->title = $title;
	$item->url = $url;
	$item->menu_order = $order;
	$item->menu_item_parent = $parent;
	$item->type = '';
	$item->object = '';
	$item->object_id = '';
	$item->classes = $classes;
	$item->target = '';
	$item->attr_title = '';
	$item->description = '';
	$item->xfn = '';
	$item->status = '';
	return $item;
}

/**
 * Post Thumbnail
 */
function bx_post_thumbnail( $thumb_name = false ){

	$thumb_name = !$thumb_name ? 'post-thumbnail' : $thumb_name;

	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	ob_start();
	the_post_thumbnail( $thumb_name, array( 'title' => the_title_attribute( 'echo=0' ) ) );
	return ob_get_clean();
}

/**
 * Post Thumbnail URL
 */
function bx_post_thumbnail_url( $thumb_name = false ){

	$thumb_name = !$thumb_name ? 'post-thumbnail' : $thumb_name;

	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	$thumbnail_url = get_the_post_thumbnail_url( null, $thumb_name );
	return $thumbnail_url;
}

/**
 * Breadcrumbs
 */
function bx_breadcrumbs() {

    // Get the query & post information
    global $post,$wp_query,$bx_options;

    if ( !empty($post) ):
        $bx_page_settings = get_post_meta( $post->ID, '_basil_page_settings', true);
    else:
        $bx_page_settings = false;
    endif;

    $default_option = ( isset( $bx_options['basil_breadcrumbs'] ) ? $bx_options['basil_breadcrumbs'] : 'enabled' );
    $crumbs_setting = ( isset( $bx_page_settings['breadcrumbs'] ) && $bx_page_settings['breadcrumbs'] ? $bx_page_settings['breadcrumbs'] : false );

    if ( $crumbs_setting == 'enabled' || !$crumbs_setting && $default_option == 'enabled' ):

        // Settings
        $separator          = '<i class="fas fa-fw fa-angle-right"></i>';
        $breadcrums_id      = 'bx-breadcrumbs';
        $breadcrums_class   = 'bx-breadcrumbs';
        $home_title         = esc_html_x('Home','Home Breadcrumb','basil');

        // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
        $custom_taxonomy    = 'product_cat';

        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

        // Home page
        echo '<li class="bx-item-home"><a class="bx-bread-link bx-bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="bx-separator bx-separator-home"> ' . $separator . ' </li>';

        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

            //echo '<li class="bx-item-current bx-item-archive"><span class="bx-bread-current bx-bread-archive">' . post_type_archive_title(false,false) . '</span></li>';

        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="bx-item-cat bx-item-custom-post-type-' . $post_type . '"><a class="bx-bread-cat bx-bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="bx-separator"> ' . $separator . ' </li>';

            }

            $custom_tax_name = get_queried_object()->name;
            //echo '<li class="bx-item-current bx-item-archive"><span class="bx-bread-current bx-bread-archive">' . $custom_tax_name . '</span></li>';

        } else if ( is_single() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="bx-item-cat bx-item-custom-post-type-' . $post_type . '"><a class="bx-bread-cat bx-bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="bx-separator"> ' . $separator . ' </li>';

            }

            // Get post category info
            $category = get_the_category();

            if(!empty($category)) {

                // Get last category post is in
                $cat_array_vals = array_values($category);
                $last_category = end( $cat_array_vals );

                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);

                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="bx-item-cat">' . $parents . '</li>';
                    $cat_display .= '<li class="bx-separator"> ' . $separator . ' </li>';
                }

            }

            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                if ( !empty($taxonomy_terms) ):
                    $cat_id         = $taxonomy_terms[0]->term_id;
                    $cat_nicename   = $taxonomy_terms[0]->slug;
                    $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                    $cat_name       = $taxonomy_terms[0]->name;
                endif;

            }

            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                //echo '<li class="bx-item-current bx-item-' . $post->ID . '"><span class="bx-bread-current bx-bread-' . $post->ID . '" title="' . esc_attr( get_the_title() ) . '">' . get_the_title() . '</span></li>';

            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {

                echo '<li class="bx-item-cat bx-item-cat-' . $cat_id . ' bx-item-cat-' . $cat_nicename . '"><a class="bx-bread-cat bx-bread-cat-' . $cat_id . ' bx-bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="bx-separator"> ' . $separator . ' </li>';
                //echo '<li class="bx-item-current bx-item-' . $post->ID . '"><span class="bx-bread-current bx-bread-' . $post->ID . '" title="' . esc_attr( get_the_title() ) . '">' . get_the_title() . '</span></li>';

            } else {

                //echo '<li class="bx-item-current bx-item-' . $post->ID . '"><span class="bx-bread-current bx-bread-' . $post->ID . '" title="' . esc_attr( get_the_title() ) . '">' . get_the_title() . '</span></li>';

            }

        } else if ( is_category() ) {

            // Category page
            //echo '<li class="bx-item-current bx-item-cat"><span class="bx-bread-current bx-bread-cat">' . single_cat_title('', false) . '</span></li>';

        } else if ( is_page() ) {

            // Standard page
            if( $post->post_parent ){

                // If child page, get parents
                $anc = get_post_ancestors( $post->ID );

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="bx-item-parent bx-item-parent-' . $ancestor . '"><a class="bx-bread-parent bx-bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="bx-separator bx-separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }

                // Display parent pages
                echo $parents;

                // Current page
                //echo '<li class="bx-item-current bx-item-' . $post->ID . '"><strong title="' . esc_attr( get_the_title() ) . '"> ' . get_the_title() . '</strong></li>';

            } else {

                // Just display current page if not parents
                //echo '<li class="bx-item-current bx-item-' . $post->ID . '"><span class="bx-bread-current bx-bread-' . $post->ID . '"> ' . get_the_title() . '</span></li>';

            }

        } else if ( is_tag() ) {

            // Tag page

            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;

            // Display the tag name
            //echo '<li class="bx-item-current bx-item-tag-' . $get_term_id . ' bx-item-tag-' . $get_term_slug . '"><span class="bx-bread-current bx-bread-tag-' . $get_term_id . ' bx-bread-tag-' . $get_term_slug . '">' . $get_term_name . '</span></li>';

        } elseif ( is_day() ) {

            // Day archive

            // Year link
            echo '<li class="bx-item-year bx-item-year-' . get_the_time('Y') . '"><a class="bx-bread-year bx-bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('Y') ) . '</a></li>';
            echo '<li class="bx-separator bx-separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month link
            echo '<li class="bx-item-month bx-item-month-' . get_the_time('m') . '"><a class="bread-month bx-bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('M') ) . '</a></li>';
            echo '<li class="bx-separator bx-separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

            // Day display
           // echo '<li class="bx-item-current bx-item-' . get_the_time('j') . '"><span class="bx-bread-current bx-bread-' . get_the_time('j') . '"> ' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('jS') . ' ' . get_the_time('M') ) . '</strong></li>';

        } else if ( is_month() ) {

            // Month Archive

            // Year link
            echo '<li class="bx-item-year bx-item-year-' . get_the_time('Y') . '"><a class="bx-bread-year bx-bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('Y') ) . '</a></li>';
            echo '<li class="bx-separator bx-separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month display
            echo '<li class="bx-item-month bx-item-month-' . get_the_time('m') . '"><span class="bx-bread-month bx-bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('M') ) . '</span></li>';

        } else if ( is_year() ) {

            // Display year archive
            //echo '<li class="bx-item-current bx-item-current-' . get_the_time('Y') . '"><span class="bx-bread-current bx-bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . sprintf( esc_html__( '%s Archives', 'basil' ), get_the_time('Y') ) . '</span></li>';

        } else if ( is_author() ) {

            // Auhor archive

            // Get the author information
            global $author;
            $userdata = get_userdata( $author );

            // Display author name
            //echo '<li class="bx-item-current bx-item-current-' . $userdata->user_nicename . '"><span class="bx-bread-current bx-bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . sprintf( esc_html__( 'Author: %s', 'basil' ), $userdata->display_name ) . '</span></li>';

        } else if ( get_query_var('paged') ) {

            // Paginated archives
            //echo '<li class="bx-item-current bx-item-current-' . get_query_var('paged') . '"><span class="bx-bread-current bx-bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">' . sprintf( esc_html__( 'Page %s', 'basil' ), get_query_var('paged') ) . '</span></li>';

        } else if ( is_search() ) {

            // Search results page
            echo '<li class="bx-item-current bx-item-current-' . get_search_query() . '"><span class="bx-bread-current bx-bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">' . sprintf( esc_html__( 'Search results for: "%s"', 'basil' ), get_search_query() ) . '</span></li>';

        } elseif ( is_404() ) {

            // 404 page

        }

        echo '</ul>';

    endif;
    return false;
}

function bx_comments() {
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
}
