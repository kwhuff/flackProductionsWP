<?php // phpcs:ignoreFile
class ACFFieldKeys {
	const KEY           = 'key';
	const LABEL         = 'label';
	const NAME          = 'name';
	const DEFAULT_VALUE = 'default_value';
	const INSTRUCTIONS  = 'instructions';

	/**
	 * Fields for text boxes
	 */
	const TEXT_PLACEHOLDER = 'placeholder';
	const PLACEHOLDER      = '';

	/**
	 * Numeric Field Keys
	 */
	const MIN = 'min';
	const MAX = 'max';
}
class ACFModuleFields {
	public static function get_tab( $key, $label, $name = null ) {
		return array(
			'key'   => $key,
			'label' => $label,
			'name'  => empty( $name ) ? $key : $name,
			'type'  => 'tab',
		);
	}
	/**
	 *
	 * @param $name string
	 * @param $arguments array
	 *
	 * @return array
	 */
	public static function __callStatic( $name, $arguments ) {
		if ( isset( self::$$name ) ) {
			$defaults = self::$$name;
			if ( ! empty( $arguments ) && is_array( $arguments[0] ) ) {
				return array_replace( $defaults, $arguments[0] );
			} else {
				return $defaults;
			}
		}
		return [];
	}

	public static $field_class           = array(
		'key'   => 'field_class',
		'label' => 'Class',
		'name'  => 'class',
		'type'  => 'text',
	);
	public static $field_widthType       = array(
		'key'     => 'field_widthtype',
		'label'   => 'Width Type',
		'name'    => 'width_type',
		'type'    => 'select',
		'choices' => array(
			'site_width' => 'Site Width',
			'full_width' => 'Full Width',
		),
	);
	public static $field_mapType         = array(
		'key'     => 'field_maptype',
		'label'   => 'Map Type',
		'name'    => 'map_type',
		'type'    => 'select',
		'choices' => array(
			'mapbox.satellite' => 'Satellite',
			'mapbox.streets'   => 'Streets',
		),
	);
	public static $field_mapOffset       = array(
		'key'   => 'field_mapoffset',
		'label' => 'Map Offset',
		'name'  => 'map_offset',
		'type'  => 'true_false',
	);
	public static $field_count           = array(
		'key'   => 'field_count',
		'label' => 'Count',
		'name'  => 'count',
		'type'  => 'number',
	);
	public static $field_minheight       = array(
		'key'   => 'field_minheight',
		'label' => 'Min Height',
		'name'  => 'minheight',
		'type'  => 'number',
	);
	public static $field_url             = array(
		'key'   => 'field_url',
		'label' => 'URL',
		'name'  => 'url',
		'type'  => 'url',
	);
	public static $field_map             = array(
		'key'   => 'field_map',
		'label' => 'Map',
		'name'  => 'map',
		'type'  => 'google_map',
	);
	public static $field_backgroundImage = array(
		'key'   => 'field_backgroundimage',
		'label' => 'Background Image',
		'name'  => 'background_image',
		'type'  => 'image',
	);
	public static $field_mapIconImage    = array(
		'key'   => 'field_mapIconImage',
		'label' => 'Background Image',
		'name'  => 'map_icon_image',
		'type'  => 'image',
	);
	public static $field_backgroundColor = array(
		'key'   => 'field_backgroundcolor',
		'label' => 'Background Color',
		'name'  => 'background_color',
		'type'  => 'color_picker',
	);


	public static $field_title        = array(
		'key'   => 'field_title',
		'label' => 'Title',
		'name'  => 'title',
		'type'  => 'text',
	);
	public static $field_subtitle     = array(
		'key'   => 'field_subtitle',
		'label' => 'Subtitle',
		'name'  => 'subtitle',
		'type'  => 'text',
	);
	public static $field_subsubtitle  = array(
		'key'   => 'field_subsubtitle',
		'label' => 'SubSubtitle',
		'name'  => 'subsubtitle',
		'type'  => 'text',
	);
	public static $field_image        = array(
		'key'   => 'field_image',
		'label' => 'Image',
		'name'  => 'image',
		'type'  => 'image',
	);
	public static $field_wysiwyg      = array(
		'key'   => 'field_wysiwyg',
		'label' => 'Content',
		'name'  => 'content',
		'type'  => 'wysiwyg',
	);
	public static $field_textblock    = array(
		'key'       => 'field_textblock',
		'label'     => 'Content',
		'name'      => 'content',
		'type'      => 'textarea',
		'new_lines' => 'wpautop',
	);
	public static $field_file         = array(
		'key'   => 'field_file',
		'label' => 'File',
		'name'  => 'file',
		'type'  => 'file',
	);
	public static $field_text         = array(
		'key'   => 'field_text',
		'label' => 'Text',
		'name'  => 'text',
		'type'  => 'text',
	);
	public static $field_map_checkbox = array(
		'key'          => 'field_map_checkbox',
		'label'        => 'Show Description on Load',
		'name'         => 'show_description',
		'instructions' => 'Check this box the if you want your map point to display its details on load.',
		'type'         => 'true_false',
	);

	public static $field_color         = array(
		'key'   => 'field_color',
		'label' => 'Color',
		'name'  => 'color',
		'type'  => 'color_picker',
	);
	public static $field_relationship  = array(
		'key'   => 'field_relationship',
		'label' => 'Posts',
		'name'  => 'relationship',
		'type'  => 'relationship',
	);
	public static $field_orderByChoice = array(
		'key'               => 'field_orderByChoice',
		'label'             => 'Order Post By',
		'name'              => 'order_post_by',
		'type'              => 'select',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'none'       => 'none',
			'ID'         => 'ID',
			'author'     => 'Author',
			'title'      => 'Title',
			'date'       => 'Date',
			'modified'   => 'Date Modified',
			'parent'     => 'Parent',
			'rand'       => 'Random',
			'menu_order' => 'Menu Order',
		),
		'default_value'     => array(),
		'allow_null'        => 0,
		'multiple'          => 0,
		'ui'                => 0,
		'ajax'              => 0,
		'placeholder'       => '',
		'disabled'          => 0,
		'readonly'          => 0,
	);
	public static $field_trueFalse     = array(
		'key'               => 'field_trueFalse',
		'label'             => 'check',
		'name'              => 'trueFalse',
		'type'              => 'true_false',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'message'           => '',
		'default_value'     => 0,
	);
	public static $field_sortOrder     = array(
		'key'     => 'field_post_sort_order',
		'label'   => 'Post Sort Order',
		'name'    => 'post_sort_order',
		'type'    => 'select',
		'choices' => array(
			'ASC'  => 'Ascending',
			'DESC' => 'Descending',
		),
	);

	public static function field_fiftyfifty() {
		return array(
			'key'          => 'field_fiftyfifty',
			'label'        => 'Blocks',
			'name'         => 'blocks',
			'type'         => 'flexible_content',
			'button_label' => 'Add Half',
			'max'          => 2,
			'layouts'      => array(
				array(
					'key'        => 'fiftyfifty_image_layout',
					'name'       => 'image_block',
					'label'      => 'Image Block',
					'sub_fields' => self::keyFields( array( self::$field_image, self::$field_class ), 'fiftyfifty_imageblock' ),
				),
				array(
					'key'        => 'fiftyfifty_text_layout',
					'name'       => 'text_block',
					'label'      => 'Text Block',
					'sub_fields' => self::keyFields(
						array(
							self::$field_textblock,
							self::$field_class,
							self::$field_color,
						), 'fiftyfifty_textblock'
					),
				),
				array(
					'key'        => 'fiftyfifty_wysiwyg_layout',
					'name'       => 'wysiwyg_block',
					'label'      => 'WYSIWYG Block',
					'sub_fields' => self::keyFields(
						array(
							self::$field_wysiwyg,
							self::$field_class,
							self::$field_color,
						), 'fiftyfifty_wysiwygblock'
					),
				),
			),
		);
	}

	public static function field_number_circle_group() {
		return array(
			'key'          => 'field_number_circle_group',
			'label'        => 'Number Circle Group',
			'name'         => 'number_circle_group',
			'type'         => 'flexible_content',
			'button_label' => 'Add Number Circle',
			'max'          => 6,
			'layouts'      => array(
				array(
					'key'        => 'number_circle_group_text',
					'name'       => 'text',
					'label'      => 'Text Block',
					'sub_fields' => self::keyFields( array( self::$field_text ), 'number_circle_group_textblock' ),
				),
			),
		);
	}

	public static function field_affiliated_businesses_group() {
		return array(
			'key'          => 'field_affiliated_businesses_group',
			'label'        => 'Affiliated Businesses',
			'name'         => 'affiliated_businesses_group',
			'type'         => 'flexible_content',
			'button_label' => 'Add Affiliated Business',
			'max'          => 6,
			'layouts'      => array(
				array(
					'key'        => 'short_name',
					'name'       => 'text',
					'label'      => 'Business Name and Abbreviation',
					'sub_fields' => self::keyFields(
						array(
							self::$field_text,
							self::$field_subtitle,
							self::$field_url,
						), 'affiliated_businesses_group_textblock'
					),
				),
			),
		);

	}

	public static function field_community_involvement_group() {
		return array(
			'key'          => 'field_community_involvement_group',
			'label'        => 'Community Involvement',
			'name'         => 'community_involvement_group',
			'type'         => 'flexible_content',
			'button_label' => 'Add Community Organization',
			'max'          => 6,
			'layouts'      => array(
				array(
					'key'        => 'name',
					'name'       => 'text',
					'label'      => 'Text Block',
					'sub_fields' => self::keyFields( array( self::$field_text ), 'community_involvement_group_textblock' ),
				),
			),
		);
	}

	public static function field_hero_slider() {
		return array(
			'key'          => 'field_hero_slider',
			'label'        => 'Slide content',
			'name'         => 'slide_content',
			'type'         => 'repeater',
			'button_label' => 'Add Slide',
			'sub_fields'   => self::keyFields(
				array(
					array(
						'key'   => 'field_hero_slider_bg',
						'label' => 'Slide background image',
						'name'  => 'slide_background_image',
						'type'  => 'image',
					),
					array(
						'key'   => 'field_hero_slider_video',
						'label' => 'Slide background video',
						'name'  => 'slide_background_video',
						'type'  => 'file',
					),
					self::$field_title,
					array(
						'key'   => 'field_hero_slider_button_text',
						'label' => 'Button text',
						'name'  => 'button_text',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_hero_slider_button_url',
						'label' => 'Button URL',
						'name'  => 'button_url',
						'type'  => 'url',
					),
					self::$field_class,
				), 'hero_slider'
			),
		);
	}

	public static function field_rollover_group() {
		$hoverWysiwyg = self::hoverWysiwyg();

		return array(
			'key'          => '$field_rollover_group',
			'label'        => 'Rollover',
			'name'         => 'rollover_group',
			'type'         => 'flexible_content',
			'button_label' => 'Add Rollover',
			'layouts'      => array(
				array(
					'key'        => 'rollover_wysiwyg',
					'name'       => 'rollover_content_wysiwyg',
					'label'      => 'Rollover Wysiwyg',
					'sub_fields' => self::keyFields(
						array(
							self::$field_wysiwyg,
							$hoverWysiwyg[0],
						), 'rollover_wysiwyg'
					),
				),
				array(
					'key'        => 'rollover',
					'name'       => 'rollover_content',
					'label'      => 'Rollover Block',
					'sub_fields' => self::keyFields(
						array(
							array(
								'key'   => 'field_visible_title',
								'label' => 'Visible Title',
								'name'  => 'visible_title',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_visible_subtitle',
								'label' => 'Visible Subtitle',
								'name'  => 'visible_subtitle',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_visible_subsubtitle',
								'label' => 'Visible Subsubtitle',
								'name'  => 'visible_subsubtitle',
								'type'  => 'text',
							),
							array(
								'key'          => 'field_visible_image',
								'label'        => 'Visible Image',
								'name'         => 'visible_image',
								'instructions' => 'If no image is selected, default colors will be used',
								'type'         => 'image',
							),
							array(
								'key'   => 'field_hover_title',
								'label' => 'Hover Title',
								'name'  => 'hover_title',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_hover_subtitle',
								'label' => 'Hover Subtitle',
								'name'  => 'hover_subtitle',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_hover_number',
								'label' => 'Hover Phone Number',
								'name'  => 'hover_number',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_hover_url',
								'label' => 'Hover URL or Email Address',
								'name'  => 'hover_url',
								'type'  => 'text',
							),
							array(
								'key'          => 'field_email_checkbox',
								'label'        => 'Email Checkbox',
								'name'         => 'email_or_url',
								'instructions' => 'Check this box the if the URL is an email',
								'type'         => 'true_false',
							),
							array(
								'key'          => 'field_hover_image',
								'label'        => 'Hover Image',
								'name'         => 'hover_image',
								'instructions' => 'If no image is selected, default colors will be used',
								'type'         => 'image',
							),
						), 'rollover'
					),
				),
			),
		);
	}

	public static function hoverWysiwyg() {
		$hoverWysiwyg             = self::keyFields( array( self::$field_wysiwyg ), 'hover' );
		$hoverWysiwyg[0]['label'] = 'Hover WYSIWYG';
		$hoverWysiwyg[0]['name']  = 'content_hover';

		return $hoverWysiwyg;
	}

	public static function keyFields( $fields = array(), $key = 'default' ) {
		foreach ( $fields as &$field ) {
			$field['key'] = $key . '_' . $field['key'];
		}

		return $fields;
	}

	public static function field_taxonomy() {
		$taxonomies  = get_taxonomies( array( 'public' => true ) );
		$terms       = get_terms( $taxonomies, array( 'hide_empty' => 0 ) );
		$termChoices = array();
		foreach ( $terms as $term ) {
			if ( is_wp_error( $term ) ) {
				continue;
			}

			$termChoices[ $term->term_id ] = $term->name;
		}
		$field_taxonomy = array(
			'key'      => 'field_taxonomy',
			'label'    => 'Taxonomy',
			'name'     => 'taxonomy',
			'type'     => 'select',
			'choices'  => $termChoices,
			'multiple' => 1,
			'ui'       => 1,
		);

		return $field_taxonomy;
	}

	public static function field_taxonomyChoice() {
		$taxonomies           = get_taxonomies( array( 'public' => true ) );
		$field_taxonomyChoice = array(
			'key'      => 'field_taxonomyChoice',
			'label'    => 'Taxonomy Choice',
			'name'     => 'taxonomy_choice',
			'type'     => 'select',
			'choices'  => $taxonomies,
			'multiple' => 1,
			'ui'       => 1,
		);

		return $field_taxonomyChoice;
	}


}
