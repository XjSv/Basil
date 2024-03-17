<?php

class Basil_Homepage_Recipes extends WP_Widget {

    public function __construct() {
        global $pagenow;

        $widget_ops = [
            'classname' => 'Basil_Homepage_Recipes',
            'description' => 'Display your recipes.',
        ];

        // Enqueue admin scrips and styles, only in the the old widgets page.
		if ( 'widgets.php' === $pagenow ) {
			add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_admin_scripts' ] );
		}

        parent::__construct( 'Basil_Homepage_Recipes', 'Homepage - Recipes', $widget_ops );
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
            if ( $instance['layout'] != 'grid' ):
                echo '#basilRecipesWidget-' . $instance_num . ' { padding: ' . esc_attr( $instance['widget_padding'] ) . 'px 0 calc( ' . esc_attr( $instance['widget_padding'] ) . 'px - 3% ); }';
            else:
                echo '#basilRecipesWidget-' . $instance_num . ' { padding: ' . esc_attr( $instance['widget_padding'] ) . 'px 0 calc( ' . esc_attr( $instance['widget_padding'] ) . 'px - 1% ); }';
            endif;
            echo '#basilRecipesWidget-' . $instance_num . ' { background:' . esc_attr( $instance['background_color'] ) . '; }';
            echo '#basilRecipesWidget-' . $instance_num . ' .basil-recipes-content { font-size:' . esc_attr( $instance['text_size'] ) . '; color:' . esc_attr( $instance['text_color'] ) . '; margin:0 0 calc( ' . esc_attr( $instance['widget_padding'] ) . 'px - 3% ); }';
            echo '#basilRecipesWidget-' . $instance_num . ' .basil-recipes-content a { color:' . esc_attr( $instance['link_color'] ) . ' }';
            echo '#basilRecipesWidget-' . $instance_num . ' .basil-recipes-content a:hover { color:' . esc_attr( $instance['text_color'] ) . ' }';
            echo '#basilRecipesWidget-' . $instance_num . ' .basil-recipes-title { font-size:' . esc_attr( $instance['title_size'] ) . '; color:' . esc_attr( $instance['title_color'] ) . '; margin:0 0 1rem }';
            echo '.widget #basilRecipesWidget-' . $instance_num . ' .cooked-recipe-card { margin:0 1.5% 3%; }';
        echo '</style>';

        echo '<div id="basilRecipesWidget-' . $instance_num . '" class="basil-recipes-widget">';
            echo '<div class="basil-shell">';

                if ( ! empty( $instance['title'] ) ):
                    echo '<div class="basil-recipes-title">' . wp_kses( $instance['title'], $allowed_html ) . '</div>';
                endif;
                if ( ! empty( $instance['content'] ) ):
                    echo '<div class="basil-recipes-content">' . wp_kses( $instance['content'], $allowed_html ) . '</div>';
                endif;

                echo do_shortcode( '[cooked-browse order="' . $instance['order'] . '" orderby="' . $instance['orderby'] . '" layout="' . $instance['layout'] . '" pagination="' . $instance['pagination'] . '" search="' . $instance['search'] . '" columns="' . $instance['columns'] . '" show="' . $instance['show'] . '"]' );

            echo '</div>';
        echo '</div>';
    }

    public function form( $instance ) {
        $widget_padding = !empty( $instance['widget_padding'] ) ? $instance['widget_padding'] : 60;
        $columns = !empty( $instance['columns'] ) ? $instance['columns'] : 3;
        $orderby = !empty( $instance['orderby'] ) ? $instance['orderby'] : 'date';
        $order = !empty( $instance['order'] ) ? $instance['order'] : 'desc';
        $show = !empty( $instance['show'] ) ? $instance['show'] : 3;
        $layout = !empty( $instance['layout'] ) ? $instance['layout'] : 'grid';
        $pagination = !empty( $instance['pagination'] ) ? $instance['pagination'] : 'false';
        $search = !empty( $instance['search'] ) ? $instance['search'] : 'false';
        $background_color = !empty( $instance['background_color'] ) ? $instance['background_color'] : '';
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
            <label for="<?php echo esc_attr( $this->get_field_id( 'columns' ) ); ?>"><?php esc_attr_e( 'Columns:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'columns' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'columns' ) ); ?>">
                <option value="4"<?php echo ( !$columns || $columns == '4' ? ' selected' : '' ); ?>>4</option>
                <option value="3"<?php echo ( !$columns || $columns == '3' ? ' selected' : '' ); ?>>3</option>
                <option value="2"<?php echo ( !$columns || $columns == '2' ? ' selected' : '' ); ?>>2</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'orderby' ) ); ?>"><?php esc_attr_e( 'Sorted by:', 'cooked' ); ?></label>
            <select class="cooked-widget-conditional widefat" id="<?php echo esc_attr( $this->get_field_id( 'orderby' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'orderby' ) ); ?>">
                <option value="date"<?php echo ( !$orderby || $orderby == 'date' ? ' selected' : '' ); ?>><?php esc_html_e( 'Published Date', 'cooked' ); ?></option>
                <option value="title"<?php echo ( !$orderby || $orderby == 'title' ? ' selected' : '' ); ?>><?php esc_html_e( 'Published Title', 'cooked' ); ?></option>
                <option value="rating"<?php echo ( !$orderby || $orderby == 'rating' ? ' selected' : '' ); ?>><?php esc_html_e( 'Rating', 'cooked' ); ?></option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'order' ) ); ?>"><?php esc_attr_e( 'Order:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'order' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'order' ) ); ?>">
                <option value="asc"<?php echo ( !$order || $order == 'asc' ? ' selected' : '' ); ?>>Ascending</option>
                <option value="desc"<?php echo ( !$order || $order == 'desc' ? ' selected' : '' ); ?>>Descending</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'show' ) ); ?>"><?php esc_attr_e( 'Show:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'show' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show' ) ); ?>">
                <option value="30"<?php echo ( !$show || $show == '30' ? ' selected' : '' ); ?>>30 Recipes</option>
                <option value="29"<?php echo ( !$show || $show == '29' ? ' selected' : '' ); ?>>29 Recipes</option>
                <option value="28"<?php echo ( !$show || $show == '28' ? ' selected' : '' ); ?>>28 Recipes</option>
                <option value="27"<?php echo ( !$show || $show == '27' ? ' selected' : '' ); ?>>27 Recipes</option>
                <option value="26"<?php echo ( !$show || $show == '26' ? ' selected' : '' ); ?>>26 Recipes</option>
                <option value="25"<?php echo ( !$show || $show == '25' ? ' selected' : '' ); ?>>25 Recipes</option>
                <option value="24"<?php echo ( !$show || $show == '24' ? ' selected' : '' ); ?>>24 Recipes</option>
                <option value="23"<?php echo ( !$show || $show == '23' ? ' selected' : '' ); ?>>23 Recipes</option>
                <option value="22"<?php echo ( !$show || $show == '22' ? ' selected' : '' ); ?>>22 Recipes</option>
                <option value="21"<?php echo ( !$show || $show == '21' ? ' selected' : '' ); ?>>21 Recipes</option>
                <option value="20"<?php echo ( !$show || $show == '20' ? ' selected' : '' ); ?>>20 Recipes</option>
                <option value="19"<?php echo ( !$show || $show == '19' ? ' selected' : '' ); ?>>19 Recipes</option>
                <option value="18"<?php echo ( !$show || $show == '18' ? ' selected' : '' ); ?>>18 Recipes</option>
                <option value="17"<?php echo ( !$show || $show == '17' ? ' selected' : '' ); ?>>17 Recipes</option>
                <option value="16"<?php echo ( !$show || $show == '16' ? ' selected' : '' ); ?>>16 Recipes</option>
                <option value="15"<?php echo ( !$show || $show == '15' ? ' selected' : '' ); ?>>15 Recipes</option>
                <option value="14"<?php echo ( !$show || $show == '14' ? ' selected' : '' ); ?>>14 Recipes</option>
                <option value="13"<?php echo ( !$show || $show == '13' ? ' selected' : '' ); ?>>13 Recipes</option>
                <option value="12"<?php echo ( !$show || $show == '12' ? ' selected' : '' ); ?>>12 Recipes</option>
                <option value="11"<?php echo ( !$show || $show == '11' ? ' selected' : '' ); ?>>11 Recipes</option>
                <option value="10"<?php echo ( !$show || $show == '10' ? ' selected' : '' ); ?>>10 Recipes</option>
                <option value="9"<?php echo ( !$show || $show == '9' ? ' selected' : '' ); ?>>9 Recipes</option>
                <option value="8"<?php echo ( !$show || $show == '8' ? ' selected' : '' ); ?>>8 Recipes</option>
                <option value="7"<?php echo ( !$show || $show == '7' ? ' selected' : '' ); ?>>7 Recipes</option>
                <option value="6"<?php echo ( !$show || $show == '6' ? ' selected' : '' ); ?>>6 Recipes</option>
                <option value="5"<?php echo ( !$show || $show == '5' ? ' selected' : '' ); ?>>5 Recipes</option>
                <option value="4"<?php echo ( !$show || $show == '4' ? ' selected' : '' ); ?>>4 Recipes</option>
                <option value="3"<?php echo ( !$show || $show == '3' ? ' selected' : '' ); ?>>3 Recipes</option>
                <option value="2"<?php echo ( !$show || $show == '2' ? ' selected' : '' ); ?>>2 Recipes</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'layout' ) ); ?>"><?php esc_attr_e( 'Layout:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'layout' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'layout' ) ); ?>">
                <option value="full"<?php echo ( !$layout || $layout == 'full' ? ' selected' : '' ); ?>>Full Width</option>
                <option value="fitness"<?php echo ( !$layout || $layout == 'fitness' ? ' selected' : '' ); ?>>Fitness</option>
                <option value="modern"<?php echo ( !$layout || $layout == 'modern' ? ' selected' : '' ); ?>>Modern</option>
                <option value="grid"<?php echo ( !$layout || $layout == 'grid' ? ' selected' : '' ); ?>>Grid</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'pagination' ) ); ?>"><?php esc_attr_e( 'Pagination:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pagination' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pagination' ) ); ?>">
                <option value="true"<?php echo ( !$pagination || $pagination == 'true' ? ' selected' : '' ); ?>>Show</option>
                <option value="false"<?php echo ( !$pagination || $pagination == 'false' ? ' selected' : '' ); ?>>Hide</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'search' ) ); ?>"><?php esc_attr_e( 'Search:', 'cooked' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'search' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'search' ) ); ?>">
                <option value="true"<?php echo ( !$search || $search == 'true' ? ' selected' : '' ); ?>>Show</option>
                <option value="false"<?php echo ( !$search || $search == 'false' ? ' selected' : '' ); ?>>Hide</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'background_color' ) ); ?>"><?php esc_attr_e( 'Background Color:', 'cooked' ); ?></label>
            <input class="widefat basil-color-field" id="<?php echo esc_attr( $this->get_field_id( 'background_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'background_color' ) ); ?>" type="text" value="<?php echo esc_attr( $background_color ); ?>">
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

        $title = wp_kses( $new_instance['title'], $allowed_html );
        $content = wp_kses( $new_instance['content'], $allowed_html );

        $instance['widget_padding'] = !empty( $new_instance['widget_padding'] ) ? sanitize_text_field( $new_instance['widget_padding'] ) : 60;
        $instance['columns'] = !empty( $new_instance['columns'] ) ? sanitize_text_field( $new_instance['columns'] ) : 3;
        $instance['order'] = !empty( $new_instance['order'] ) ? sanitize_text_field( $new_instance['order'] ) : 'desc';
        $instance['orderby'] = !empty( $new_instance['orderby'] ) ? sanitize_text_field( $new_instance['orderby'] ) : 'date';
        $instance['show'] = !empty( $new_instance['show'] ) ? sanitize_text_field( $new_instance['show'] ) : 3;
        $instance['layout'] = !empty( $new_instance['layout'] ) ? sanitize_text_field( $new_instance['layout'] ) : 'grid';
        $instance['pagination'] = !empty( $new_instance['pagination'] ) ? sanitize_text_field( $new_instance['pagination'] ) : 'false';
        $instance['search'] = !empty( $new_instance['search'] ) ? sanitize_text_field( $new_instance['search'] ) : 'false';
        $instance['background_color'] = !empty( $new_instance['background_color'] ) ? sanitize_hex_color( $new_instance['background_color'] ) : '';
        $instance['title'] = !empty( $title ) ? $title : '';
        $instance['content'] = !empty( $content ) ? $content : '';
        $instance['title_size'] = !empty( $new_instance['title_size'] ) ? sanitize_text_field( $new_instance['title_size'] ) : '3rem';
        $instance['title_color'] = !empty( $new_instance['title_color'] ) ? sanitize_hex_color( $new_instance['title_color'] ) : '#ffffff';
        $instance['text_size'] = !empty( $new_instance['text_size'] ) ? sanitize_text_field( $new_instance['text_size'] ) : '1.5rem';
        $instance['text_color'] = !empty( $new_instance['text_color'] ) ? sanitize_hex_color( $new_instance['text_color'] ) : '#ffffff';
        $instance['link_color'] = !empty( $new_instance['link_color'] ) ? sanitize_hex_color( $new_instance['link_color'] ) : '#0abe5f';

        return $instance;
    }

}
