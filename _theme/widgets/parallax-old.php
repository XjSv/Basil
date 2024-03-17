<?php

use Carbon_Fields\Widget;
use Carbon_Fields\Field;

class Basil_Homepage_Parallax extends Widget {

    function __construct(){
        $this->setup( 'basil_homepage_parallax', 'Homepage - Parallax', 'Displays a parallax image block with optional content.', array(
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
            Field::make( 'select', 'widget_padding', 'Widget Padding' )->add_options( array(
                    '100' => '100',
                    '90' => '90',
                    '80' => '80',
                    '70' => '70',
                    '60' => '60',
                    '50' => '50',
                    '40' => '40',
                ) )->set_default_value( '50' ),
            Field::make( 'color', 'text_color', 'Content Color' )->set_default_value( '#ffffff' ),
            Field::make( 'color', 'link_color', 'Content Link Color' )->set_default_value( '#0abe5f' ),
            Field::make( 'image', 'attachment_id', 'Image' ),
            Field::make( 'color', 'overlay_color', 'Overlay Color' )->set_default_value( '#333333' ),
            Field::make( 'select', 'overlay_opacity', 'Overlay Opacity' )
                ->add_options( array(
                    '1' => '100%',
                    '0.9' => '90%',
                    '0.8' => '80%',
                    '0.7' => '70%',
                    '0.6' => '60%',
                    '0.5' => '50%',
                    '0.4' => '40%',
                    '0.3' => '30%',
                    '0.2' => '20%',
                    '0.1' => '10%',
                    '0' => '0%',
                ) )
        ) );
    }

    // Called when rendering the widget in the front-end
    function front_end( $args, $instance ) {

        global $parallax_z_index;

        $image_url = wp_get_attachment_image_src( $instance['attachment_id'], 'basil_page_banner' );
        $rand_id = rand(1000,9999);
        $allowed_html = apply_filters( 'basil_widgets_allowed_html', array( 'a' => array( 'target' => array(), 'href' => array(), 'title' => array(), 'class' => array() ), 'br' => array(), 'em' => array(), 'strong' => array(), 'span' => array( 'style' => array(), 'class' => array() ) ) );

        if ( $parallax_z_index ):
            $parallax_z_index = $parallax_z_index - 10;
        else:
            $parallax_z_index = 200;
        endif;

        echo '<style>';
            echo '#basilParallaxWidget-' . esc_attr( $rand_id ) . ' { padding: ' . esc_attr( $instance['widget_padding'] ) . 'px 0 calc( ' . esc_attr( $instance['widget_padding'] ) . 'px - 1rem ); }';
            echo '#basilParallaxWidget-' . esc_attr( $rand_id ) . ' .basil-parallax-content { font-size:' . esc_attr( $instance['text_size'] ) . '; color:' . esc_attr( $instance['text_color'] ) . '; margin:0 0 1rem; }';
            echo '#basilParallaxWidget-' . esc_attr( $rand_id ) . ' .basil-parallax-content a { color:' . esc_attr( $instance['link_color'] ) . ' }';
            echo '#basilParallaxWidget-' . esc_attr( $rand_id ) . ' .basil-parallax-content a:hover { color:' . esc_attr( $instance['text_color'] ) . ' }';
            echo '#basilParallaxWidget-' . esc_attr( $rand_id ) . ' .basil-parallax-title { font-size:' . esc_attr( $instance['title_size'] ) . '; color:' . esc_attr( $instance['title_color'] ) . '; margin:0 0 1rem }';
            echo '#basilParallaxWidget-' . esc_attr( $rand_id ) . ' .basil-parallax-overlay { background:' . esc_attr( $instance['overlay_color'] ) . '; opacity:' . esc_attr( $instance['overlay_opacity'] ) . '; }';
        echo '</style>';

        echo ( $image_url ? '<div id="basilParallaxWidget-' . esc_attr( $rand_id ) . '" class="basil-parallax basil-parallax-widget" data-z-index="-' . $parallax_z_index . '" data-parallax="scroll" data-bleed="0" data-speed="0.5" natural-width="1400" data-image-src="' . $image_url[0] . '">' : '<div id="basilParallaxWidget-' . esc_attr( $rand_id ) . '" class="basil-parallax-widget">' );
            echo '<div class="basil-parallax-overlay"></div>';
            echo '<div class="basil-shell">';
                if ( ! empty( $instance['title'] ) ):
                    echo '<div class="basil-parallax-title">' . wp_kses( $instance['title'], $allowed_html ) . '</div>';
                endif;
                echo '<div class="basil-parallax-content">' . wp_kses( $instance['content'], $allowed_html ) . '</div>';
            echo '</div>';
        echo '</div>';

    }
}