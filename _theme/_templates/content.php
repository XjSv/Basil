<?php global $bx_options; ?>

	<?php if ( is_singular() ):

		?><article id="post-<?php the_ID(); ?>" <?php post_class( 'basil-content bx-clearfix' ); ?>><?php

			if ( $bx_options['basil_page_thumbnail_position'] == 'above' ): basil_page_thumbnail(); endif;

			if ( $bx_options['basil_page_thumbnail_layout'] != 'page_banner' || !has_post_thumbnail() ):

				bx_breadcrumbs();
				basil_the_title( '<h1 class="entry-title">', '</h1>' );

			endif;

			if ( $bx_options['basil_page_thumbnail_position'] == 'below' ): basil_page_thumbnail(); endif;

	else:

		?><article id="post-<?php the_ID(); ?>" <?php post_class( 'basil-blog-list-item basil-content bx-clearfix' ); ?>><?php

			?><header class="entry-header">
				<?php basil_entry_meta( true ); ?>
				<?php basil_the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			</header>

			<?php basil_post_thumbnail();

	endif; ?>

	<div class="entry-content"><?php

		if ( is_singular() ):

			the_content( sprintf(
				__( 'Continue Reading','basil' ) . '<span class="screen-reader-text"> "%s"</span>',
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'basil' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );

		else:

			basil_excerpt();
			?><a href="<?php the_permalink(); ?>" class="bx-button bx-button-bordered more-link"><?php echo __( 'Continue Reading','basil' ); ?></a><?php

		endif;

	?></div>

	<?php if ( is_singular() ): ?>

		<footer class="entry-footer">
			<?php basil_entry_meta(); ?>
		</footer>

		<?php bx_comments();
		paginate_comments_links(); ?>

	<?php else: ?>
		<footer class="entry-footer">&nbsp;</footer>
	<?php endif; ?>

</article>
