<?php

class Basil_Homepage_Content_Columns extends WP_Widget {

    public function __construct() {
        global $pagenow;

        $widget_ops = [
            'classname' => 'Basil_Homepage_Content_Columns',
            'description' => 'Display 2-4 columns of content.',
        ];

        // Enqueue admin scrips and styles, only in the the old widgets page.
		if ( 'widgets.php' === $pagenow ) {
			add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_admin_scripts' ] );
		}

        parent::__construct( 'Basil_Homepage_Content_Columns', 'Homepage - Content Columns', $widget_ops );
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
            'a' => [ 'target' => [], 'href' => [],  'title' => [], 'class' => [] ],
            'br' => [],
            'em' => [],
            'strong' => [],
            'span' => [ 'style' => [], 'class' => [] ]
        ]);

        echo '<style>';
            echo '#basilColumnWidget-' . $instance_num . ' { padding: ' . esc_attr( $instance['widget_padding'] ) . 'px 0; }';
            echo '#basilColumnWidget-' . $instance_num . ' { background:' . esc_attr( $instance['background_color'] ) . '; color:' . esc_attr( $instance['text_color'] ) . '; }';
            echo '#basilColumnWidget-' . $instance_num . ' .basil-column-content-title { color:' . esc_attr( $instance['text_color'] ) . '; }';
            echo '#basilColumnWidget-' . $instance_num . ' p > a { color:' . esc_attr( $instance['link_color'] ) . '; }';
            echo '#basilColumnWidget-' . $instance_num . ' p > a:hover { color:' . esc_attr( $instance['text_color'] ) . '; }';
            echo '#basilColumnWidget-' . $instance_num . ' .basil-column-content-title { color:' . esc_attr( $instance['title_color'] ) . '; font-size:' . esc_attr( $instance['title_size'] ) . '; text-align:' . esc_attr( $instance['text_align'] ) . '; line-height:1.5; }';
            echo '#basilColumnWidget-' . $instance_num . ' .basil-column-content-content > p { font-size:' . esc_attr( $instance['text_size'] ) . '; text-align:' . esc_attr( $instance['text_align'] ) . '; line-height:1.6; }';
        echo '</style>';

        echo '<div id="basilColumnWidget-' . $instance_num . '" class="basil-column-content-widget">';
            echo '<div class="basil-shell">';
            foreach( $instance['title'] as  $key => $title ):
                $image_id = $instance['image_id'][$key];
                $content = $instance['content'][$key];
                $image_url = wp_get_attachment_image_src( $image_id, 'basil_page_thumbnail' );

                echo '<div class="basil-column-content-column">';
                    echo '<div class="basil-column-content-title">' . wp_kses( $title, $allowed_html ) . '</div>';
                    echo '<div class="basil-column-content-image"><img src="' . esc_attr( $image_url[0] ) . '"></div>';
                    echo '<div class="basil-column-content-content">' . do_shortcode( wpautop( wp_kses( $content, $allowed_html ) ) ) . '</div>';
                echo '</div>';
            endforeach;
            echo '</div>';
        echo '</div>';
    }

    public function form( $instance ) {
        $titles = !empty( $instance['title'] ) ? $instance['title'] : [ 'Column Title' ];
        $image_ids = !empty( $instance['image_id'] ) ? $instance['image_id'] : [ '' ];
        $attachment_uris = !empty( $instance['attachment_uri'] ) ? $instance['attachment_uri'] : [ '' ];
        $contents = !empty( $instance['content'] ) ? $instance['content'] : [ 'This is the column content.' ];
        $title_size = !empty( $instance['title_size'] ) ? $instance['title_size'] : '1.5rem';
        $text_size = !empty( $instance['text_size'] ) ? $instance['text_size'] : '1.1rem';
        $text_align = !empty( $instance['text_align'] ) ? $instance['text_align'] : 'left';
        $widget_padding = !empty( $instance['widget_padding'] ) ? $instance['widget_padding'] : 60;
        $background_color = !empty( $instance['background_color'] ) ? $instance['background_color'] : '#ffffff';
        $title_color = !empty( $instance['title_color'] ) ? $instance['title_color'] : '#333333';
        $text_color = !empty( $instance['text_color'] ) ? $instance['text_color'] : '#333333';
        $link_color = !empty( $instance['link_color'] ) ? $instance['link_color'] : '#0abe5f';

        $allowed_html = apply_filters( 'basil_widgets_allowed_html', [
            'a' => [ 'target' => [], 'href' => [], 'title' => [], 'class' => [] ],
            'br' => [],
            'em' => [],
            'strong' => [],
            'span' => [ 'style' => [], 'class' => [] ]
        ]);
        ?>

        <div class="basil-complex-field">
            <?php foreach ( $titles as $key => $title ): ?>
            <div class="basil-field-group">
                <p>
                    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'cooked' ); ?></label>
                    <input class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>[]" type="text" value="<?php echo esc_attr( $title ); ?>">
                </p>

                <div class="basil-image-upload-field">
                    <input type="button" name="<?php echo esc_attr( $this->get_field_name( 'image_id' ) ); ?>" class="basil-image-upload-btn button button-primary" value="Select Image" />
                    <label for="<?php echo esc_attr( $this->get_field_name( 'image_id' ) ); ?>" class="basil-image-upload-label">
                        <span class="basil-image-upload-label-text"><?php esc_attr_e( 'Image:', 'cooked' ); ?></span>
                        <div class="basil-image-upload-preview">
                            <img class="basil-image-upload-preview" src="<?php echo esc_attr( $attachment_uris[$key] ); ?>" alt="Image Preview" />
                            <?php if ( !empty($attachment_uris[$key]) ): ?>
                                <button class="basil-image-upload-clr-btn" aria-label="Clear Image">&times;</button>
                            <?php endif; ?>
                        </div>
                    </label>
                    <input class="basil-image-upload-image_id" name="<?php echo esc_attr( $this->get_field_name( 'image_id' ) ); ?>[]" type="hidden" value="<?php echo esc_attr( $image_ids[$key] ); ?>">
                    <input class="basil-image-upload-attachment_uri" name="<?php echo esc_attr( $this->get_field_name( 'attachment_uri' ) ); ?>[]" type="hidden" value="<?php echo esc_attr( $attachment_uris[$key] ); ?>">
                </div>

                <p>
                    <label for="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>"><?php esc_attr_e( 'Content:', 'cooked' ); ?></label>
                    <textarea class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'content' ) ); ?>[]"><?php echo wp_kses($contents[$key], $allowed_html); ?></textarea>
                </p>
                <?php if ( $key >= 1 ): ?>
                    <button class="basil-remove-field-group button button-secondary">Remove</button>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <button class="basil-add-field-group button button-primary">Add Column</button>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title_size' ) ); ?>"><?php esc_attr_e( 'Title Size:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title_size' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title_size' ) ); ?>">
                <option value="2.5rem"<?php echo ( !$title_size || $title_size == '2.5rem' ? ' selected' : '' ); ?>>Huge</option>
                <option value="2rem"<?php echo ( !$title_size || $title_size == '2rem' ? ' selected' : '' ); ?>>Big</option>
                <option value="1.75rem"<?php echo ( !$title_size || $title_size == '1.75rem' ? ' selected' : '' ); ?>>Large</option>
                <option value="1.5rem"<?php echo ( !$title_size || $title_size == '1.5rem' ? ' selected' : '' ); ?>>Medium</option>
                <option value="1.25rem"<?php echo ( !$title_size || $title_size == '1.25rem' ? ' selected' : '' ); ?>>Small</option>
                <option value="1rem"<?php echo ( !$title_size || $title_size == '1rem' ? ' selected' : '' ); ?>>Tiny</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text_size' ) ); ?>"><?php esc_attr_e( 'Text Size:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text_size' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text_size' ) ); ?>">
                <option value="2rem"<?php echo ( !$text_size || $text_size == '2rem' ? ' selected' : '' ); ?>>Huge</option>
                <option value="1.75rem"<?php echo ( !$text_size || $text_size == '1.75rem' ? ' selected' : '' ); ?>>Big</option>
                <option value="1.5rem"<?php echo ( !$text_size || $text_size == '1.5rem' ? ' selected' : '' ); ?>>Large</option>
                <option value="1.3rem"<?php echo ( !$text_size || $text_size == '1.3rem' ? ' selected' : '' ); ?>>Medium</option>
                <option value="1.1rem"<?php echo ( !$text_size || $text_size == '1.1rem' ? ' selected' : '' ); ?>>Small</option>
                <option value="1rem"<?php echo ( !$text_size || $text_size == '1rem' ? ' selected' : '' ); ?>>Tiny</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text_align' ) ); ?>"><?php esc_attr_e( 'Text Align:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text_align' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text_align' ) ); ?>">
                <option value="left"<?php echo ( !$text_align || $text_align == 'left' ? ' selected' : '' ); ?>>Left</option>
                <option value="center"<?php echo ( !$text_align || $text_align == 'center' ? ' selected' : '' ); ?>>Center</option>
                <option value="right"<?php echo ( !$text_align || $text_align == 'right' ? ' selected' : '' ); ?>>Right</option>
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
            <label for="<?php echo esc_attr( $this->get_field_id( 'background_color' ) ); ?>"><?php esc_attr_e( 'Background Color:', 'cooked' ); ?></label>
            <input class="widefat basil-color-field" id="<?php echo esc_attr( $this->get_field_id( 'background_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'background_color' ) ); ?>" type="text" value="<?php echo esc_attr( $background_color ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title_color' ) ); ?>"><?php esc_attr_e( 'Title Color:', 'cooked' ); ?></label>
            <input class="widefat basil-color-field" id="<?php echo esc_attr( $this->get_field_id( 'title_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title_color' ) ); ?>" type="text" value="<?php echo esc_attr( $title_color ); ?>">
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

        $instance['title'] = array_map(function($title) use ($allowed_html) {
            return !empty( $title ) ? wp_kses($title, $allowed_html) : '';
        }, $new_instance['title']);

        $instance['image_id'] = !empty( $new_instance['image_id'] ) ? array_map('sanitize_text_field', $new_instance['image_id']) : [];
        $instance['attachment_uri'] = !empty( $new_instance['attachment_uri'] ) ? array_map('sanitize_url', $new_instance['image_id']) : [];

        $instance['content'] = array_map(function($content) use ($allowed_html) {
            return !empty( $content ) ? wp_kses($content, $allowed_html) : '';
        }, $new_instance['content']);

        $instance['title_size'] = !empty( $new_instance['title_size'] ) ? sanitize_text_field( $new_instance['title_size'] ) : '1.5rem';
        $instance['text_size'] = !empty( $new_instance['text_size'] ) ? sanitize_text_field( $new_instance['text_size'] ) : '1.1rem';
        $instance['text_align'] = !empty( $new_instance['text_align'] ) ? sanitize_text_field( $new_instance['text_align'] ) : 'left';
        $instance['widget_padding'] = !empty( $new_instance['widget_padding'] ) ? sanitize_text_field( $new_instance['widget_padding'] ) : 60;
        $instance['background_color'] = !empty( $new_instance['background_color'] ) ? sanitize_hex_color( $new_instance['background_color'] ) : '';
        $instance['title_color'] = !empty( $new_instance['title_color'] ) ? sanitize_hex_color( $new_instance['title_color'] ) : '#333333';
        $instance['text_color'] = !empty( $new_instance['text_color'] ) ? sanitize_hex_color( $new_instance['text_color'] ) : '#333333';
        $instance['link_color'] = !empty( $new_instance['link_color'] ) ? sanitize_hex_color( $new_instance['link_color'] ) : '#0abe5f';

        return $instance;
    }

}
