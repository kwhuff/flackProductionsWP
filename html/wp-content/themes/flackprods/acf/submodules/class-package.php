<?php
/**
 * Wedding Package Module
 *
 * @package flackprods
 */

/**
 * Class Portfolio
 */
class WeddingPackage extends ACFSubmodule {

	const PACKAGE_TITLE    = 'package_title';
	const PACKAGE_PRICE    = 'package_price';
	const PACKAGE_FEATURES = 'package_features';
	const PACKAGE          = 'package';

	/**
	 * Key
	 *
	 * @return string
	 */
	public function getKey() {
		return 'package';
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
		return __( 'Wedding Package' );
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
				'label'             => 'Package Title',
				'name'              => 'package_title',
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
				'key'               => 'field_5b6c9cfb77218',
				'label'             => 'Package Price',
				'name'              => 'package_price',
				'type'              => 'text',
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
			array(
				'key'               => 'field_5b6c9ccd77215',
				'label'             => 'Package Features',
				'name'              => 'package_features',
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
				'button_label'      => 'Add Feature',
				'layout'            => 'row',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5b6c9ce577216',
						'label'             => 'Package Feature',
						'name'              => 'package_feature',
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
		);
	}
}

