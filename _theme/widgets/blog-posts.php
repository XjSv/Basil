<?php

class Basil_Homepage_Blog_Posts extends WP_Widget {

    public function __construct() {
        global $pagenow;

        $widget_ops = [
            'classname' => 'Basil_Homepage_Blog_Posts',
            'description' => 'Display recent blog posts.',
        ];

        // Enqueue admin scrips and styles, only in the the old widgets page.
		if ( 'widgets.php' === $pagenow ) {
			add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_admin_scripts' ] );
		}

        parent::__construct( 'Basil_Homepage_Blog_Posts', 'Homepage - Blog Posts', $widget_ops );
    }

    /**
	 * Script & styles for admin widget form.
	 */
	public function enqueue_admin_scripts() {
		wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'wp-color-picker' );
        wp_enqueue_script( 'underscore' );
        wp_enqueue_script( 'basil-widgets-form', bx_theme_file_uri( 'scripts/admin/basil-widgets-form.js' ), [ 'underscore', 'wp-color-picker' ], BX_THEME_VERSION, true );
	}

    public function widget( $args, $instance ) {
        $instance_num = rand( 1000, 9999 );

        $allowed_html = apply_filters( 'basil_widgets_allowed_html', [
            'a' => [ 'target' => [], 'href' => [], 'title' => [], 'class' => [] ],
            'br' => [],
            'em' => [],
            'strong' => [],
            'span' => [ 'style' => [], 'class' => [] ]
        ]);

        echo '<style>';
            echo '#basilBlogPostsWidget-' .  $instance_num . ' { padding: ' . esc_attr( $instance['widget_padding'] ) . 'px 0; }';
            echo '#basilBlogPostsWidget-' .  $instance_num . ' { background:' . esc_attr( $instance['background_color'] ) . '; }';
            echo '#basilBlogPostsWidget-' .  $instance_num . ' .basil-blog-posts-content { font-size:' . esc_attr( $instance['text_size'] ) . '; color:' . esc_attr( $instance['text_color'] ) . '; margin:0 0 calc( ' . esc_attr( $instance['widget_padding'] ) . 'px - 3% ); }';
            echo '#basilBlogPostsWidget-' .  $instance_num . ' .basil-blog-posts-content a { color:' . esc_attr( $instance['link_color'] ) . ' }';
            echo '#basilBlogPostsWidget-' .  $instance_num . ' .basil-blog-posts-content a:hover { color:' . esc_attr( $instance['text_color'] ) . ' }';
            echo '#basilBlogPostsWidget-' .  $instance_num . ' .basil-blog-posts-title { font-size:' . esc_attr( $instance['title_size'] ) . '; color:' . esc_attr( $instance['title_color'] ) . '; margin:0 0 1rem }';
            echo '#basilBlogPostsWidget-' .  $instance_num . ' .basil-blog-card:hover .basil-blog-card-image .basil-blog-posts-overlay, #basilBlogPostsWidget-' . $instance_num . ' .basil-blog-card:hover .basil-blog-card-sep { background:' . esc_attr( $instance['accent_color'] ) . ' !important; }';
            echo '.widget #basilBlogPostsWidget-' .  $instance_num . ' .basil-blog-card { margin:0 1.5% 3%; }';
        echo '</style>';

        echo '<div id="basilBlogPostsWidget-' . $instance_num . '" class="basil-blog-posts-widget">';

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
            else:
                echo '<div class="basil-blog-posts-single">';
                    echo '<p>No posts found.</p>';
                echo '</div>';
            endif;

            wp_reset_query();
            echo '</div>';
        echo '</div>';
    }

    public function form( $instance ) {
        $widget_padding = !empty( $instance['widget_padding'] ) ? $instance['widget_padding'] : 60;
        $show = !empty( $instance['show'] ) ? $instance['show'] : 3;
        $background_color = !empty( $instance['background_color'] ) ? $instance['background_color'] : '';
        $accent_color = !empty( $instance['accent_color'] ) ? $instance['accent_color'] : '#0abe5f';
        $title = !empty( $instance['title'] ) ? $instance['title'] : '';
        $title_size = !empty( $instance['title_size'] ) ? $instance['title_size'] : '3rem';
        $title_color = !empty( $instance['title_color'] ) ? $instance['title_color'] : '#ffffff';
        $content = !empty( $instance['content'] ) ? $instance['content'] : '';
        $text_size = !empty( $instance['text_size'] ) ? $instance['text_size'] : '1.5rem';
        $text_color = !empty( $instance['text_color'] ) ? $instance['text_color'] : '#ffffff';
        $link_color = !empty( $instance['link_color'] ) ? $instance['link_color'] : '#0abe5f';
        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'widget_padding' ) ); ?>"><?php esc_attr_e( 'Widget Padding:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'widget_padding' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'widget_padding' ) ); ?>">
                <option value="100"<?php echo ( !$widget_padding || $widget_padding == '100' ? ' selected' : '' ); ?>>100</option>
                <option value="90"<?php echo ( !$widget_padding || $widget_padding == '90' ? ' selected' : '' ); ?>>90</option>
                <option value="80"<?php echo ( !$widget_padding || $widget_padding == '80' ? ' selected' : '' ); ?>>80</option>
                <option value="70"<?php echo ( !$widget_padding || $widget_padding == '70' ? ' selected' : '' ); ?>>70</option>
                <option value="60"<?php echo ( !$widget_padding || $widget_padding == '60' ? ' selected' : '' ); ?>>60</option>
                <option value="50"<?php echo ( !$widget_padding || $widget_padding == '50' ? ' selected' : '' ); ?>>50</option>
                <option value="40"<?php echo ( !$widget_padding || $widget_padding == '40' ? ' selected' : '' ); ?>>40</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'show' ) ); ?>"><?php esc_attr_e( 'Show:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'show' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show' ) ); ?>">
                <option value="3"<?php echo ( !$show || $show == '3' ? ' selected' : '' ); ?>>3</option>
                <option value="6"<?php echo ( !$show || $show == '6' ? ' selected' : '' ); ?>>6</option>
                <option value="9"<?php echo ( !$show || $show == '9' ? ' selected' : '' ); ?>>9</option>
                <option value="12"<?php echo ( !$show || $show == '12' ? ' selected' : '' ); ?>>12</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'background_color' ) ); ?>"><?php esc_attr_e( 'Background Color:', 'cooked' ); ?></label>
            <input class="widefat basil-color-field" id="<?php echo esc_attr( $this->get_field_id( 'background_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'background_color' ) ); ?>" type="text" value="<?php echo esc_attr( $background_color ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'accent_color' ) ); ?>"><?php esc_attr_e( 'Accent Color:', 'cooked' ); ?></label>
            <input class="widefat basil-color-field" id="<?php echo esc_attr( $this->get_field_id( 'accent_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'accent_color' ) ); ?>" type="text" value="<?php echo esc_attr( $accent_color ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'cooked' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title_size' ) ); ?>"><?php esc_attr_e( 'Title Size:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title_size' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title_size' ) ); ?>">
                <option value="3rem"<?php echo ( !$title_size || $title_size == '3rem' ? ' selected' : '' ); ?>>Huge</option>
                <option value="2.5rem"<?php echo ( !$title_size || $title_size == '2.5rem' ? ' selected' : '' ); ?>>Big</option>
                <option value="2rem"<?php echo ( !$title_size || $title_size == '2rem' ? ' selected' : '' ); ?>>Large</option>
                <option value="1.75rem"<?php echo ( !$title_size || $title_size == '1.75rem' ? ' selected' : '' ); ?>>Medium</option>
                <option value="1.2rem"<?php echo ( !$title_size || $title_size == '1.2rem' ? ' selected' : '' ); ?>>Small</option>
                <option value="1rem"<?php echo ( !$title_size || $title_size == '1rem' ? ' selected' : '' ); ?>>Tiny</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title_color' ) ); ?>"><?php esc_attr_e( 'Title Color:', 'cooked' ); ?></label>
            <input class="widefat basil-color-field" id="<?php echo esc_attr( $this->get_field_id( 'title_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title_color' ) ); ?>" type="text" value="<?php echo esc_attr( $title_color ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>"><?php esc_attr_e( 'Content:', 'cooked' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'content' ) ); ?>"><?php echo $content; ?></textarea>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text_size' ) ); ?>"><?php esc_attr_e( 'Content Size:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text_size' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text_size' ) ); ?>">
                <option value="2.5rem"<?php echo ( !$text_size || $text_size == '2.5rem' ? ' selected' : '' ); ?>>Huge</option>
                <option value="2.25rem"<?php echo ( !$text_size || $text_size == '2.25rem' ? ' selected' : '' ); ?>>Big</option>
                <option value="2rem"<?php echo ( !$text_size || $text_size == '2rem' ? ' selected' : '' ); ?>>Large</option>
                <option value="1.75rem"<?php echo ( !$text_size || $text_size == '1.75rem' ? ' selected' : '' ); ?>>Medium</option>
                <option value="1.5rem"<?php echo ( !$text_size || $text_size == '1.5rem' ? ' selected' : '' ); ?>>Small</option>
                <option value="1.2rem"<?php echo ( !$text_size || $text_size == '1.2rem' ? ' selected' : '' ); ?>>Tiny</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text_color' ) ); ?>"><?php esc_attr_e( 'Content Color:', 'cooked' ); ?></label>
            <input class="widefat basil-color-field" id="<?php echo esc_attr( $this->get_field_id( 'text_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text_color' ) ); ?>" type="text" value="<?php echo esc_attr( $text_color ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'link_color' ) ); ?>"><?php esc_attr_e( 'Content Link Color:', 'cooked' ); ?></label>
            <input class="widefat basil-color-field" id="<?php echo esc_attr( $this->get_field_id( 'link_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link_color' ) ); ?>" type="text" value="<?php echo esc_attr( $link_color ); ?>">
        </p>

        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        $allowed_html = apply_filters( 'basil_widgets_allowed_html', [
            'a' => [ 'target' => [], 'href' => [], 'title' => [], 'class' => [] ],
            'br' => [],
            'em' => [],
            'strong' => [],
            'span' => [ 'style' => [], 'class' => [] ]
        ]);

        $content = wp_kses( $new_instance['content'], $allowed_html );

        $instance['widget_padding'] = !empty( $new_instance['widget_padding'] ) ? sanitize_text_field( $new_instance['widget_padding'] ) : 60;
        $instance['show'] = !empty( $new_instance['show'] ) ? sanitize_text_field( $new_instance['show'] ) : 3;
        $instance['background_color'] = !empty( $new_instance['background_color'] ) ? sanitize_hex_color( $new_instance['background_color'] ) : '';
        $instance['accent_color'] = !empty( $new_instance['accent_color'] ) ? sanitize_hex_color( $new_instance['accent_color'] ) :  '#0abe5f';
        $instance['title'] = !empty( $new_instance['title'] ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['title_size'] = !empty( $new_instance['title_size'] ) ? sanitize_text_field( $new_instance['title_size'] ) : '3rem';
        $instance['title_color'] = !empty( $new_instance['title_color'] ) ? sanitize_hex_color( $new_instance['title_color'] ) : '#ffffff';
        $instance['content'] = !empty( $content ) ? $content : '';
        $instance['text_size'] = !empty( $new_instance['text_size'] ) ? sanitize_text_field( $new_instance['text_size'] ) : '1.5rem';
        $instance['text_color'] = !empty( $new_instance['text_color'] ) ? sanitize_hex_color( $new_instance['text_color'] ) : '#ffffff';
        $instance['link_color'] = !empty( $new_instance['link_color'] ) ? sanitize_hex_color( $new_instance['link_color'] ) : '#0abe5f';

        return $instance;
    }

}
