<?php
/**
 * TwoUp Module
 *
 * @package flackprods
 */

/**
 * Class Portfolio
 */
class Portfolio extends ACFSubmodule {

	const VIDEO           = 'video';
	const VIDEO_URL       = 'video_url';
	const VIDEO_THUMBNAIL = 'video_thumbnail';
	const VIDEO_TITLE     = 'video_title';

	/**
	 * Key
	 *
	 * @return string
	 */
	public function getKey() {
		return 'portfolio';
	}

	/**
	 * Name
	 *
	 * @return string
	 */
	public function getName() {
		return self::getKey();
	}

	/**
	 * Label in backend
	 *
	 * @return string
	 */
	public function getLabel() {
		return __( 'Portfolio' );
	}

	/**
	 * Fields for module
	 *
	 * @return array
	 */
	public function getFields() {
		return array(
			array(
				'key'               => 'field_5b6c9ccd77215',
				'label'             => 'Video',
				'name'              => 'video',
				'type'              => 'repeater',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'collapsed'         => '',
				'min'               => 0,
				'max'               => 30,
				'button_label'      => 'Add Section',
				'layout'            => 'row',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5b6c9ce577216',
						'label'             => 'Video URL',
						'name'              => 'video_url',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '100',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
					),
					array(
						'key'               => 'field_5b6c9ce577217',
						'label'             => 'Video Thumbnail',
						'name'              => 'video_thumbnail',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
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
						'key'               => 'field_5b6c9cfb77218',
						'label'             => 'Video Title',
						'name'              => 'video_title',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
				),
			),
		);
	}
}

