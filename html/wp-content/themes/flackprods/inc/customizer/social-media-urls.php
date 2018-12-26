<?php
/**
 * Disclaimer fields
 *
 * @package KKMI
 */

// Constants.
const SOCIAL_MEDIA       = 'social_media';
const INSTAGRAM_SETTINGS = 'instagram_settings';
const INSTAGRAM_URL      = 'instagram_url';
const TWITTER_SETTINGS   = 'twitter_settings';
const TWITTER_URL        = 'twitter_url';
const FACEBOOK_SETTINGS  = 'facebook_settings';
const FACEBOOK_URL       = 'facebook_url';
const YOUTUBE_SETTINGS   = 'youtube_settings';
const YOUTUBE_URL        = 'youtube_url';
const VIMEO_SETTINGS     = 'vimeo_settings';
const VIMEO_URL          = 'vimeo_url';

/**
 * Add Social Media URL Settings
 *
 * @param object $wp_customize WordPress customizer.
 */
function social_media_urls_customize_register( $wp_customize ) {

	$wp_customize->add_section(
		SOCIAL_MEDIA,
		array(
			'title'    => __( 'Social Media URLS', 'kkmi' ),
			'priority' => 30,
		)
	);

	$wp_customize->add_setting(
		INSTAGRAM_SETTINGS,
		array()
	);

	$wp_customize->add_setting(
		TWITTER_SETTINGS,
		array()
	);

	$wp_customize->add_setting(
		FACEBOOK_SETTINGS,
		array()
	);

	$wp_customize->add_setting(
		YOUTUBE_SETTINGS,
		array()
	);

	$wp_customize->add_setting(
		VIMEO_SETTINGS,
		array()
	);

	$wp_customize->add_control(
		INSTAGRAM_URL,
		array(
			'label'    => __( 'Instagram URL', 'flackprods' ),
			'section'  => SOCIAL_MEDIA,
			'settings' => INSTAGRAM_SETTINGS,
			'type'     => 'text',
		)
	);
	$wp_customize->add_control(
		TWITTER_URL,
		array(
			'label'    => __( 'Twitter URL', 'flackprods' ),
			'section'  => SOCIAL_MEDIA,
			'settings' => TWITTER_SETTINGS,
			'type'     => 'text',
		)
	);
	$wp_customize->add_control(
		FACEBOOK_URL,
		array(
			'label'    => __( 'Facebook URL', 'flackprods' ),
			'section'  => SOCIAL_MEDIA,
			'settings' => FACEBOOK_SETTINGS,
			'type'     => 'text',
		)
	);
	$wp_customize->add_control(
		YOUTUBE_URL,
		array(
			'label'    => __( 'YouTube URL', 'flackprods' ),
			'section'  => SOCIAL_MEDIA,
			'settings' => YOUTUBE_SETTINGS,
			'type'     => 'text',
		)
	);
	$wp_customize->add_control(
		VIMEO_URL,
		array(
			'label'    => __( 'Vimeo URL', 'flackprods' ),
			'section'  => SOCIAL_MEDIA,
			'settings' => VIMEO_SETTINGS,
			'type'     => 'text',
		)
	);
}

add_action( 'customize_register', 'social_media_urls_customize_register' );
