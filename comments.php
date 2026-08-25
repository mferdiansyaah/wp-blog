<?php
if (post_password_required()) {
	return;
}
?>

<section id="comments" class="comments-area">

	<?php if (have_comments()) : ?>
		<h2 class="comments-title">
			<?php
			printf(
				esc_html(
					_n(
						'One comment',
						'%1$s comments',
						get_comments_number(),
						'mhdferdiansyah-blog'
					)
				),
				number_format_i18n(get_comments_number())
			);
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style' => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>

		<?php the_comments_navigation(); ?>
	<?php endif; ?>

	<?php
	if (comments_open()) {
		comment_form();
	}
	?>
</section>