<?php
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<article <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-meta">
				<?php mhdferdiansyah_blog_posted_on(); ?>
				<span class="dot">·</span>
				<?php mhdferdiansyah_blog_posted_by(); ?>
				<?php if ( get_the_category_list( ', ' ) ) : ?>
					<span class="dot">·</span>
					<span><?php echo wp_kses_post( get_the_category_list( ', ' ) ); ?></span>
				<?php endif; ?>
			</div>
		</header>

		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">',
					'after'  => '</div>',
				)
			);
			?>
		</div>

		<footer class="entry-footer">
			<?php the_tags( '<span>Tags: ', ', ', '</span>' ); ?>
		</footer>
	</article>

	<nav class="post-navigation" aria-label="<?php esc_attr_e( 'Post navigation', 'mhdferdiansyah-blog' ); ?>">
		<div>
			<?php
			previous_post_link(
				'%link',
				'<span class="nav-label">← Previous</span><span class="nav-title">%title</span>'
			);
			?>
		</div>

		<div class="nav-next">
			<?php
			next_post_link(
				'%link',
				'<span class="nav-label">Next →</span><span class="nav-title">%title</span>'
			);
			?>
		</div>
	</nav>

	<?php
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	?>

<?php endwhile; ?>

<?php
get_footer();
