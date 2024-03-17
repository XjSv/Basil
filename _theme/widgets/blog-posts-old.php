<?php

use Carbon_Fields\Widget;
use Carbon_Fields\Field;

class Basil_Homepage_Blog_Posts extends Widget {

    function __construct(){
        $this->setup( 'basil_homepage_blog_posts', 'Homepage - Blog Posts', 'Display recent blog posts.', array(
            Field::make( 'select', 'widget_padding', 'Widget Padding' )->add_options( array(
                    '100' => '100',
                    '90' => '90',
                    '80' => '80',
                    '70' => '70',
                    '60' => '60',
                    '50' => '50',
                    '40' => '40',
                ) )->set_default_value( '60' ),
            Field::make( 'select', 'show', 'Posts to Show' )->add_options( array(
                    '3' => '3',
                    '6' => '6',
                    '9' => '9',
                    '12' => '12',
                ) )->set_default_value( '3' ),
            Field::make( 'color', 'background_color', 'Background Color' )->set_default_value( '' ),
            Field::make( 'color', 'accent_color', 'Accent Color' )->set_default_value( '#0abe5f' ),
            Field::make( 'text', 'title', 'Title' )->set_default_value( '' ),
            Field::make( 'select', 'title_size', 'Title Size' )
                ->add_options( array(
                    '3rem' => 'Huge',
                    '2.5rem' => 'Big',
                    '2rem' => 'Large',
                    '1.75rem' => 'Medium',
                    '1.2rem' => 'Small',
                    '1rem' => 'Tiny',
                ) )->set_default_value( '3rem' ),
            Field::make( 'color', 'title_color', 'Title Color' )->set_default_value( '#ffffff' ),
            Field::make( 'textarea', 'content', 'Content' )->set_default_value( '' ),
            Field::make( 'select', 'text_size', 'Content Size' )
                ->add_options( array(
                    '2.5rem' => 'Huge',
                    '2.25rem' => 'Big',
                    '2rem' => 'Large',
                    '1.75rem' => 'Medium',
                    '1.5rem' => 'Small',
                    '1.2rem' => 'Tiny',
                ) )->set_default_value( '1.5rem' ),
            Field::make( 'color', 'text_color', 'Content Color' )->set_default_value( '#ffffff' ),
            Field::make( 'color', 'link_color', 'Content Link Color' )->set_default_value( '#0abe5f' ),
        ) );
    }

    // Called when rendering the widget in the front-end
    function front_end( $args, $instance ) {

        $rand_id = rand( 1000,9999 );
        $allowed_html = apply_filters( 'basil_widgets_allowed_html', array( 'a' => array( 'target' => array(), 'href' => array(), 'title' => array(), 'class' => array() ), 'br' => array(), 'em' => array(), 'strong' => array(), 'span' => array( 'style' => array(), 'class' => array() ) ) );

        echo '<style>';
            echo '#basilBlogPostsWidget-' . esc_attr( $rand_id ) . ' { padding: ' . esc_attr( $instance['widget_padding'] ) . 'px 0; }';
            echo '#basilBlogPostsWidget-' . esc_attr( $rand_id ) . ' { background:' . esc_attr( $instance['background_color'] ) . '; }';
            echo '#basilBlogPostsWidget-' . esc_attr( $rand_id ) . ' .basil-blog-posts-content { font-size:' . esc_attr( $instance['text_size'] ) . '; color:' . esc_attr( $instance['text_color'] ) . '; margin:0 0 calc( ' . esc_attr( $instance['widget_padding'] ) . 'px - 3% ); }';
            echo '#basilBlogPostsWidget-' . esc_attr( $rand_id ) . ' .basil-blog-posts-content a { color:' . esc_attr( $instance['link_color'] ) . ' }';
            echo '#basilBlogPostsWidget-' . esc_attr( $rand_id ) . ' .basil-blog-posts-content a:hover { color:' . esc_attr( $instance['text_color'] ) . ' }';
            echo '#basilBlogPostsWidget-' . esc_attr( $rand_id ) . ' .basil-blog-posts-title { font-size:' . esc_attr( $instance['title_size'] ) . '; color:' . esc_attr( $instance['title_color'] ) . '; margin:0 0 1rem }';
            echo '#basilBlogPostsWidget-' . esc_attr( $rand_id ) . ' .basil-blog-card:hover .basil-blog-card-image .basil-blog-posts-overlay, #basilBlogPostsWidget-' . esc_attr( $rand_id ) . ' .basil-blog-card:hover .basil-blog-card-sep { background:' . esc_attr( $instance['accent_color'] ) . ' !important; }';
            echo '.widget #basilBlogPostsWidget-' . esc_attr( $rand_id ) . ' .basil-blog-card { margin:0 1.5% 3%; }';
        echo '</style>';

        echo '<div id="basilBlogPostsWidget-' . esc_attr( $rand_id ) . '" class="basil-blog-posts-widget">';

            if ( ! empty( $instance['title'] ) ):
                echo '<div class="basil-blog-posts-title">' . wp_kses( $instance['title'], $allowed_html ) . '</div>';
            endif;
            if ( ! empty( $instance['content'] ) ):
                echo '<div class="basil-blog-posts-content">' . wp_kses( $instance['content'], $allowed_html ) . '</div>';
            endif;

            echo '<div class="basil-shell">';

            $all_posts = array(
                'post_type' => 'post',
                'posts_per_page' => $instance['show']
            );

            $blog_posts = new WP_Query( $all_posts );
            if ( $blog_posts->have_posts() ) :
                while ( $blog_posts->have_posts() ) : $blog_posts->the_post();

                    $_post_id = $blog_posts->post->ID;
                    $post_type = get_post_format( $blog_posts->post->ID );
                    $image_url = get_the_post_thumbnail_url( $_post_id, array( 700,525 ) );

                    echo '<div class="basil-blog-posts-single">';
                        echo '<a href="' . esc_url( get_the_permalink() ) . '" class="basil-blog-card basil-blog-card-modern-centered">';

                            ?><span class="basil-blog-card-image<?php echo ( $image_url ? ' has-image' : '' ); ?>"<?php echo ( $image_url ? ' style="background:url(' . $image_url . ') no-repeat; background-size:cover;"' : '' ); ?>>
                                <div class="basil-blog-posts-overlay <?php echo $post_type; ?>"></div>
                            </span>
                            <span class="basil-blog-card-content">
                                <span class="basil-blog-card-title"><?php the_title(); ?></span>
                                <span class="basil-blog-card-sep"></span>
                                <span class="basil-blog-card-author">By <strong><?php echo get_the_author_meta( 'display_name', $blog_posts->post->post_author ); ?></strong></span>
                            </span><?php

                        echo '</a>';
                    echo '</div>';

                endwhile;
            endif;

            wp_reset_query();
            echo '</div>';
        echo '</div>';

    }
}