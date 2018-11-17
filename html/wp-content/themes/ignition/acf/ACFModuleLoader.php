<?php // phpcs:ignoreFile
require_once __DIR__ . '/fields.php';
require_once __DIR__ . '/ACFModule.php';
require_once __DIR__ . '/ACFLocations.php';


class ACFModuleLoader extends stdClass {
	const GET_LOCATIONS_FILTER            = 'ACFModulesLoader/ffa/getLocations';
	private static $default_ffa_locations = array(
		array(
			array(
				'param'    => 'post_type',
				'operator' => '==',
				'value'    => 'page',
			),
		),
	);
	/**
	 *
	 * @var ACFModule[]
	 */
	private static $submodules      = array();
	private static $modules         = array();
	private static $currentModuleId = - 1; // END acf/init => bor_acf_add_local_field_groups

	public static function add_modules_field_groups() {
		foreach ( self::$modules as $m ) {
			acf_add_local_field_group( $m );
		}
	}

	public static function add_submodules_field_groups() {
		$modules = array();
		foreach ( self::$submodules as $m ) {
			array_push( $modules, $m->serialize() );
		}
		$modulesAllFieldGroup = array(
			'key'            => 'group_freeForAll',
			'title'          => 'Free For All',
			'fields'         => array(
				array(
					'key'          => 'field_freeForAllContent',
					'label'        => 'Free Content',
					'name'         => 'main_content',
					'type'         => 'flexible_content',
					'instructions' => 'Add sections to populate content.',
					'button_label' => 'Add Module',
					'min'          => '',
					'max'          => '',
					'layouts'      => $modules,
				),
			),
			'location'       => self::get_locations(),
			'hide_on_screen' => array(
				0 => 'the_content',

			),
		);
		acf_add_local_field_group( $modulesAllFieldGroup );

	}

	private static function get_locations() {
		return apply_filters( self::GET_LOCATIONS_FILTER, self::$default_ffa_locations );
	}

	public static function register() {
		add_action( 'acf/init', array( static::class, 'add_submodules_field_groups' ), 999 );
		add_action( 'acf/init', array( static::class, 'add_modules_field_groups' ), 999 );
	}

	/**
	 *
	 * @param $module ACFModule
	 */
	public static function registerSubModule( $module ) {
		array_push( self::$submodules, $module );
	}

	public static function setupModule() {
		self::$currentModuleId ++;
	}

	public static function get_current_module_id() {
		return self::$currentModuleId;
	}

	/**
	 * Gets hide classes for a module.
	 */
	public static function getHideClasses() {

		$classes         = [];
		$hide_ons        = get_sub_field( ACFSubmodule::HIDE_ON );
		$hide_for_prefix = apply_filters( 'hide_for_prefix', 'hide-for-' );
		$show_for_prefix = apply_filters( 'show_for_prefix', 'show-for-' );
		$possible        = self::getSizeClasses();

		if ( ! empty( $hide_ons ) ) {
			if ( count( $hide_ons ) == 1 ) {
				$classes[] = $hide_for_prefix . apply_filters( 'hide_size_class', $hide_ons[0] ) . '-only';
			} else {
				foreach ( $possible as $check => $label ) {
					for ( $i = 0; $i < count( $hide_ons ); $i ++ ) {
						$hide_on  = $hide_ons[ $i ];
						$notFound = true;
						if ( $hide_on == $check ) {
							$classes[] = $hide_for_prefix . apply_filters( 'hide_size_class', $hide_on ) . '-only';
							$notFound  = false;
							break;
						}
					}
					if ( $notFound ) {
						// $classes[] = $show_for_prefix . apply_filters( 'show_size_class', $check );
					}
				}
			}
		}

		return $classes;
	}

	public static function getSizeClasses() {
		return apply_filters(
			'get_hide_on_values', [
				'small'   => __( 'Mobile' ),
				'medium'  => __( 'Tablet' ),
				'large'   => __( 'Desktop' ),
				'xlarge'  => __( 'Large Screens' ),
				'xxlarge' => __( 'Massive Screens' ),
			]
		);
	}

	/**
	 *
	 * @param ACFModule $module
	 * @param array     $locations
	 * @param int       $menu_order
	 * @param array     $hide_on_screen
	 * @param string    $position
	 * @param string    $style
	 * @param string    $label_placement
	 * @param string    $instruction_placement
	 * @param int       $active
	 */
	public static function registerModule(
		$module,
		$locations = array(),
		$menu_order = 0,
		$hide_on_screen = array(),
		$position = 'normal',
		$style = 'default',
		$label_placement = 'top',
		$instruction_placement = 'label',
		$active = 1
	) {
		$mod = array_merge(
			$module->serialize(),
			array(
				'location'              => $locations,
				'menu_order'            => $menu_order,
				'position'              => $position,
				'style'                 => $style,
				'label_placement'       => $label_placement,
				'instruction_placement' => $instruction_placement,
				'hide_on_screen'        => $hide_on_screen,
				'active'                => $active,
			)
		);
		array_push( self::$modules, $mod );
	}
}
