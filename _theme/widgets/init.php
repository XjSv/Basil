<?php

require( 'parallax.php' );
require( 'widget-columns.php' );
require( 'blog-posts.php' );
require( 'recipes.php' );

function boxy_register_widgets() {
    register_widget( 'Basil_Homepage_Parallax' );
    register_widget( 'Basil_Homepage_Content_Columns' );
    register_widget( 'Basil_Homepage_Blog_Posts' );
    register_widget( 'Basil_Homepage_Recipes' );
}

add_action( 'widgets_init', 'boxy_register_widgets' );

// Sidebars
function basil_widgets_init() {

    $post_types = get_post_types( array( 'public' => true, 'exclude_from_search' => false, '_builtin' => false ), 'objects', 'and' );

    if ( !empty($post_types) ):
        foreach( $post_types as $name => $post_type ):
            register_sidebar( array(
                'name'          => sprintf( __( 'Sidebar (%s)', 'basil' ), $post_type->label ),
                'id'            => 'sidebar-' . $name,
                'description'   => __( 'Add widgets here to appear in the sidebar.', 'basil' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ) );
        endforeach;
    endif;

    register_sidebar( array(
        'name'          => __( 'Sidebar (Posts)', 'basil' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your post sidebar.', 'basil' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar (Pages)', 'basil' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your page sidebar.', 'basil' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Homepage Content', 'basil' ),
        'id'            => 'homepage-widgets',
        'description'   => __( 'Widgets here will show up full-width on pages using this sidebar.', 'basil' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 1', 'basil' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'basil' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 2', 'basil' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'basil' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 3', 'basil' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'basil' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 4', 'basil' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'basil' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'init', 'basil_widgets_init' );
