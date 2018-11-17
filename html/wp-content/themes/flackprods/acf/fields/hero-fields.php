<?php
/**
 * Hero
 *
 * @package flackprods
 */

// Constants.
const INCLUDE_HERO          = 'include_hero';
const HERO_BACKGROUND_IMAGE = 'hero_simple_background_image';
const HERO_TEXT             = 'hero_text';
const MINI_HERO             = 'mini_hero';
const MINI_HERO_TEXT        = 'mini_hero_text';

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
		array(
			'key'                   => 'group_5b47b98f7d1b8',
			'title'                 => 'Hero',
			'fields'                => array(
				array(
					'key'               => 'field_5b771dfc2dd90',
					'label'             => 'Include hero?',
					'name'              => INCLUDE_HERO,
					'type'              => 'true_false',
					'instructions'      => 'Check here if you wish to include a hero module (slider or simple) on this page.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'message'           => '',
					'default_value'     => 0,
					'ui'                => 0,
					'ui_on_text'        => '',
					'ui_off_text'       => '',
				),
				array(
					'key'               => 'field_5b772b8a5141d',
					'label'             => 'Background image',
					'name'              => HERO_BACKGROUND_IMAGE,
					'type'              => 'image',
					'instructions'      => '',
					'required'          => 1,
					'conditional_logic' => array(
						array(
							array(
								'field'    => 'field_5b771dfc2dd90',
								'operator' => '==',
								'value'    => '1',
							),
						),
					),
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'return_format'     => 'array',
					'preview_size'      => 'thumbnail',
					'library'           => 'all',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => '',
				),
				array(
					'key'               => 'field_5b771dfc2dd91',
					'label'             => 'Mini hero?',
					'name'              => MINI_HERO,
					'type'              => 'true_false',
					'instructions'      => 'Check here if you wish to include a hero module (slider or simple) on this page.',
					'required'          => 0,
					'conditional_logic' => array(
						array(
							array(
								'field'    => 'field_5b771dfc2dd90',
								'operator' => '==',
								'value'    => '1',
							),
						),
					),
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'message'           => '',
					'default_value'     => 0,
					'ui'                => 0,
					'ui_on_text'        => '',
					'ui_off_text'       => '',
				),
				array(
					'key'               => 'field_5b3e75b068d05',
					'label'             => 'Hero Text',
					'name'              => HERO_TEXT,
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => array(
						array(
							array(
								'field'    => 'field_5b771dfc2dd91',
								'operator' => '==',
								'value'    => '0',
							),
						),
					),
					'default_value'     => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'maxlength'         => '',
				),
				array(
					'key'               => 'field_5b3e75b068d06',
					'label'             => 'Mini Hero Title Text',
					'name'              => MINI_HERO_TEXT,
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => array(
						array(
							array(
								'field'    => 'field_5b771dfc2dd91',
								'operator' => '==',
								'value'    => '1',
							),
						),
					),
					'default_value'     => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'maxlength'         => '',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'page',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => 1,
			'description'           => '',
		)
	);

endif;
