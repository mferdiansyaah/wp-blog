<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mhdferdiansyah-blog' ); ?></a>

<header class="site-header">
	<div class="site-header__inner">
		<div class="site-branding">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				?>
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
				<?php
			}
			?>
		</div>

		<div class="site-navigation">
			<nav aria-label="<?php esc_attr_e( 'Primary menu', 'mhdferdiansyah-blog' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'main-menu',
						'fallback_cb'    => 'mhdferdiansyah_blog_fallback_menu',
					)
				);
				?>
			</nav>

			<div class="header-actions">
				<button class="header-action" id="fm-theme-toggle" type="button" aria-label="<?php esc_attr_e( 'Toggle dark mode', 'mhdferdiansyah-blog' ); ?>" title="<?php esc_attr_e( 'Toggle dark mode', 'mhdferdiansyah-blog' ); ?>">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
						<circle cx="12" cy="12" r="4"/>
						<path d="M12 2v2M12 20v2M4.93 4.93l1.42 1.42M17.65 17.65l1.42 1.42M2 12h2M20 12h2M4.93 19.07l1.42-1.42M17.65 6.35l1.42-1.42"/>
					</svg>
				</button>
			</div>
		</div>
	</div>
</header>

<main id="content" class="site-main">
