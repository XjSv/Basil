<?php

global $bx_options;

/* Theme Specific Defaults */
define( 'BX_THEME_SLUG', 'basil' );
define( 'BX_THEME_VERSION', '2.0.5' );
define( 'BASIL_CP_VERSION', '1.7.6' );

/* Theme Framework Defaults */
define( 'BX_BASE_DIR', trailingslashit( get_template_directory() ) );
define( 'BX_BASE_URL', trailingslashit( get_template_directory_uri() ) );
define( 'BX_FW_DIR', trailingslashit( BX_BASE_DIR . '_framework' ) );
define( 'BX_FW_URL', trailingslashit( BX_BASE_URL . '_framework' ) );
define( 'BX_THEME_DIR', trailingslashit( BX_BASE_DIR . '_theme' ) );
define( 'BX_THEME_URL', trailingslashit( BX_BASE_URL . '_theme' ) );

// Theme Updates
require_once( BX_FW_DIR . 'updates/theme-update-checker.php');
$BoxyThemeUpdateChecker = new ThemeUpdateChecker( 'basil', 'http://boxyupdates.com/get/?action=get_metadata&slug=basil' );

if ( ! isset( $content_width ) ) $content_width = 1100;

/* Theme Translation */
add_action( 'after_setup_theme', 'basil_load_theme_textdomain' );
function basil_load_theme_textdomain() {
    load_theme_textdomain( 'basil', BX_THEME_DIR . 'languages' );
}

/* Load the Framework */
require_once BX_FW_DIR . "init.php";

/* Enqueues */
require_once bx_theme_file_path( "enqueues.php" );
require_once bx_theme_file_path( "meta/page-meta.php" );
$Basil_Page_Meta = new Basil_Page_Meta();

/* Logo Display */
function basil_logo_display() {
    if ( function_exists( 'the_custom_logo' ) && get_theme_mod( 'custom_logo' ) ) {
        $site_title = get_bloginfo( 'name' );
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        $logo_height = $logo[2] / 2; $logo_pos = $logo_height / 2;
        $logo_html = '<a href="' . home_url() . '" id="basil-logo" class="custom-logo-link" style="margin-top:-' . $logo_pos . 'px; width:auto; height:' . $logo_height . 'px;">';
        $logo_html .= '<img alt="' . $site_title . '" src="' . $logo[0] . '" style="width:auto; height:' . $logo_height . 'px;" />';
        $logo_html .= '</a>';
    } else {
        $logo_html = '<h1 id="basil-logo" class="custom-logo-link"><a href="' . home_url() . '">' . get_bloginfo('name') . '</a></h1>';
    }

    echo $logo_html;
}

function basil_slider( $recipes = array(), $title = false, $subheading = false ) {
    global $bx_options, $post;

    if ( !empty($recipes) ):

        ?><div id="basil-slider">
        <?php if ( $bx_options['basil_slider_bg_images'] == 'recipes' ): ?>
        <div class="basil-slider-bgs"><?php
            foreach ( $recipes as $rid ):
                $_thumbnail = get_the_post_thumbnail_url( $rid, 'cooked-large' );
                echo '<div style="background-image:url(\'' . $_thumbnail . '\');"></div>';
            endforeach;
            ?></div>
    <?php else:
        $featured_image = get_the_post_thumbnail_url( $post->ID, 'cooked-large' );
        ?><div class="basil-slider-bgs basil-featured-image" style="background-image:url('<?php echo $featured_image; ?>');"></div><?php
    endif; ?>
        <?php echo ( $title ? '<h1 class="basil-slider-title">' . $title . '</h1>' : '' ); ?>
        <?php echo ( $subheading ? '<p class="basil-slider-subheading">' . $subheading . '</p>' : '' ); ?>
        <div class="basil-slider-arrows"></div>
        <div class="basil-slider-slides"><?php
            foreach ( $recipes as $rid ):
                echo '<div><div class="single-slide cooked-recipe-grid">';
                echo do_shortcode( '[cooked-recipe-card style="modern-centered" hide_excerpt="true" id="' . $rid . '"]' );
                echo '</div></div>';
            endforeach;
            ?></div>
        </div><?php

        wp_reset_query();

    endif;
}

function basil_is_sidebar_active() {
    global $bx_page_settings, $post;

    $post_types = get_post_types( array( 'public' => true, 'exclude_from_search' => false, '_builtin' => false ), 'objects', 'and' );
    $_post_types = array();

    if ( !empty($post_types) ):
        foreach( $post_types as $name => $post_type ):
            $_post_types[] = $name;
        endforeach;
    endif;

    if ( isset($bx_page_settings['sidebar']) && $bx_page_settings['sidebar'] ):
        if ( $bx_page_settings['sidebar'] == 'disabled' ):
            return false;
        else:
            $basil_sidebar['sidebar'] = $bx_page_settings['sidebar'];
            $basil_sidebar['original'] = $basil_sidebar['sidebar'];
        endif;
    else:
        $basil_sidebar['sidebar'] = ( is_page() ? 'sidebar-2' : 'sidebar-1' );
        $basil_sidebar['original'] = $basil_sidebar['sidebar'];
    endif;

    if ( $basil_sidebar['sidebar'] && class_exists('CustomSidebars') ):

        $sidebar_id = $basil_sidebar['sidebar'];

        $basil_sidebar['original'] = $basil_sidebar['sidebar'];

        $_csb_post_type = get_post_type();
        $_csb_options = CustomSidebars::get_options();
        if ( isset( $_csb_options['post_type_single'][$_csb_post_type][$sidebar_id] ) ):
            $sidebar_id = $_csb_options['post_type_single'][$_csb_post_type][$sidebar_id];
        endif;

        $basil_sidebar['sidebar'] = $sidebar_id;

    else:

        $post_type_name = get_post_type( $post );

        if ( is_array( $_post_types ) && in_array( $post_type_name, $_post_types ) ):
            $basil_sidebar['sidebar'] = 'sidebar-' . $post_type_name;
            $basil_sidebar['original'] = $basil_sidebar['sidebar'];
        endif;

    endif;

    if ( is_active_sidebar( $basil_sidebar['sidebar'] ) ) {
        return $basil_sidebar;
    }

    return false;
}

function basil_page_banner() {

    global $bx_options,$post,$bx_page_settings;
    $blog_id = get_option( 'page_for_posts' );

    if ( is_home() && $blog_id ):
        $post = get_post( $blog_id, object );
        setup_postdata( $post );
    elseif ( is_home() && !$blog_id ):
        return;
    endif;

    if ( isset($bx_page_settings['page_thumbnail_layout']) && $bx_page_settings['page_thumbnail_layout'] ):
        $bx_options['basil_page_thumbnail_layout'] = $bx_page_settings['page_thumbnail_layout'];
    endif;

    if ( class_exists( 'Cooked_Recipes' ) &&
         isset( $bx_page_settings['page_thumbnail_layout'] ) &&
         $bx_page_settings['page_thumbnail_layout'] == 'recipe_slider' &&
         isset( $bx_page_settings['slider_recipes'] ) &&
         !empty($bx_page_settings['slider_recipes'] ) ):

        basil_slider( $bx_page_settings['slider_recipes'], $bx_page_settings['recipe_slider_title'], $bx_page_settings['recipe_slider_subheading'] );

    else:

        if ( in_array( $bx_options['basil_page_thumbnail_layout'], array( 'page_banner', 'page_banner_blank' ) ) ):

            if ( has_post_thumbnail() ):

                $thumbnail = apply_filters( 'basil_page_banner_thumbnail_url', bx_post_thumbnail_url( 'basil_page_banner' ) );
                echo '<div class="basil-parallax basil-page-banner' . ( $bx_options['basil_page_thumbnail_layout'] == 'page_banner' ? ' basil-title-' . $bx_options['basil_page_banner_title_style'] : '' ) . ( $bx_options['basil_page_thumbnail_layout'] == 'page_banner_blank' ? ' basil-blank-banner' : '' ) . '" data-parallax="scroll" data-bleed="20" data-speed="0.5" natural-width="1400" data-image-src="' . $thumbnail . '">';

                if ( $bx_options['basil_page_thumbnail_layout'] == 'page_banner' ):
                    echo '<div class="basil-banner-overlay"></div>';
                    echo '<div class="basil-shell">';
                    bx_breadcrumbs();
                    if ( function_exists( 'is_shop' ) && is_shop() ):
                        echo '<h1 class="entry-title">'; woocommerce_page_title(); echo '</h1>';
                    else:
                        basil_the_title( '<h1 class="entry-title">', '</h1>' );
                    endif;
                    echo '</div>';
                endif;

                echo '</div>';
                do_action( 'basil_after_page_banner' );
            endif;

        endif;

    endif;

    wp_reset_postdata();
}

function basil_the_title( $before, $after ) {

    global $wp_query;

    if ( !in_the_loop() && is_search() ):
        if ( have_posts() ) :
            echo $before . sprintf( esc_html__('Search Results for: %s', 'basil' ), '<span>' . get_search_query() . '</span>' ) . $after;
        else :
            echo $before . esc_html__( 'Nothing Found', 'basil' ) . $after;
        endif;
    else:

        global $bx_options, $post;

        if ( empty($post) )
            return;

        $default_option = ( isset( $bx_options['basil_page_title'] ) ? $bx_options['basil_page_title'] : 'enabled' );
        $bx_page_settings = get_post_meta( $post->ID, '_basil_page_settings', true);
        $title_setting = ( isset( $bx_page_settings['title'] ) && $bx_page_settings['title'] ? $bx_page_settings['title'] : false );

        if ( !in_the_loop() && is_archive() ):
            if ( $title_setting == 'enabled' || !$title_setting && $default_option == 'enabled' ):
                esc_html(the_archive_title($before, $after));
            endif;
        elseif ( $title_setting == 'enabled' || !$title_setting && $default_option == 'enabled' ):
            echo $before . esc_html( the_title('', '', false) ) . $after;
        endif;

    endif;

    return false;
}

function basil_page_thumbnail() {

    global $bx_options,$post;

    if ( $bx_options['basil_page_thumbnail_layout'] == 'inline' ):

        if ( has_post_thumbnail() ):
            $thumbnail = apply_filters( 'basil_page_thumbnail_url', bx_post_thumbnail( 'basil_page_thumbnail' ) );
            do_action( 'basil_before_page_thumbnail' );
            echo '<div class="basil-page-thumbnail' . ( $bx_options['basil_page_thumbnail_style'] != 'disabled' ? ' ' . $bx_options['basil_page_thumbnail_style'] : '' ) . '">';
            echo $thumbnail;
            echo '</div>';
            do_action( 'basil_after_page_thumbnail' );
        endif;

    endif;

}

function basil_excerpt( $class = 'entry-summary' ) {
    $class = esc_attr( $class );

    if ( has_excerpt() || is_search() ) : ?>
        <div class="<?php echo $class; ?>">
            <?php the_excerpt(); ?>
        </div>
    <?php endif;
}

function basil_post_thumbnail() {
    if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
        return;
    }

    if ( is_singular() ) :
        ?>

        <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div><!-- .post-thumbnail -->

    <?php else : ?>

        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
            <?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
        </a>

    <?php endif; // End is_singular()
}

function basil_entry_meta( $date_only = false ) {

    if ( 'post' === get_post_type() ) {

        ob_start();

        $time_string = '<time class="entry-date published updated" datetime="%3$s">%4$s</time>';

        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            get_the_date(),
            esc_attr( get_the_modified_date( 'c' ) ),
            get_the_modified_date()
        );

        echo sprintf( '<span class="posted-on"><span class="screen-reader-text">%s </span><a href="%s" rel="bookmark">%s</a></span> %s <span class="byline"><span class="author vcard"><span class="screen-reader-text">%s </span><a class="url fn n" href="%s">%s</a></span></span>',
            esc_html__( 'Posted on', 'basil' ),
            esc_url( get_permalink() ),
            $time_string,
            esc_html_x( 'by', 'by Author Name', 'basil' ),
            esc_html__( 'Author', 'basil' ),
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            get_the_author()
        );

        if ( !$date_only ):
            basil_entry_taxonomies();
        endif;

        if ( $html = ob_get_clean() ):
            echo '<div class="basil-post-meta">';
            echo $html;
            echo '</div>';
        endif;

    } else {
        return;
    }

}

function basil_entry_taxonomies() {
    $categories_list = get_the_category_list( ', ' );
    if ( $categories_list && basil_categorized_blog() ) {
        printf( '<span class="cat-links"><span class="screen-reader-text">%1$s</span> %2$s</span>',
            _x( 'Categories', 'Used before category names.', 'basil' ),
            $categories_list
        );
    }

    $tags_list = get_the_tag_list( '', ', ' );
    if ( $tags_list ) {
        printf( '<span class="tags-links"><span class="screen-reader-text">%1$s</span> %2$s</span>',
            _x( 'Tags', 'Used before tag names.', 'basil' ),
            $tags_list
        );
    }
}

function basil_categorized_blog() {

    $all_the_cats = get_transient( 'basil_categories' );

    if ( !$all_the_cats || $all_the_cats == 1 ) {

        $all_the_cats = get_categories( array(
            'fields'     => 'ids',
            'number'     => 2,
        ) );

        $all_the_cats = count( $all_the_cats );
        set_transient( 'basil_categories', $all_the_cats );

    }

    if ( $all_the_cats > 1 ) {
        return true;
    } else {
        return false;
    }
}

