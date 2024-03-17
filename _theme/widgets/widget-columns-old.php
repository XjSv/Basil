<?php

use Carbon_Fields\Widget;
use Carbon_Fields\Field;

class Basil_Homepage_Content_Columns extends Widget {

    function __construct(){
        $this->setup( 'basil_homepage_content_columns', 'Homepage - Content Columns', 'Display 2-4 columns of content.', array(

            Field::make( 'complex', 'crb_columns' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'text', 'title', 'Title' )->set_default_value( 'Column Title' ),
                    Field::make( 'image', 'image_id', 'Image' ),
                    Field::make( 'textarea', 'content', 'Content' )->set_default_value( 'This is the column content.' ),
            ) ),
            Field::make( 'select', 'title_size', 'Title Size' )
                ->add_options( array(
                    '2.5rem' => 'Huge',
                    '2rem' => 'Big',
                    '1.75rem' => 'Large',
                    '1.5rem' => 'Medium',
                    '1.25rem' => 'Small',
                    '1rem' => 'Tiny',
                ) )->set_default_value( '1.5rem' ),
            Field::make( 'select', 'text_size', 'Text Size' )
                ->add_options( array(
                    '2rem' => 'Huge',
                    '1.75rem' => 'Big',
                    '1.5rem' => 'Large',
                    '1.3rem' => 'Medium',
                    '1.1rem' => 'Small',
                    '1rem' => 'Tiny',
                ) )->set_default_value( '1.1rem' ),
            Field::make( 'select', 'text_align', 'Text Align' )
                ->add_options( array(
                    'left' => 'Left',
                    'center' => 'Center',
                    'right' => 'Right'
                ) )->set_default_value( 'left' ),
            Field::make( 'select', 'widget_padding', 'Widget Padding' )->add_options( array(
                    '100' => '100',
                    '90' => '90',
                    '80' => '80',
                    '70' => '70',
                    '60' => '60',
                    '50' => '50',
                    '40' => '40',
                ) )->set_default_value( '60' ),
            Field::make( 'color', 'background_color', 'Background Color' )->set_default_value( '#ffffff' ),
            Field::make( 'color', 'title_color', 'Title Color' )->set_default_value( '#333333' ),
            Field::make( 'color', 'text_color', 'Text Color' )->set_default_value( '#333333' ),
            Field::make( 'color', 'link_color', 'Link Color' )->set_default_value( '#0abe5f' ),
        ) );
    }

    // Called when rendering the widget in the front-end
    function front_end( $args, $instance ) {

        $rand_id = rand(1000,9999);
        $allowed_html = apply_filters( 'basil_widgets_allowed_html', array( 'a' => array( 'target' => array(), 'href' => array(), 'title' => array(), 'class' => array() ), 'br' => array(), 'em' => array(), 'strong' => array(), 'span' => array( 'style' => array(), 'class' => array() ) ) );

        echo '<style>';
            echo '#basilColumnWidget-' . esc_attr( $rand_id ) . ' { padding: ' . esc_attr( $instance['widget_padding'] ) . 'px 0; }';
            echo '#basilColumnWidget-' . esc_attr( $rand_id ) . ' { background:' . esc_attr( $instance['background_color'] ) . '; color:' . esc_attr( $instance['text_color'] ) . '; }';
            echo '#basilColumnWidget-' . esc_attr( $rand_id ) . ' .basil-column-content-title { color:' . esc_attr( $instance['text_color'] ) . '; }';
            echo '#basilColumnWidget-' . esc_attr( $rand_id ) . ' p > a { color:' . esc_attr( $instance['link_color'] ) . '; }';
            echo '#basilColumnWidget-' . esc_attr( $rand_id ) . ' p > a:hover { color:' . esc_attr( $instance['text_color'] ) . '; }';
            echo '#basilColumnWidget-' . esc_attr( $rand_id ) . ' .basil-column-content-title { color:' . esc_attr( $instance['title_color'] ) . '; font-size:' . esc_attr( $instance['title_size'] ) . '; text-align:' . esc_attr( $instance['text_align'] ) . '; line-height:1.5; }';
            echo '#basilColumnWidget-' . esc_attr( $rand_id ) . ' .basil-column-content-content > p { font-size:' . esc_attr( $instance['text_size'] ) . '; text-align:' . esc_attr( $instance['text_align'] ) . '; line-height:1.6; }';
        echo '</style>';

        echo '<div id="basilColumnWidget-' . esc_attr( $rand_id ) . '" class="basil-column-content-widget">';
            echo '<div class="basil-shell">';
            foreach( $instance['crb_columns'] as $col ):
                $image_url = wp_get_attachment_image_src( $col['image_id'], 'basil_page_thumbnail' );
                echo '<div class="basil-column-content-column">';
                    echo '<div class="basil-column-content-title">' . wp_kses( $col['title'], $allowed_html ) . '</div>';
                    echo '<div class="basil-column-content-image"><img src="' . esc_attr( $image_url[0] ) . '"></div>';
                    echo '<div class="basil-column-content-content">' . do_shortcode( wpautop( wp_kses( $col['content'], $allowed_html ) ) ) . '</div>';
                echo '</div>';
            endforeach;
            echo '</div>';
        echo '</div>';

    }
}