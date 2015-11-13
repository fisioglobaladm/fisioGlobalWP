<?php
/**
 * Comments template
 *
 * 
 */
?>
<?php
if ( post_password_required() )
return; ?>
<div id="comments" class="row">
	<?php if ( have_comments() ) : ?>
		<h3 class="commentsheadline">
			<?php
				printf( __( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'physio' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h3>
<div class="commenttext">
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 74,
				));
			?>
		</ol>
</div>
<?php
  if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'physio' ); ?></h2>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'physio' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'physio' ) ); ?></div>
	</nav>
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'physio' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>
<div class="blogcommentform">
	<?php comment_form(); ?>
</div>
</div>