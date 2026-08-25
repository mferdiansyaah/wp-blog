<?php
get_header();
?>

<section class="fm-intro">
	<h1 class="fm-intro__title">
		<?php
		$description = get_bloginfo('description');

		if ($description) {
			echo wp_kses_post(nl2br(esc_html($description)));
		} else {
			esc_html_e('Notes on technology, learning, and the things I build.', 'mhdferdiansyah-blog');
		}
		?>
	</h1>

	<?php if (get_theme_mod('ferdi_intro_text')) : ?>
		<p class="fm-intro__text">
			<?php echo esc_html(get_theme_mod('ferdi_intro_text')); ?>
		</p>
	<?php else : ?>
		<p class="fm-intro__text">
			<?php esc_html_e('Welcome to my corner of the internet. I write about technology, networking, Linux, security, projects, and lessons learned along the way.', 'mhdferdiansyah-blog'); ?>
		</p>
	<?php endif; ?>

	<?php
	$about_page = get_page_by_path('about');

	if ($about_page) :
	?>
		<a class="fm-intro__link" href="<?php echo esc_url(get_permalink($about_page)); ?>">
			<?php esc_html_e('More about me', 'mhdferdiansyah-blog'); ?>
			<span aria-hidden="true">→</span>
		</a>
	<?php endif; ?>
</section>

<section id="posts" aria-labelledby="latest-posts-title">
	<div class="fm-section-heading">
		<h2 id="latest-posts-title"><?php esc_html_e('Latest Posts', 'mhdferdiansyah-blog'); ?></h2>
		<?php
		$posts_page = get_option('page_for_posts');
		if ($posts_page) :
		?>
			<a href="<?php echo esc_url(get_permalink($posts_page)); ?>">
				<?php esc_html_e('View all posts →', 'mhdferdiansyah-blog'); ?>
			</a>
		<?php endif; ?>
	</div>

	<div class="fm-post-list">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article <?php post_class('fm-post'); ?>>
					<div class="fm-post__meta">
						<?php mhdferdiansyah_blog_posted_on(); ?>
						<span class="dot">·</span>
						<?php mhdferdiansyah_blog_posted_by(); ?>
					</div>

					<h3 class="fm-post__title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>

					<p class="fm-post__excerpt">
						<?php
						$content = get_the_content();
						$content = apply_filters('the_content', $content);

						preg_match('/<p\b[^>]*>(.*?)<\/p>/is', $content, $matches);

						if (! empty($matches[1])) {
							echo wp_kses_post($matches[1]);
						}
						?>
					</p>

					<a class="fm-read-more" href="<?php the_permalink(); ?>">
						<?php esc_html_e('Read more', 'mhdferdiansyah-blog'); ?>
						<span aria-hidden="true">→</span>
					</a>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<div class="no-results">
				<p><?php esc_html_e('No posts have been published yet.', 'mhdferdiansyah-blog'); ?></p>
			</div>
		<?php endif; ?>
	</div>

	<?php
	the_posts_pagination(
		array(
			'mid_size'  => 1,
			'prev_text' => '← ' . __('Newer posts', 'mhdferdiansyah-blog'),
			'next_text' => __('Older posts', 'mhdferdiansyah-blog') . ' →',
		)
	);
	?>
</section>

<?php
get_footer();
