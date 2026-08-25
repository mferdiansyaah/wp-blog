<?php

if (! defined('ABSPATH')) {
	exit;
}

function mhdferdiansyah_blog_setup()
{
	load_theme_textdomain(
		'mhdferdiansyah-blog',
		get_template_directory() . '/languages'
	);

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'mhdferdiansyah-blog'),
		)
	);
}
add_action('after_setup_theme', 'mhdferdiansyah_blog_setup');

function mhdferdiansyah_blog_disable_jetpack_buttons()
{
	remove_filter('the_content', 'sharing_display', 19);
	remove_filter('the_excerpt', 'sharing_display', 19);

	if (class_exists('Jetpack_Likes')) {
		remove_filter(
			'the_content',
			array(Jetpack_Likes::init(), 'post_likes'),
			30,
			1
		);
	}
}
add_action('loop_start', 'mhdferdiansyah_blog_disable_jetpack_buttons');

function mhdferdiansyah_blog_assets()
{
	$version = wp_get_theme()->get('Version');

	wp_enqueue_style(
		'mhdferdiansyah-blog-style',
		get_stylesheet_uri(),
		array(),
		$version
	);

	wp_enqueue_script(
		'mhdferdiansyah-blog-theme',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		$version,
		true
	);

	wp_localize_script(
		'mhdferdiansyah-blog-theme',
		'mhdferdiansyahBlog',
		array(
			'storageKey' => 'mhdferdiansyah-blog-theme',
		)
	);
}
add_action('wp_enqueue_scripts', 'mhdferdiansyah_blog_assets');

function mhdferdiansyah_blog_fallback_menu()
{
?>
	<ul class="main-menu">
		<li>
			<a
				class="current-menu-item"
				href="<?php echo esc_url(home_url('/')); ?>">
				<?php esc_html_e('Home', 'mhdferdiansyah-blog'); ?>
			</a>
		</li>

		<li>
			<a href="<?php echo esc_url(home_url('/#posts')); ?>">
				<?php esc_html_e('Blog', 'mhdferdiansyah-blog'); ?>
			</a>
		</li>

		<li>
			<a href="<?php echo esc_url(home_url('/about/')); ?>">
				<?php esc_html_e('About', 'mhdferdiansyah-blog'); ?>
			</a>
		</li>
	</ul>
<?php
}

function mhdferdiansyah_blog_posted_by()
{
	printf(
		'<span>%s</span>',
		esc_html(get_the_author())
	);
}

function mhdferdiansyah_blog_posted_on()
{
	printf(
		'<time datetime="%s">%s</time>',
		esc_attr(get_the_date(DATE_W3C)),
		esc_html(get_the_date(get_option('date_format')))
	);
}

function mhdferdiansyah_blog_excerpt_length($length)
{
	return 28;
}

add_filter('excerpt_length', 'mhdferdiansyah_blog_excerpt_length');

function mhdferdiansyah_blog_excerpt_more()
{
	return '…';
}

add_filter('excerpt_more', 'mhdferdiansyah_blog_excerpt_more');


require_once get_template_directory() . '/inc-customizer.php';
