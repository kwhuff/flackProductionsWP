<?php // phpcs:ignoreFile

/**
 * ACFLocations
 */
class ACFLocations {
	const EQUALS     = '==';
	const NOT_EQUALS = '!=';

	/**
	 * Parameter
	 *
	 * @var string Parameter.
	 */
	private $param;

	/**
	 * Operator
	 *
	 * @var string Operator.
	 */
	private $operator;

	/**
	 * Value
	 *
	 * @var string Value.
	 */
	private $value;

	/**
	 * ACFLocations constructor.
	 *
	 * @param string $param Parameter.
	 * @param string $operator Operator.
	 * @param string $value Value.
	 */
	public function __construct( $param = '', $operator = '', $value = '' ) {
		$this->param    = $param;
		$this->operator = $operator;
		$this->value    = $value;
	}

	/**
	 * Front page
	 */
	public static function front_page() {
		return new ACFLocation( 'page_type', '==', 'front_page' );
	}

	/**
	 * Post page
	 */
	public static function posts_page() {
		return new ACFLocation( 'page_type', self::NOT_EQUALS, 'posts_page' );
	}

	/**
	 * Location
	 *
	 * @param string $param Parameter.
	 * @param string $operator Operator.
	 * @param string $value Value.
	 * @return mixed
	 */
	public static function location( $param = '', $operator = '', $value = '' ) {
		return ( new ACFLocation( $param, $operator, $value ) )->serialize();
	}

	/**
	 * Serialize
	 */
	public function serialize() {
		return array(
			'param'    => $this->param,
			'operator' => $this->operator,
			'value'    => $this->value,
		);
	}

	/**
	 * Location Equals
	 *
	 * @param string $param Parameters.
	 * @param string $value Value.
	 * @return mixed
	 */
	public static function location_equals( $param = '', $value = '' ) {
		return ( new ACFLocation( $param, self::EQUALS, $value ) )->serialize();
	}

	/**
	 * Location not equals
	 *
	 * @param string $param Parameters.
	 * @param string $value Value.
	 * @return mixed
	 */
	public static function location_not_equals( $param = '', $value = '' ) {
		return ( new ACFLocation( $param, self::NOT_EQUALS, $value ) )->serialize();
	}

	/**
	 * Both
	 */
	public static function both() {
		$args = func_get_args();

		return array_map(
			function ( $location ) {
				if ( $location instanceof ACFLocation ) {
					return $location->serialize();
				} elseif ( is_array( $location ) ) {
					return $location;
				}

				return [];

			}, $args
		);
	}

	/**
	 * Either
	 */
	public static function either() {
		return array_map(
			function ( $locations_array ) {
				if ( ! is_array( $locations_array ) ) {
					return [];
				}

				return $locations_array;
			}, func_get_args()
		);
	}

	/**
	 * Not equals to
	 */
	public function not() {
		$this->operator = ACFLocation::NOT_EQUALS;

		return $this;
	}

	/**
	 * Get Params
	 *
	 * @return string
	 */
	public function getParam() {
		return $this->param;
	}

	/**
	 * Set Params
	 *
	 * @param string $param Parameters.
	 */
	public function setParam( $param ) {
		$this->param = $param;
	}

	/**
	 * Get Operator
	 *
	 * @return string
	 */
	public function getOperator() {
		return $this->operator;
	}

	/**
	 * Set Operator
	 *
	 * @param string $operator Operator.
	 */
	public function setOperator( $operator ) {
		$this->operator = $operator;
	}

	/**
	 * Get Value
	 *
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Set Value
	 *
	 * @param string $value Value.
	 */
	public function setValue( $value ) {
		$this->value = $value;
	}
}
