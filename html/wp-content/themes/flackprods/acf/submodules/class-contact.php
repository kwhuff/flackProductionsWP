<?php
/**
 * Contact Module
 *
 * @package flackprods
 */

/**
 * Class Contact
 */
class Contact extends ACFSubmodule {
	const CONTENT      = 'content';
	const EMAIL        = 'email';
	const NAME         = 'name';
	const PHONE_NUMBER = 'phone_number';

	/**
	 * Key
	 *
	 * @return string
	 */
	public function getKey() {
		return 'contact';
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
		return __( 'Contact Module' );
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
			array(
				'key'               => 'field_5b5229df3b76f',
				'label'             => 'Name',
				'name'              => self::NAME,
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
				'tabs'              => 'all',
				'toolbar'           => 'full',
				'media_upload'      => 1,
				'delay'             => 0,
			),
			array(
				'key'               => 'field_5b5229df3b76g',
				'label'             => 'Phone Number',
				'name'              => self::PHONE_NUMBER,
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
				'tabs'              => 'all',
				'toolbar'           => 'full',
				'media_upload'      => 1,
				'delay'             => 0,
			),
			array(
				'key'               => 'field_5b5229df3b76h',
				'label'             => 'Email',
				'name'              => self::EMAIL,
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
				'tabs'              => 'all',
				'toolbar'           => 'full',
				'media_upload'      => 1,
				'delay'             => 0,
			),
		);
	}
}
