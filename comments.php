<?php if ( post_password_required() ) {
	return;
} ?>

<div id="basil-comments" class="basil-comments-area">

	<?php if ( have_comments() ) : ?>

		<h2 class="basil-comments-title"><?php
			$comments_number = get_comments_number();
			echo sprintf( _n( esc_html__( 'One Comment', 'basil' ), esc_html__( '%s Comments', 'basil' ), $comments_number ), number_format_i18n( $comments_number ) );
		?></h2>

		<ol class="basil-comment-list"><?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 80,
			) );
		?></ol><!-- .comment-list -->

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :

		?><p class="basil-no-comments"><?php esc_html_e( 'Comments are closed.', 'basil' ); ?></p><?php

	endif; ?>

	<?php comment_form( array(
		'title_reply_before' => '<h2 id="basil-reply-title" class="basil-comment-reply-title">',
		'title_reply_after'  => '</h2>',
	) ); ?>

</div><!-- .comments-area -->
