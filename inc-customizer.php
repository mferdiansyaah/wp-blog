<?php

if (! defined('ABSPATH')) {
	exit;
}

/**
 * Sanitize a URL used by the theme customizer.
 *
 * @param string $value URL value.
 * @return string
 */
function mhdferdiansyah_blog_sanitize_url($value)
{
	return esc_url_raw(trim($value));
}

/**
 * Validate a URL used by the theme customizer.
 *
 * @param WP_Error              $validity Current validation state.
 * @param string               $value    URL value.
 * @param WP_Customize_Setting $setting  Current setting.
 * @return WP_Error
 */
function mhdferdiansyah_blog_validate_url($validity, $value, $setting)
{

	if (empty($value)) {
		return $validity;
	}

	if (! filter_var($value, FILTER_VALIDATE_URL)) {
		$validity->add(
			'invalid_url',
			__('Please enter a valid URL.', 'mhdferdiansyah-blog')
		);
	}

	return $validity;
}

/**
 * Sanitize the email address used by the theme customizer.
 *
 * @param string $value Email address.
 * @return string
 */
function mhdferdiansyah_blog_sanitize_email($value)
{
	return sanitize_email(trim($value));
}

/**
 * Validate the email address used by the theme customizer.
 *
 * @param WP_Error              $validity Current validation state.
 * @param string               $value    Email value.
 * @param WP_Customize_Setting $setting  Current setting.
 * @return WP_Error
 */
function mhdferdiansyah_blog_validate_email($validity, $value, $setting)
{

	if (empty($value)) {
		return $validity;
	}

	if (! is_email($value)) {
		$validity->add(
			'invalid_email',
			__('Please enter a valid email address.', 'mhdferdiansyah-blog')
		);
	}

	return $validity;
}

/**
 * Register theme customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize WordPress Customizer manager.
 * @return void
 */
function mhdferdiansyah_blog_customize_register($wp_customize)
{

	$wp_customize->add_setting(
		'mhdferdiansyah_blog_learner_count',
		array(
			'default'           => 1259,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'mhdferdiansyah_blog_learner_count',
		array(
			'label'       => __('Learner Count', 'mhdferdiansyah-blog'),
			'description' => __('Number of people who have visited the blog.', 'mhdferdiansyah-blog'),
			'section'     => 'mhdferdiansyah_blog_home',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
			),
		)
	);
	$wp_customize->add_section(
		'mhdferdiansyah_blog_home',
		array(
			'title'    => __('MhdFerdiansyah Blog', 'mhdferdiansyah-blog'),
			'priority' => 30,
		)
	);

	/*
	 * Homepage introduction.
	 */
	$wp_customize->add_setting(
		'mhdferdiansyah_blog_intro_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);

	$wp_customize->add_control(
		'mhdferdiansyah_blog_intro_text',
		array(
			'label'       => __('Homepage Introduction', 'mhdferdiansyah-blog'),
			'description' => __('Short text displayed below the main homepage heading.', 'mhdferdiansyah-blog'),
			'section'     => 'mhdferdiansyah_blog_home',
			'type'        => 'textarea',
		)
	);

	/*
	 * Email.
	 */
	$wp_customize->add_setting(
		'mhdferdiansyah_blog_email',
		array(
			'default'           => '',
			'sanitize_callback' => 'mhdferdiansyah_blog_sanitize_email',
			'validate_callback' => 'mhdferdiansyah_blog_validate_email',
		)
	);

	$wp_customize->add_control(
		'mhdferdiansyah_blog_email',
		array(
			'label'       => __('Email', 'mhdferdiansyah-blog'),
			'description' => __('Email address shown in the footer.', 'mhdferdiansyah-blog'),
			'section'     => 'mhdferdiansyah_blog_home',
			'type'        => 'email',
		)
	);

	/*
	 * LinkedIn.
	 */
	$wp_customize->add_setting(
		'mhdferdiansyah_blog_linkedin_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'mhdferdiansyah_blog_sanitize_url',
			'validate_callback' => 'mhdferdiansyah_blog_validate_url',
		)
	);

	$wp_customize->add_control(
		'mhdferdiansyah_blog_linkedin_url',
		array(
			'label'       => __('LinkedIn URL', 'mhdferdiansyah-blog'),
			'description' => __('Your LinkedIn profile URL.', 'mhdferdiansyah-blog'),
			'section'     => 'mhdferdiansyah_blog_home',
			'type'        => 'url',
		)
	);
	/*
 * GitHub.
 */
	$wp_customize->add_setting(
		'mhdferdiansyah_blog_github_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'mhdferdiansyah_blog_sanitize_url',
			'validate_callback' => 'mhdferdiansyah_blog_validate_url',
		)
	);

	$wp_customize->add_control(
		'mhdferdiansyah_blog_github_url',
		array(
			'label'       => __('GitHub URL', 'mhdferdiansyah-blog'),
			'description' => __('Your GitHub profile URL.', 'mhdferdiansyah-blog'),
			'section'     => 'mhdferdiansyah_blog_home',
			'type'        => 'url',
		)
	);

	/*
	 * Instagram.
	 */
	$wp_customize->add_setting(
		'mhdferdiansyah_blog_instagram_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'mhdferdiansyah_blog_sanitize_url',
			'validate_callback' => 'mhdferdiansyah_blog_validate_url',
		)
	);

	$wp_customize->add_control(
		'mhdferdiansyah_blog_instagram_url',
		array(
			'label'       => __('Instagram URL', 'mhdferdiansyah-blog'),
			'description' => __('Your Instagram profile URL.', 'mhdferdiansyah-blog'),
			'section'     => 'mhdferdiansyah_blog_home',
			'type'        => 'url',
		)
	);

	/*
	 * X / Twitter.
	 */
	$wp_customize->add_setting(
		'mhdferdiansyah_blog_x_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'mhdferdiansyah_blog_sanitize_url',
			'validate_callback' => 'mhdferdiansyah_blog_validate_url',
		)
	);

	$wp_customize->add_control(
		'mhdferdiansyah_blog_x_url',
		array(
			'label'       => __('X (Twitter) URL', 'mhdferdiansyah-blog'),
			'description' => __('Your X profile URL.', 'mhdferdiansyah-blog'),
			'section'     => 'mhdferdiansyah_blog_home',
			'type'        => 'url',
		)
	);
}

add_action(
	'customize_register',
	'mhdferdiansyah_blog_customize_register'
);
