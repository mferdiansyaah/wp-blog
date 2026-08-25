<?php
get_header();
?>

<header class="page-header">
	<h1 class="page-title">
		<?php
		printf(
			esc_html__( 'Search: %s', 'mhdferdiansyah-blog' ),
			esc_html( get_search_query() )
		);
		?>
	</h1>

	<?php get_search_form(); ?>
</header>

<div class="fm-post-list">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'fm-post' ); ?>>
				<div class="fm-post__meta">
					<?php mhdferdiansyah_blog_posted_on(); ?>
					<span class="dot">·</span>
					<?php mhdferdiansyah_blog_posted_by(); ?>
				</div>

				<h2 class="fm-post__title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>

				<p class="fm-post__excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>

				<a class="fm-read-more" href="<?php the_permalink(); ?>">
					<?php esc_html_e( 'Read more', 'mhdferdiansyah-blog' ); ?>
					<span aria-hidden="true">→</span>
				</a>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<div class="no-results">
			<p><?php esc_html_e( 'No results found.', 'mhdferdiansyah-blog' ); ?></p>
		</div>
	<?php endif; ?>
</div>

<?php
the_posts_pagination(
	array(
		'mid_size'  => 1,
		'prev_text' => '← ' . __( 'Newer posts', 'mhdferdiansyah-blog' ),
		'next_text' => __( 'Older posts', 'mhdferdiansyah-blog' ) . ' →',
	)
);

get_footer();
