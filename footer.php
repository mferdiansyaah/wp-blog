</main>

<footer class="site-footer">
	<span>
		<?php
		printf(
			esc_html__('© %1$s %2$s', 'mhdferdiansyah-blog'),
			esc_html(wp_date('Y')),
			esc_html(get_bloginfo('name'))
		);
		?>
	</span>
	<div
		class="footer-links"
		aria-label="<?php esc_attr_e('Social links', 'mhdferdiansyah-blog'); ?>">

		<?php
		$email     = get_theme_mod('mhdferdiansyah_blog_email');
		$linkedin  = get_theme_mod('mhdferdiansyah_blog_linkedin_url');
		$github    = get_theme_mod('mhdferdiansyah_blog_github_url');
		$instagram = get_theme_mod('mhdferdiansyah_blog_instagram_url');
		$x_url     = get_theme_mod('mhdferdiansyah_blog_x_url');
		?>

		<?php if ($email) : ?>

			<a
				class="footer-social"
				href="mailto:<?php echo esc_attr(antispambot($email)); ?>"
				aria-label="<?php esc_attr_e('Email', 'mhdferdiansyah-blog'); ?>"
				title="<?php esc_attr_e('Email', 'mhdferdiansyah-blog'); ?>">
				<svg viewBox="0 0 24 24" aria-hidden="true">
					<path d="M3.5 6.5h17v11h-17zM4 7l8 6 8-6" />
				</svg>
			</a>

		<?php endif; ?>


		<?php if ($linkedin) : ?>

			<a
				class="footer-social"
				href="<?php echo esc_url($linkedin); ?>"
				target="_blank"
				rel="me noopener noreferrer"
				aria-label="<?php esc_attr_e('LinkedIn', 'mhdferdiansyah-blog'); ?>"
				title="<?php esc_attr_e('LinkedIn', 'mhdferdiansyah-blog'); ?>">
				<svg viewBox="0 0 24 24" aria-hidden="true">
					<path d="M6.2 8.1A1.9 1.9 0 1 0 6.2 4.3a1.9 1.9 0 0 0 0 3.8ZM4.6 9.7h3.2v9.7H4.6V9.7Zm5.2 0H13v1.3h.1c.5-.9 1.5-1.7 3.2-1.7 3.4 0 4 2.2 4 5.1v5h-3.2v-4.4c0-1 0-2.3-1.4-2.3s-1.7 1.1-1.7 2.2v4.5H9.8V9.7Z" />
				</svg>
			</a>

		<?php endif; ?>

		<?php if ($github) : ?>

			<a
				class="footer-social"
				href="<?php echo esc_url($github); ?>"
				target="_blank"
				rel="me noopener noreferrer"
				aria-label="<?php esc_attr_e('GitHub', 'mhdferdiansyah-blog'); ?>"
				title="<?php esc_attr_e('GitHub', 'mhdferdiansyah-blog'); ?>">

				<svg viewBox="0 0 24 24" aria-hidden="true">
					<path d="M12 2.5a9.5 9.5 0 0 0-3 18.5c.5.1.7-.2.7-.5v-1.8c-2.8.6-3.4-1.2-3.4-1.2-.5-1.2-1.1-1.5-1.1-1.5-.9-.6.1-.6.1-.6 1 0 1.5 1 1.5 1 .9 1.5 2.4 1.1 3 .9.1-.7.4-1.1.7-1.3-2.2-.3-4.5-1.1-4.5-4.9 0-1.1.4-2 1-2.7-.1-.3-.4-1.3.1-2.7 0 0 .8-.3 2.8 1a9.5 9.5 0 0 1 5.1 0c2-1.3 2.8-1 2.8-1 .5 1.4.2 2.4.1 2.7.6.7 1 1.6 1 2.7 0 3.8-2.3 4.6-4.5 4.9.4.3.7.9.7 1.8v2.7c0 .3.2.6.7.5A9.5 9.5 0 0 0 12 2.5Z" />
				</svg>

			</a>

		<?php endif; ?>


		<?php if ($instagram) : ?>

			<a
				class="footer-social"
				href="<?php echo esc_url($instagram); ?>"
				target="_blank"
				rel="me noopener noreferrer"
				aria-label="<?php esc_attr_e('Instagram', 'mhdferdiansyah-blog'); ?>"
				title="<?php esc_attr_e('Instagram', 'mhdferdiansyah-blog'); ?>">
				<svg viewBox="0 0 24 24" aria-hidden="true">
					<rect x="4" y="4" width="16" height="16" rx="4" />
					<circle cx="12" cy="12" r="3.5" />
					<circle cx="17.3" cy="6.8" r="1" />
				</svg>
			</a>

		<?php endif; ?>


		<?php if ($x_url) : ?>

			<a
				class="footer-social"
				href="<?php echo esc_url($x_url); ?>"
				target="_blank"
				rel="me noopener noreferrer"
				aria-label="<?php esc_attr_e('X', 'mhdferdiansyah-blog'); ?>"
				title="<?php esc_attr_e('X', 'mhdferdiansyah-blog'); ?>">
				<svg viewBox="0 0 24 24" aria-hidden="true">
					<path d="M5 4h3.8l4.2 5.6L17.6 4H20l-5.9 6.9L20 20h-3.8l-4.6-6-5.2 6H4l6.1-7.2L5 4Zm3.1 1.8H6.8l8.9 12.4h1.3L8.1 5.8Z" />
				</svg>
			</a>

		<?php endif; ?>

	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>