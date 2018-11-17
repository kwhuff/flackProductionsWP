<?php // phpcs:ignoreFile
/**
 * ACF Module
 *
 * @package ACF
 */

/**
 * Class ACFModule
 */
abstract class ACFModule {
	/**
	 * ACFModule constructor.
	 */
	public function __construct() {
	}

	/**
	 * Serialize
	 *
	 * @return array
	 */
	public function serialize() {
		$fields = $this->getFields();

		$cereal = array(
			'key'         => $this->getKey(),
			'name'        => $this->getName(),
			'label'       => $this->getLabel(),
			'title'       => $this->getLabel(),
			'description' => $this->getDescription(),
			'fields'      => self::normalizeFields( $fields, $this->getKey() ),
		);

		return $cereal;
	}

	/**
	 * Returns the unique key for the module
	 *
	 * @return string
	 */
	abstract public function getKey();

	/**
	 * Returns the name of the module
	 *
	 * @return string
	 */
	abstract public function getName();

	/**
	 * Returns the label for the module
	 *
	 * @return string
	 */
	abstract public function getLabel();

	/**
	 * Get Description
	 *
	 * @return string
	 */
	public function getDescription() {
		return '';
	}

	/**
	 * Normalize Fields
	 *
	 * @param array  $fields
	 * @param string $key
	 * @return array
	 */
	protected static function normalizeFields( $fields = array(), $key = 'default' ) {
		foreach ( $fields as &$field ) {
			$field['key'] = $key . '_' . $field['key'];

			if ( isset( $field['conditional_logic'] ) && is_array( $field['conditional_logic'] ) ) {
				foreach ( $field['conditional_logic'] as &$orRule ) {
					foreach ( $orRule as &$andRule ) {
						$andRule['field'] = $key . '_' . $andRule['field'];
					}
				}
			}
		}

		return $fields;
	}

	/**
	 * Normalize Field
	 *
	 * @param array $field
	 */
	protected static function normalizeField( &$field = array() ) {

	}

	/**
	 *
	 * @return array
	 */
	abstract function getFields();


}
