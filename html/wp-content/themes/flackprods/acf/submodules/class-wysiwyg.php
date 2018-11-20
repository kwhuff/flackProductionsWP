<?php
/**
 * WYSIWYG Module
 *
 * @package flackprods
 */

/**
 * Class WYSIWYG
 */
class WYSIWYG extends ACFSubmodule {
	const CONTENT    = 'content';

	/**
	 * Key
	 *
	 * @return string
	 */
	public function getKey() {
		return 'wysiwyg';
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
		return __( 'WYSIWYG Module' );
	}

	/**
	 * Fields for module
	 *
	 * @return array
	 */
	public function getFields() {
		return array(
			array(
				'key'               => 'field_5b5229df3b76e',
				'label'             => 'Content',
				'name'              => self::CONTENT,
				'type'              => 'wysiwyg',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'tabs'              => 'all',
				'toolbar'           => 'full',
				'media_upload'      => 1,
				'delay'             => 0,
			),
		);
	}

}
