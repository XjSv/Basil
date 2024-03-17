<?php

class Basil_Homepage_Parallax extends WP_Widget {

    public function __construct() {
        global $pagenow;

        $widget_ops = [
            'classname' => 'Basil_Homepage_Parallax',
            'description' => 'Displays a parallax image block with optional content.',
        ];

        // Enqueue admin scrips and styles, only in the the old widgets page.
		if ( 'widgets.php' === $pagenow ) {
			add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_admin_scripts' ] );
		}

        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_preview_script' ] );

        parent::__construct( 'Basil_Homepage_Parallax', 'Homepage - Parallax', $widget_ops );
    }


    /**
	 * Script & styles for the widget preview & front-end.
	 */
    function enqueue_preview_script() {
        wp_enqueue_script( 'parallax', bx_theme_file_uri( 'scripts/vendor/parallax.min.js' ), [ 'jquery' ], '1.5.0', true );
	    wp_enqueue_script( 'basil-parallax', bx_theme_file_uri( 'scripts/parallax.js' ), [ 'jquery', 'parallax' ], BX_THEME_VERSION, true );
    }

    /**
	 * Script & styles for admin widget form.
	 */
	public function enqueue_admin_scripts() {
		wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'wp-color-picker' );
        wp_enqueue_script( 'underscore' );
        wp_enqueue_script( 'basil-widgets-form', bx_theme_file_uri( 'scripts/admin/basil-widgets-form.js' ), [ 'jquery', 'underscore', 'wp-color-picker' ], BX_THEME_VERSION, true );
	}

    public function widget( $args, $instance ) {
        global $parallax_z_index;

        $image_url = wp_get_attachment_image_src( esc_attr( $instance['attachment_id'] ), 'basil_page_banner' );
        $instance_num = rand( 1000, 9999 );
        $allowed_html = apply_filters( 'basil_widgets_allowed_html', [
            'a' => [ 'target' => [], 'href' => [], 'title' => [], 'class' => [] ],
            'br' => [],
            'em' => [],
            'strong' => [],
            'span' => [ 'style' => [], 'class' => [] ]
        ]);

        if ( $parallax_z_index ) {
            $parallax_z_index = $parallax_z_index - 10;
        } else {
            $parallax_z_index = 200;
        }

        echo '<style>';
            echo '#basilParallaxWidget-' . $instance_num . ' { padding: ' . esc_attr( $instance['widget_padding'] ) . 'px 0 calc( ' . esc_attr( $instance['widget_padding'] ) . 'px - 1rem ); }';
            echo '#basilParallaxWidget-' . $instance_num . ' .basil-parallax-content { font-size:' . esc_attr( $instance['text_size'] ) . '; color:' . esc_attr( $instance['text_color'] ) . '; margin:0 0 1rem; }';
            echo '#basilParallaxWidget-' . $instance_num . ' .basil-parallax-content a { color:' . esc_attr( $instance['link_color'] ) . ' }';
            echo '#basilParallaxWidget-' . $instance_num . ' .basil-parallax-content a:hover { color:' . esc_attr( $instance['text_color'] ) . ' }';
            echo '#basilParallaxWidget-' . $instance_num . ' .basil-parallax-title { font-size:' . esc_attr( $instance['title_size'] ) . '; color:' . esc_attr( $instance['title_color'] ) . '; margin:0 0 1rem }';
            echo '#basilParallaxWidget-' . $instance_num . ' .basil-parallax-overlay { background:' . esc_attr( $instance['overlay_color'] ) . '; opacity:' . esc_attr( $instance['overlay_opacity'] ) . '; }';
        echo '</style>';

        echo $image_url ? '<div id="basilParallaxWidget-' . $instance_num . '" class="basil-parallax basil-parallax-widget"
            data-z-index="-' . $parallax_z_index . '"
            data-parallax="scroll"
            data-bleed="0"
            data-speed="0.5"
            natural-width="1400"
            data-image-src="' . esc_attr( $image_url[0] ) . '">' : '<div id="basilParallaxWidget-' . $instance_num . '" class="basil-parallax-widget">';
            echo '<div class="basil-parallax-overlay"></div>';
            echo '<div class="basil-shell">';
                if ( ! empty( $instance['title'] ) ):
                    echo '<div class="basil-parallax-title">' . wp_kses( $instance['title'], $allowed_html ) . '</div>';
                endif;
                echo '<div class="basil-parallax-content">' . wp_kses( $instance['content'], $allowed_html ) . '</div>';
            echo '</div>';
        echo '</div>';
    }

    public function form( $instance ) {
        $title = !empty( $instance['title'] ) ? $instance['title'] : '';
        $title_size = !empty( $instance['title_size'] ) ? $instance['title_size'] : '3rem';
        $title_color = !empty( $instance['title_color'] ) ? $instance['title_color'] : '#ffffff';
        $content = !empty( $instance['content'] ) ? $instance['content'] : '';
        $text_size = !empty( $instance['text_size'] ) ? $instance['text_size'] : '1.5rem';
        $widget_padding = !empty( $instance['widget_padding'] ) ? $instance['widget_padding'] : 50;
        $text_color = !empty( $instance['text_color'] ) ? $instance['text_color'] : '#ffffff';
        $link_color = !empty( $instance['link_color'] ) ? $instance['link_color'] : '#0abe5f';
        $attachment_id = !empty( $instance['attachment_id'] ) ? $instance['attachment_id'] : '';
        $attachment_uri = !empty( $instance['attachment_uri'] ) ? $instance['attachment_uri'] : '';
        $overlay_color = !empty( $instance['overlay_color'] ) ? $instance['overlay_color'] : '#333333';
        $overlay_opacity = !empty( $instance['overlay_opacity'] ) ? $instance['overlay_opacity'] : '';
        ?>

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
            <label for="<?php echo esc_attr( $this->get_field_id( 'text_color' ) ); ?>"><?php esc_attr_e( 'Content Color:', 'cooked' ); ?></label>
            <input class="widefat basil-color-field" id="<?php echo esc_attr( $this->get_field_id( 'text_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text_color' ) ); ?>" type="text" value="<?php echo esc_attr( $text_color ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'link_color' ) ); ?>"><?php esc_attr_e( 'Content Link Color:', 'cooked' ); ?></label>
            <input class="widefat basil-color-field" id="<?php echo esc_attr( $this->get_field_id( 'link_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link_color' ) ); ?>" type="text" value="<?php echo esc_attr( $link_color ); ?>">
        </p>

        <p>
            <div class="basil-image-upload-field">
                <input type="button" class="basil-image-upload-btn button button-primary" value="Select Image" />
                <label for="<?php echo esc_attr( $this->get_field_name( 'attachment_id' ) ); ?>" class="basil-image-upload-label">
                    <span class="basil-image-upload-label-text"><?php esc_attr_e( 'Image:', 'cooked' ); ?></span>
                    <div class="basil-image-upload-preview">
                        <img class="basil-image-upload-preview" src="<?php echo esc_attr( $attachment_uri ); ?>" alt="Image Preview" />
                        <button class="basil-image-upload-clr-btn" aria-label="Clear Image">&times;</button>
                    </div>
                </label>
                <input class="basil-image-upload-image_id" name="<?php echo esc_attr( $this->get_field_name( 'attachment_id' ) ); ?>" type="hidden" value="<?php echo esc_attr( $attachment_id ); ?>">
                <input class="basil-image-upload-attachment_uri" name="<?php echo esc_attr( $this->get_field_name( 'attachment_uri' ) ); ?>" type="hidden" value="<?php echo esc_attr( $attachment_uri ); ?>">
            </div>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'overlay_color' ) ); ?>"><?php esc_attr_e( 'Overlay Color:', 'cooked' ); ?></label>
            <input class="widefat basil-color-field" id="<?php echo esc_attr( $this->get_field_id( 'overlay_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'overlay_color' ) ); ?>" type="text" value="<?php echo esc_attr( $overlay_color ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'overlay_opacity' ) ); ?>"><?php esc_attr_e( 'Overlay Opacity:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'overlay_opacity' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'overlay_opacity' ) ); ?>">
                <option value="1"<?php echo !$overlay_opacity || $overlay_opacity == '1' ? ' selected' : ''; ?>>1</option>
                <option value="0.9"<?php echo !$overlay_opacity || $overlay_opacity == '0.9' ? ' selected' : ''; ?>>0.9</option>
                <option value="0.8"<?php echo !$overlay_opacity || $overlay_opacity == '0.8' ? ' selected' : ''; ?>>0.8</option>
                <option value="0.7"<?php echo !$overlay_opacity || $overlay_opacity == '0.7' ? ' selected' : ''; ?>>0.7</option>
                <option value="0.6"<?php echo !$overlay_opacity || $overlay_opacity == '0.6' ? ' selected' : ''; ?>>0.6</option>
                <option value="0.5"<?php echo !$overlay_opacity || $overlay_opacity == '0.5' ? ' selected' : ''; ?>>0.5</option>
                <option value="0.4"<?php echo !$overlay_opacity || $overlay_opacity == '0.4' ? ' selected' : ''; ?>>0.4</option>
                <option value="0.3"<?php echo !$overlay_opacity || $overlay_opacity == '0.3' ? ' selected' : ''; ?>>0.3</option>
                <option value="0.2"<?php echo !$overlay_opacity || $overlay_opacity == '0.2' ? ' selected' : ''; ?>>0.2</option>
                <option value="0.1"<?php echo !$overlay_opacity || $overlay_opacity == '0.1' ? ' selected' : ''; ?>>0.1</option>
                <option value="0"<?php echo !$overlay_opacity || $overlay_opacity == '0' ? ' selected' : ''; ?>>0</option>
            </select>
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

        $title = wp_kses( $new_instance['title'], $allowed_html );
        $content = wp_kses( $new_instance['content'], $allowed_html );

        $instance['title'] = !empty( $title ) ? $title : '';
        $instance['title_size'] = !empty( $new_instance['title_size'] ) ? sanitize_text_field( $new_instance['title_size'] ) : '3rem';
        $instance['title_color'] = !empty( $new_instance['title_color'] ) ? sanitize_hex_color( $new_instance['title_color'] ) : '#ffffff';
        $instance['content'] = !empty( $content ) ? $content : '';
        $instance['text_size'] = !empty( $new_instance['text_size'] ) ? sanitize_text_field( $new_instance['text_size'] ) : '1.5rem';
        $instance['widget_padding'] = !empty( $new_instance['widget_padding'] ) ? sanitize_text_field( $new_instance['widget_padding'] ) : 50;
        $instance['text_color'] = !empty( $new_instance['text_color'] ) ? sanitize_hex_color( $new_instance['text_color'] ) : '#ffffff';
        $instance['link_color'] = !empty( $new_instance['link_color'] ) ? sanitize_hex_color( $new_instance['link_color'] ) : '#0abe5f';
        $instance['attachment_id'] = !empty( $new_instance['attachment_id'] ) ? sanitize_text_field( $new_instance['attachment_id'] ) : '';
        $instance['attachment_uri'] = !empty( $new_instance['attachment_uri'] ) ? sanitize_url( $new_instance['attachment_uri'] ) : '';
        $instance['overlay_color'] = !empty( $new_instance['overlay_color'] ) ? sanitize_hex_color( $new_instance['overlay_color'] ) : '#333333';
        $instance['overlay_opacity'] = !empty( $new_instance['overlay_opacity'] ) ? sanitize_text_field( $new_instance['overlay_opacity'] ) : '';
        return $instance;
    }

}
