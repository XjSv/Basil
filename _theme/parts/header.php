<?php

/* Get the Theme Settings */
global $bx_options, $_cooked_settings;
$bx_options = wpc_get_settings();
$basil_header_classes = array();

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php if ( $bx_options['basil_mobile_optimized'] ) : ?>
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<?php else: ?>
	<meta name="viewport" content="width=1050">
	<?php endif; ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<?php $basil_body_classes = array(
	BX_THEME_SLUG . '-' . $bx_options['basil_layout_style']
);

if ( isset($bx_options['basil_header_search']) && $bx_options['basil_header_search'] != 'disabled' ):
	$basil_body_classes[] = 'basil-header-has-search';
endif;

if ( isset($bx_options['basil_header_profile']) && $bx_options['basil_header_profile'] != 'disabled' ):
	$basil_body_classes[] = 'basil-header-has-buttons';
endif;

?>

<body <?php body_class( $basil_body_classes ); ?>>

<div id="basil-wrapper">

	<div id="basil-header-wrapper">

		<?php if ( function_exists('the_custom_header_markup') ):
			ob_start();
			the_custom_header_markup();
			$custom_header_markup = ob_get_clean();
		else:
			$custom_header_markup = bx_custom_header_markup();
		endif; ?>

		<?php if ( $custom_header_markup && has_custom_header() ):

			$basil_header_classes[] = 'basil-header-has-background';
			echo $custom_header_markup;

		endif; ?>

		<header id="basil-header"<?php echo ( !empty($basil_header_classes) ? ' class="' . implode( ' ', $basil_header_classes ) . '"' : '' ); ?>>

			<div class="basil-shell">

				<div class="basil-header-left"><?php

					basil_logo_display();

				?></div>
				<div class="basil-header-right"><div class="basil-header-right-content"><?php

					if ( isset( $bx_options['basil_header_search'] ) && $bx_options['basil_header_search'] == 'enabled' ):

						echo '<div class="basil-search-wordpress">' . get_search_form( false ) . '</div>';

					elseif ( isset( $bx_options['basil_header_search'] ) && $bx_options['basil_header_search'] == 'cooked' ):

						echo '<div class="basil-search-cooked">' . do_shortcode( '[cooked-search hide_browse="true" hide_sorting="true" compact="true"]' ) . '</div>';

					endif;

					if ( isset( $bx_options['basil_header_profile'] ) && $bx_options['basil_header_profile'] == 'enabled' ):

						if ( isset( $_cooked_settings['profile_page'] ) && $_cooked_settings['profile_page'] ):

							if ( is_user_logged_in() ):

								echo '<div class="basil-profile-button"><a class="bx-button" href="' . esc_url( get_permalink( $_cooked_settings['profile_page'] ) ) . '">' . __( 'Profile', 'basil' ) . '</a></div>';
								echo '<div class="basil-signout-button"><a class="bx-button bx-button-alt" href="' . esc_url( wp_logout_url( get_home_url() ) ) . '">' . __( 'Sign Out', 'basil' ) . '</a></div>';

							else:

								echo '<div class="basil-profile-button"><a class="bx-button" href="' . esc_url( get_permalink( $_cooked_settings['profile_page'] ) ) . '">' . __( 'Sign In', 'basil' ) . '</a></div>';

							endif;

						endif;

					endif;

				?></div></div>
			</div>

			<?php if ( has_nav_menu( 'mobile-menu' ) || has_nav_menu( 'main-menu' ) ): ?>
				<nav class="bx-nav-collapse"><?php
					$menu_slug = ( has_nav_menu( 'mobile-menu' ) ? 'mobile-menu' : 'main-menu' );
					wp_nav_menu(array(
						'theme_location'  => $menu_slug,
						'items_wrap'      => '<ul id="%1$s" class="basil-mobile-nav %2$s">%3$s</ul>',
						'container' => '',
					));
				?></nav>
			<?php endif; ?>

		</header>

	</div>

	<div id="basil-nav-wrapper">

		<div class="basil-shell">

			<nav id="basil-nav"><?php

				wp_nav_menu(array(
					'theme_location'  => 'main-menu',
					'items_wrap'      => '<ul id="%1$s" class="basil-nav basil-left %2$s">%3$s</ul>',
					'container_class' => 'basil-main-menu',
					'fallback_cb'	  => 'basil_menu_message'
				));

			?></nav>

			<div class="basil-right">
		        <?php bx_social_icons(); ?>
		    </div>

		</div>

	</div>
