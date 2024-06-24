<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

include( 'recipe-finder.php' );

/**
 * Basil_Page_Meta Class
 */
class Basil_Page_Meta {

	function __construct() {

		add_action( 'add_meta_boxes', array( &$this, 'add_page_meta_box' ) );
        add_action( 'save_post',      array( &$this, 'save_page_meta_box' ) );

	}

	/**
     * Adds the meta box container.
     */
	public function add_page_meta_box( $post_type ) {

		// Limit meta box to Pages.
        $post_types = apply_filters( 'metabox_post_types' , array( 'page' ) );

        if ( in_array( $post_type, $post_types ) ) {
            add_meta_box( 'basil_page_settings', __( 'Basil Page Settings', 'basil' ), array( &$this, 'render_page_meta_box' ), $post_type, 'normal', 'high' );
        }

	}

    public function sanitize_settings( $settings ){

        if ( empty( $settings ) )
            return false;

        foreach( $settings as $key => $val ):

            if ( !is_array( $val ) ):
                $allowed_html = apply_filters( 'basil_widgets_allowed_html', array( 'a' => array( 'target' => array(), 'href' => array(), 'title' => array(), 'class' => array() ), 'br' => array(), 'em' => array(), 'strong' => array(), 'span' => array( 'style' => array(), 'class' => array() ) ) );
                $settings[$key] = wp_kses( $val, $allowed_html );
            else:
                $settings[$key] = self::sanitize_settings( $val );
            endif;

        endforeach;

        return $settings;

    }

	/**
     * Save the meta when the post is saved.
     *
     * @param int $post_id The ID of the post being saved.
     */
     public function save_page_meta_box( $post_id ) {

        /*
         * We need to verify this came from the our screen and with proper authorization,
         * because save_post can be triggered at other times.
         */

        // Check if our nonce is set.
        if ( ! isset( $_POST['basil_page_custom_box_nonce'] ) ) {
            return $post_id;
        }

        $nonce = $_POST['basil_page_custom_box_nonce'];

        // Verify that the nonce is valid.
        if ( ! wp_verify_nonce( $nonce, 'basil_page_custom_box' ) ) {
            return $post_id;
        }

        /*
         * If this is an autosave, our form has not been submitted,
         * so we don't want to do anything.
         */
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return $post_id;
        }

        // Check the user's permissions.
        if ( 'page' == $_POST['post_type'] ) {
            if ( ! current_user_can( 'edit_pages', $post_id ) ) {
                return $post_id;
            }
        } else {
            if ( ! current_user_can( 'edit_pages', $post_id ) ) {
                return $post_id;
            }
        }

        /* OK, it's safe for us to save the data now. */

        $bx_page_settings = isset($_POST['_basil_page_settings']) ? $_POST['_basil_page_settings'] : array();
        $bx_page_settings = self::sanitize_settings( $bx_page_settings );

        $page_excerpt = '';

        // Update the page settings meta field.
        update_post_meta( $post_id, '_basil_page_settings', $bx_page_settings );

        // Update the post's excerpt and content if Short Description is entered (for SEO purposes).
        if ($page_excerpt):

        	// Unhook this function so it doesn't loop infinitely
			remove_action( 'save_post', array( &$this, 'save_page_meta_box' ) );

			// Update the post, which calls save_post again
			wp_update_post( array( 'ID' => $post_id, 'post_excerpt' => $page_excerpt, 'post_content' => $page_excerpt ) );

			// Re-hook this function
			add_action( 'save_post', array( &$this, 'save_page_meta_box' ) );

        endif;

    }

    /**
     * Render Meta Box content.
     *
     * @param WP_Post $post The post object.
     */
    public function render_page_meta_box( ) {

	    global $post;

	    /*
		 * Output the page meta fields
		 * @since 1.0.0
		 */
		do_action( 'basil_page_fields', $post->ID );

        // Add an nonce field so we can check for it later.
        wp_nonce_field( 'basil_page_custom_box', 'basil_page_custom_box_nonce' );

    }

}

/**
 * Page Fields
 */
function basil_render_page_fields( $post_id ) {

	global $wp_registered_sidebars;

	$bx_options = wpc_get_settings();
	$sidebars = wp_get_sidebars_widgets();
	$bx_page_settings = get_post_meta( $post_id, '_basil_page_settings', true);
    $is_front_page = ( get_option( 'page_on_front' ) == $post_id ? true : false );

	?><div class="page-setting-block">

		<table class="form-table"><tbody><?php

            // Top Content
            $new_default = array();
            $default_setting = ( isset( $bx_options['basil_page_thumbnail_layout'] ) ? $bx_options['basil_page_thumbnail_layout'] : false );
            $this_setting = ( isset( $bx_page_settings['page_thumbnail_layout'] ) && $bx_page_settings['page_thumbnail_layout'] ? $bx_page_settings['page_thumbnail_layout'] : false );

            $thumbnail_layout_options = array(
                'disabled'          => __('Disabled','basil'),
                'page_banner'       => __('Image Banner w/Title','basil'),
                'page_banner_blank' => __('Image Banner w/o Title','basil'),
                'inline'            => __('Inline Image','basil'),
                'recipe_slider'     => __('Recipe Slider','basil')
            );

            if ( isset( $thumbnail_layout_options[$default_setting] ) ):
                $default_setting_array = sprintf( __('Default (%s)','basil'), ( $thumbnail_layout_options[$default_setting] ? $thumbnail_layout_options[$default_setting] : $thumbnail_layout_options['page_banner'] ) );
                array_unshift( $thumbnail_layout_options, $default_setting_array );
                unset( $thumbnail_layout_options[$default_setting] );
                $new_default[$default_setting] = $thumbnail_layout_options[0];
                unset($thumbnail_layout_options[0]);
                $thumbnail_layout_options = $new_default + $thumbnail_layout_options;
            endif;

            ?><tr><th scope="row"><label for="basil_page_settings_title"><?php esc_html_e('Top Content','basil'); ?></label></th>
                <td>
                    <select id="page_thumbnail_layout" name="_basil_page_settings[page_thumbnail_layout]">
                        <?php foreach( $thumbnail_layout_options as $value => $name ):
                            echo '<option value="' . $value . '"' . ( $this_setting == $value ? ' selected' : '' ) . '>' . $name . '</option>';
                        endforeach; ?>
                    </select>
                </td>
            </tr><?php

            // Recipe Slider Title
            ?><tr class="boxy-conditional-hidden" data-condition="page_thumbnail_layout" data-value="recipe_slider">
                <th scope="row">
                    <label for="basil_page_settings_recipe_slider_title"><?php esc_html_e('Recipe Slider Title','basil'); ?></label>
                </th>
                <td>
                    <?php $recipe_slider_title = ( isset($bx_page_settings['recipe_slider_title']) ? $bx_page_settings['recipe_slider_title'] : false ); ?>
                    <input id="basil_page_settings_recipe_slider_title" name="_basil_page_settings[recipe_slider_title]" value="<?php echo esc_attr( $recipe_slider_title ); ?>" />
                </td>
            </tr><?php

            // Recipe Slider Subheading
            ?><tr class="boxy-conditional-hidden" data-condition="page_thumbnail_layout" data-value="recipe_slider">
                <th scope="row">
                    <label for="basil_page_settings_recipe_slider_subheading"><?php esc_html_e('Recipe Slider Subheading','basil'); ?></label>
                </th>
                <td>
                    <?php $recipe_slider_subheading = ( isset($bx_page_settings['recipe_slider_subheading']) ? $bx_page_settings['recipe_slider_subheading'] : false ); ?>
                    <textarea id="basil_page_settings_recipe_slider_subheading" name="_basil_page_settings[recipe_slider_subheading]"><?php echo esc_attr( $recipe_slider_subheading ); ?></textarea>
                </td>
            </tr><?php

            // Recipe Slides
            ?><tr class="boxy-conditional-hidden" data-condition="page_thumbnail_layout" data-value="recipe_slider">
                <th scope="row">
                    <label for="basil_page_settings_title"><?php esc_html_e('Add Recipes','basil'); ?></label>
                </th>
                <td>
                    <?php
                        $slider_recipes = ( isset($bx_page_settings['slider_recipes']) ? $bx_page_settings['slider_recipes'] : false );
                        basil_recipe_finder( $slider_recipes );
                    ?>
                </td>
            </tr><?php

            if ( $is_front_page ):

                // Homepage Widgets
                $this_setting = ( isset( $bx_page_settings['homepage_content'] ) && $bx_page_settings['homepage_content'] ? $bx_page_settings['homepage_content'] : false );
                $homepage_content_options = array(
                    'show'     => __('Show','basil'),
                    'hide'    => __('Hide','basil')
                );

                ?><tr><th scope="row"><label for="basil_page_settings_homepage_content"><?php esc_html_e('Homepage Content','basil'); ?></label></th>
                    <td>
                        <select id="homepage_content" name="_basil_page_settings[homepage_content]">
                            <?php foreach( $homepage_content_options as $value => $name ):
                                echo '<option value="' . $value . '"' . ( $this_setting == $value ? ' selected' : '' ) . '>' . $name . '</option>';
                            endforeach; ?>
                        </select>
                    </td>
                </tr><?php

            endif;

			// Page Width
            $new_default = array();
			$default_setting = ( isset( $bx_options['basil_content'] ) ? $bx_options['basil_content'] : false );
			$this_setting = ( isset( $bx_page_settings['page_content'] ) && $bx_page_settings['page_content'] ? $bx_page_settings['page_content'] : false );

			$content_options = apply_filters( 'boxy_content_width_options', array(
               	'full'          	=> __('Full-Width','basil'),
	            'default'           => __('1100px','basil'),
	            '1000px'              => __('1000px','basil'),
	            '900px'               => __('900px','basil'),
	            '800px'               => __('800px','basil'),
	            '700px'               => __('700px','basil'),
	            '600px'               => __('600px','basil')
	        ));

			if ( isset( $content_options[$default_setting] ) ):
            	$default_setting_array = sprintf( __('Default (%s)','basil'), ( $content_options[$default_setting] ? $content_options[$default_setting] : $content_options['default'] ) );
            	array_unshift( $content_options, $default_setting_array );
            	unset( $content_options[$default_setting] );

            	$new_default[$default_setting] = $content_options[0];
				unset($content_options[0]);

				$content_options = $new_default + $content_options;
            endif;

			?><tr><th scope="row"><label for="basil_page_settings_title"><?php esc_html_e('Content Width','basil'); ?></label></th>
				<td>
					<select id="basil_page_settings_page_content" name="_basil_page_settings[page_content]">
						<?php foreach( $content_options as $value => $name ):
							echo '<option value="' . $value . '"' . ( $this_setting == $value ? ' selected' : '' ) . '>' . $name . '</option>';
						endforeach; ?>
					</select>
				</td>
			</tr><?php

			// Sidebar
			if ( !empty($wp_registered_sidebars) ):

				$this_setting = ( isset( $bx_page_settings['sidebar'] ) && $bx_page_settings['sidebar'] ? $bx_page_settings['sidebar'] : false );

				?><tr><th scope="row"><label for="basil_page_settings_sidebar"><?php esc_html_e('Sidebar','basil'); ?></label></th>
					<td>
						<select id="basil_page_settings_sidebar" name="_basil_page_settings[sidebar]">
							<option value="disabled"><?php esc_html_e( 'Disabled', 'basil' ); ?></option>
							<?php foreach( $wp_registered_sidebars as $slug => $sb ):
								echo '<option ' . ( $this_setting == $slug || $slug == 'sidebar-2' && !$this_setting ? ' selected' : '') . ' value="' . ( $slug == 'sidebar-2' ? 0 : esc_attr( $slug ) ) . '">' . esc_attr( $sb['name'] ) . '</option>';
							endforeach; ?>
						</select>
						<p><small><?php esc_html_e( 'You can choose a custom sidebar for this page, or disable the sidebar all-together.','basil'); ?></small></p>
					</td>
				</tr><?php

			endif;

			// Page Title
            $new_default = array();
			$default_setting = ( isset( $bx_options['basil_page_title'] ) ? $bx_options['basil_page_title'] : false );
			$this_setting = ( isset( $bx_page_settings['title'] ) && $bx_page_settings['title'] ? $bx_page_settings['title'] : false );

			?><tr><th scope="row"><label for="basil_page_settings_title"><?php esc_html_e('Page Title','basil'); ?></label></th>
				<td>
					<select id="basil_page_settings_title" name="_basil_page_settings[title]">
						<option value="0"><?php echo sprintf( __( 'Default (%s)', 'basil' ), ( $default_setting == 'enabled' || !$default_setting ? __('Enabled','basil') : __('Disabled','basil') ) ); ?></option>
						<?php echo ( $default_setting == 'disabled' ? '<option value="enabled"' . ( $this_setting == 'enabled' ? ' selected' : '' ) . '>' . __( 'Enabled', 'basil' ) . '</option>' : '' ); ?>
						<?php echo ( $default_setting == 'enabled' || !$default_setting ? '<option value="disabled"' . ( $this_setting == 'disabled' ? ' selected' : '' ) . '>' . __( 'Disabled', 'basil' ) . '</option>' : '' ); ?>
					</select>
				</td>
			</tr><?php

			// Breadcrumbs
            $new_default = array();
			$default_setting = ( isset( $bx_options['basil_breadcrumbs'] ) ? $bx_options['basil_breadcrumbs'] : false );
			$this_setting = ( isset( $bx_page_settings['breadcrumbs'] ) && $bx_page_settings['breadcrumbs'] ? $bx_page_settings['breadcrumbs'] : false );

			?><tr><th scope="row"><label for="basil_page_settings_breadcrumbs"><?php esc_html_e('Breadcrumbs','basil'); ?></label></th>
				<td>
					<select id="basil_page_settings_breadcrumbs" name="_basil_page_settings[breadcrumbs]">
						<option value="0"><?php echo sprintf( __( 'Default (%s)', 'basil' ), ( $default_setting == 'enabled' || !$default_setting ? __('Enabled','basil') : __('Disabled','basil') ) ); ?></option>
						<?php echo ( $default_setting == 'disabled' ? '<option value="enabled"' . ( $this_setting == 'enabled' ? ' selected' : '' ) . '>' . __( 'Enabled', 'basil' ) . '</option>' : '' ); ?>
						<?php echo ( $default_setting == 'enabled' || !$default_setting ? '<option value="disabled"' . ( $this_setting == 'disabled' ? ' selected' : '' ) . '>' . __( 'Disabled', 'basil' ) . '</option>' : '' ); ?>
					</select>
				</td>
			</tr>

		</tbody></table>

	</div><?php

}

add_action( 'basil_page_fields', 'basil_render_page_fields', 10 );
