<?php
get_header();
?>

<header class="page-header">
	<h1 class="page-title"><?php esc_html_e('Page not found', 'mhdferdiansyah-blog'); ?></h1>
	<div class="archive-description">
		<p><?php esc_html_e('Maaf gan, halaman yang kamu cari tidak ditemukan.', 'mhdferdiansyah-blog'); ?></p>
		<p><a href="<?php echo esc_url(home_url('/')); ?>">← <?php esc_html_e('Back home', 'mhdferdiansyah-blog'); ?></a></p>
	</div>
</header>

<?php
get_footer();
