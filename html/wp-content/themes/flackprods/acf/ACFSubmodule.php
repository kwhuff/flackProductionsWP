<?php // phpcs:ignoreFile

/**
 * Created by PhpStorm.
 * User: jpcordial
 * Date: 9/1/16
 * Time: 11:26 AM
 */
abstract class ACFSubmodule extends ACFModule {
	const HIDE_ON                        = 'hide_on';
	protected static $preSubmoduleFields = [
		array(
			'key'   => 'field_content_tab',
			'label' => 'Content',
			'name'  => 'content_tab',
			'type'  => 'tab',
		),
	];

	public function serialize() {
		$fields               = [];
		$cereal               = parent::serialize();
		$preFields            = self::normalizeFields( $this->getPreSubmoduleFields(), $this->getKey() );
		$fields               = array_merge( $fields, $preFields, $cereal['fields'], self::normalizeFields( self::getPostSubModuleFields(), $this->getKey() ) );
		$cereal['sub_fields'] = $fields;
		unset( $cereal['fields'] );

		return $cereal;
	}

	/**
	 *
	 * @return array
	 */
	public function getPreSubmoduleFields() {
		$fields = self::$preSubmoduleFields;

		return apply_filters( 'pre_submodule_fiels', $fields );
	}

	/**
	 *
	 * @return array
	 */
	public static function getPostSubModuleFields() {
		$fields = [
			array(
				'key'   => 'field_css_tab',
				'label' => 'CSS',
				'name'  => 'css_tab',
				'type'  => 'tab',
			),
			array(
				'key'   => 'field_class',
				'label' => 'Class',
				'name'  => 'class',
				'type'  => 'text',
			),
			array(
				'key'         => 'field_attr_id',
				'label'       => __( 'ID Attribute' ),
				'name'        => 'attr_id',
				'type'        => 'text',
				'description' => 'Use this to create an anchorable ID for the section.',
			),
			array(
				'key'   => 'field_pixels_tab',
				'label' => __( 'Pixels' ),
				'name'  => 'pixels_tab',
				'type'  => 'tab',
			),
			array(
				'key'   => 'field_margin_top',
				'label' => __( 'Margin Top' ),
				'name'  => 'margin_top',
				'type'  => 'number',
			),
			array(
				'key'   => 'field_margin_bottom',
				'label' => __( 'Margin Bottom' ),
				'name'  => 'margin_bottom',
				'type'  => 'number',
			),
			array(
				'key'   => 'field_padding_top',
				'label' => __( 'Padding Top' ),
				'name'  => 'padding_top',
				'type'  => 'number',
			),
			array(
				'key'   => 'field_padding_bottom',
				'label' => __( 'Padding Bottom' ),
				'name'  => 'padding_bottom',
				'type'  => 'number',
			),
			array(
				'key'      => 'field_hide_on',
				'label'    => __( 'Select any resolution this widget should be hidden at.' ),
				'name'     => self::HIDE_ON,
				'type'     => 'select',
				'choices'  => ACFModuleLoader::getSizeClasses(),
				'multiple' => true,
				'ui'       => true,
			),
		];

		return $fields;
	}


}
