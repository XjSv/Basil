<?php

use Carbon_Fields\Widget;
use Carbon_Fields\Field;

class Basil_Homepage_Recipes extends Widget {

    function __construct() {
        $this->setup( 'basil_homepage_recipes', 'Homepage - Recipes', 'Display your recipes.', array(
            Field::make( 'select', 'widget_padding', 'Widget Padding' )->add_options( array(
                    '100' => '100',
                    '90' => '90',
                    '80' => '80',
                    '70' => '70',
                    '60' => '60',
                    '50' => '50',
                    '40' => '40',
                ) )->set_default_value( '60' ),
            Field::make( 'select', 'columns', 'Columns' )->add_options( array(
                    '4' => '4',
                    '3' => '3',
                    '2' => '2',
                ) )->set_default_value( '3' ),
            Field::make( 'select', 'orderby', 'Order By' )->add_options( array(
                    'date' => 'Published Date',
                    'title' => 'Recipe Title',
                    'rating' => 'Rating'
                ) )->set_default_value( 'date' ),
            Field::make( 'select', 'order', 'Order' )->add_options( array(
                    'asc' => 'Ascending',
                    'desc' => 'Descending',
                ) )->set_default_value( 'desc' ),
            Field::make( 'select', 'show', 'Show' )->add_options( array(
                    '30' => '30 Recipes',
                    '29' => '29 Recipes',
                    '28' => '28 Recipes',
                    '27' => '27 Recipes',
                    '26' => '26 Recipes',
                    '25' => '25 Recipes',
                    '24' => '24 Recipes',
                    '22' => '22 Recipes',
                    '21' => '21 Recipes',
                    '20' => '20 Recipes',
                    '18' => '18 Recipes',
                    '16' => '16 Recipes',
                    '15' => '15 Recipes',
                    '14' => '14 Recipes',
                    '12' => '12 Recipes',
                    '10' => '10 Recipes',
                    '9' => '9 Recipes',
                    '8' => '8 Recipes',
                    '7' => '7 Recipes',
                    '6' => '6 Recipes',
                    '5' => '5 Recipes',
                    '4' => '4 Recipes',
                    '3' => '3 Recipes',
                    '2' => '2 Recipes',
                ) )->set_default_value( '3' ),
            Field::make( 'select', 'layout', 'Layout' )->add_options( array(
                    'full' => 'Full Width',
                    'fitness' => 'Fitness',
                    'modern' => 'Modern',
                    'grid' => 'Grid',
                ) )->set_default_value( 'grid' ),
            Field::make( 'select', 'pagination', 'Pagination' )->add_options( array(
                    'true' => 'Show',
                    'false' => 'Hide',
                ) )->set_default_value( 'false' ),
            Field::make( 'select', 'search', 'Search' )->add_options( array(
                    'true' => 'Show',
                    'false' => 'Hide',
                ) )->set_default_value( 'false' ),
            Field::make( 'color', 'background_color', 'Background Color' )->set_default_value( '' ),
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
            if ( $instance['layout'] != 'grid' ):
                echo '#basilRecipesWidget-' . esc_attr( $rand_id ) . ' { padding: ' . esc_attr( $instance['widget_padding'] ) . 'px 0 calc( ' . esc_attr( $instance['widget_padding'] ) . 'px - 3% ); }';
            else:
                echo '#basilRecipesWidget-' . esc_attr( $rand_id ) . ' { padding: ' . esc_attr( $instance['widget_padding'] ) . 'px 0 calc( ' . esc_attr( $instance['widget_padding'] ) . 'px - 1% ); }';
            endif;
            echo '#basilRecipesWidget-' . esc_attr( $rand_id ) . ' { background:' . esc_attr( $instance['background_color'] ) . '; }';
            echo '#basilRecipesWidget-' . esc_attr( $rand_id ) . ' .basil-recipes-content { font-size:' . esc_attr( $instance['text_size'] ) . '; color:' . esc_attr( $instance['text_color'] ) . '; margin:0 0 calc( ' . esc_attr( $instance['widget_padding'] ) . 'px - 3% ); }';
            echo '#basilRecipesWidget-' . esc_attr( $rand_id ) . ' .basil-recipes-content a { color:' . esc_attr( $instance['link_color'] ) . ' }';
            echo '#basilRecipesWidget-' . esc_attr( $rand_id ) . ' .basil-recipes-content a:hover { color:' . esc_attr( $instance['text_color'] ) . ' }';
            echo '#basilRecipesWidget-' . esc_attr( $rand_id ) . ' .basil-recipes-title { font-size:' . esc_attr( $instance['title_size'] ) . '; color:' . esc_attr( $instance['title_color'] ) . '; margin:0 0 1rem }';
            echo '.widget #basilRecipesWidget-' . esc_attr( $rand_id ) . ' .cooked-recipe-card { margin:0 1.5% 3%; }';
        echo '</style>';

        echo '<div id="basilRecipesWidget-' . esc_attr( $rand_id ) . '" class="basil-recipes-widget">';
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
}