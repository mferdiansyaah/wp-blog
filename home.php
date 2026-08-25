<?php
get_header();
?>

<section class="home-intro">

	<div class="home-intro__main">
		<h1 class="fm-intro__title">
			<?php
			$description = get_bloginfo('description');

			if ($description) {
				echo wp_kses_post(nl2br(esc_html($description)));
			} else {
				esc_html_e(
					'Writing on technology, networking, Linux, and security.',
					'mhdferdiansyah-blog'
				);
			}
			?>
		</h1>

		<?php
		$intro_text = get_theme_mod('mhdferdiansyah_blog_intro_text');

		if ($intro_text) :
		?>
			<p class="fm-intro__text">
				<?php echo esc_html($intro_text); ?>
			</p>
		<?php endif; ?>

		<?php
		$about_page = get_page_by_path('aboutme');

		if ($about_page) :
		?>
			<a
				class="fm-intro__link"
				href="<?php echo esc_url(get_permalink($about_page)); ?>">
				<span>More about me</span>
				<span class="link-arrow" aria-hidden="true">↗</span>
			</a>
		<?php endif; ?>
	</div>

	<aside class="home-sidebar">
		<div class="home-sidebar__block">

			<p class="home-sidebar__label">
				Archive
			</p>
			<div class="home-archive">

				<?php
				global $wpdb;

				$years = $wpdb->get_results(
					"
                    SELECT
                        YEAR(post_date) AS year,
                        COUNT(ID) AS posts
                    FROM {$wpdb->posts}
                    WHERE post_type = 'post'
                    AND post_status = 'publish'
                    GROUP BY YEAR(post_date)
                    ORDER BY year DESC
                    "
				);
				?>

				<?php if ($years) : ?>
					<?php foreach ($years as $year) : ?>
						<a
							class="home-archive__item"
							href="<?php echo esc_url(get_year_link($year->year)); ?>">
							<span class="home-archive__year">
								<?php echo esc_html($year->year); ?>
							</span>
							<span class="home-archive__count">
								<?php echo esc_html($year->posts); ?>
							</span>
						</a>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="home-sidebar__block home-sidebar__learner">
			<p class="home-sidebar__label">
				Learner
			</p>
		</div>
		<div class="home-learner">

			<strong>
				<?php
				$learner_count = get_theme_mod(
					'mhdferdiansyah_blog_learner_count',
					1259
				);
				echo esc_html(
					number_format_i18n($learner_count)
				);
				?>
			</strong>
			<span>
				People
			</span>
		</div>
	</aside>
</section>

<section
	class="home-posts"
	id="posts"
	aria-labelledby="latest-posts-title">

	<div class="fm-section-heading">
		<h2 id="latest-posts-title">
			<?php esc_html_e('Recent Posts', 'mhdferdiansyah-blog'); ?>
		</h2>
		<?php
		$posts_page = get_page_by_path('myposts');

		if ($posts_page) :
		?>
			<a
				class="fm-section-heading__link elegant-link"
				href="<?php echo esc_url(get_permalink($posts_page)); ?>">

				<span class="elegant-link__text">
					Explore my posts
				</span>

				<span
					class="elegant-link__arrow"
					aria-hidden="true">
					↗
				</span>
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

						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>

					</h3>
					<?php if (has_excerpt()) : ?>

						<p class="fm-post__excerpt">
							<?php echo wp_kses_post(get_the_excerpt()); ?>
						</p>

					<?php endif; ?>
					<a
						class="fm-read-more"
						href="<?php the_permalink(); ?>">

						<?php esc_html_e('Read more', 'mhdferdiansyah-blog'); ?>

					</a>

				</article>

			<?php endwhile; ?>

		<?php else : ?>

			<div class="no-results">

				<p>
					<?php
					esc_html_e(
						'No posts have been published yet.',
						'mhdferdiansyah-blog'
					);
					?>
				</p>

			</div>

		<?php endif; ?>

	</div>

	<?php
	the_posts_pagination(
		array(
			'mid_size'  => 1,
			'prev_text' => __('Newer posts', 'mhdferdiansyah-blog'),
			'next_text' => __('Older posts', 'mhdferdiansyah-blog'),
		)
	);
	?>

</section>

<?php
get_footer();
?>