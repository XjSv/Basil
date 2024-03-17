<?php

function basil_recipe_finder( $slider_recipes = '' ) {
    echo '<select multiple id="basil-recipe-finder" name="_basil_page_settings[slider_recipes][]" class="recipes" placeholder="Choose recipe(s)...">';
    if ( !empty( $slider_recipes ) ):
        foreach( $slider_recipes as $recipe ):
            $_recipe = Cooked_Recipes::get( $recipe, true );
            echo '<option selected="selected" value="' . esc_attr( $_recipe['id'] ) . '">' . esc_html( $_recipe['title'] ) . '</option>';
        endforeach;
    endif;
    echo '</select>';
}

add_action( 'admin_enqueue_scripts', 'basil_recipe_finder_scripts' );
function basil_recipe_finder_scripts( $hook ) {

    global $post;

    if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
        if ( 'page' === $post->post_type ) {

            $brf_vars['rest_url'] = rest_url( 'wp/v2/cooked_recipe' );

            wp_enqueue_script( 'selectize', BX_THEME_URL . '/scripts/vendor/selectize/selectize.min.js', array('jquery'), '0.12.4', true );
            wp_enqueue_style( 'selectize', BX_THEME_URL . '/css/vendor/selectize/selectize.css' );
            wp_enqueue_style( 'basil-selectize', BX_THEME_URL . '/css/vendor/selectize/basil-selectize.css' );

            wp_register_script( 'basil-recipe-finder', BX_THEME_URL . '/scripts/recipe-finder.js', array('jquery'), BX_THEME_VERSION, true );
            wp_localize_script( 'basil-recipe-finder', 'brf_vars', $brf_vars );
            wp_enqueue_script( 'basil-recipe-finder' );

        }
    }

}
