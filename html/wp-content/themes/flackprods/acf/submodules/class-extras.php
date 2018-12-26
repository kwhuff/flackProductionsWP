<?php
/**
 * Extras Module
 *
 * @package flackprods
 */

/**
 * Class Extras
 */
class Extras extends ACFSubmodule {

	const EXTRAS_TITLE   = 'extras_title';
	const EXTRA_FEATURES = 'extra_features';
	const DISCLAIMER     = 'disclaimer';

	/**
	 * Key
	 *
	 * @return string
	 */
	public function getKey() {
		return 'extras';
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
		return __( 'Extras' );
	}

	/**
	 * Fields for module
	 *
	 * @return array
	 */
	public function getFields() {
		return array(
			array(
				'key'               => 'field_5b6c9cfb77217',
				'label'             => 'Extras Title',
				'name'              => 'extras_title',
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
			array(
				'key'               => 'field_5b6c9ccd77219',
				'label'             => 'Extra Features',
				'name'              => 'extra_features',
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
				'min'               => 1,
				'max'               => 30,
				'button_label'      => 'Add Extra',
				'layout'            => 'row',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5b6c9ce577220',
						'label'             => 'Extra Feature',
						'name'              => 'extra_feature',
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
				),
			),
			array(
				'key'               => 'field_5b6c9cfb77976',
				'label'             => 'Disclaimer',
				'name'              => 'disclaimer',
				'type'              => 'wysiwyg',
				'instructions'      => '',
				'required'          => 0,
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
		);
	}
}

