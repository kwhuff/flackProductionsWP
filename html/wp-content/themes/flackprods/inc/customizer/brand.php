<?php
/**
 * Header fields
 *
 * @package flackprods
 */

// Constants.
const BRAND       = 'brand';
const HEADER_LOGO = 'header_logo';

/**
 * Add Brand Settings
 *
 * @param object $wp_customize WordPress customizer.
 */
function brand_customize_register( $wp_customize ) {

	$wp_customize->add_section(
		BRAND,
		array(
			'title'    => __( 'Brand', 'flackprods' ),
			'priority' => 30,
		)
	);

	$wp_customize->add_setting(
		HEADER_LOGO,
		array()
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			HEADER_LOGO,
			array(
				'label'    => __( 'Header Logo', 'flackprods' ),
				'section'  => BRAND,
				'settings' => HEADER_LOGO,
			)
		)
	);
}
add_action( 'customize_register', 'brand_customize_register' );
