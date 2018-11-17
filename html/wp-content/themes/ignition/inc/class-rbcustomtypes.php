<?php // phpcs:ignoreFile
class rbcustomtypes {
	// Register Custom Post Type
	public static function register_post_type( $hierarchical = false, $key = 'post_type', $singular_name = 'Post Type', $plural_name = 'Post Types', $menu_icon = 'dashicons-admin-post', $description = '', $public = true, $supports = array( 'title' ), $rewrite = null, $taxonomies = array( 'category', 'post_tag' ) ) {
		$labels = array(
			'name'                  => _x( $plural_name, 'Post Type General Name', 'rocketbuild' ),
			'singular_name'         => _x( $singular_name, 'Post Type Singular Name', 'rocketbuild' ),
			'menu_name'             => __( $plural_name, 'rocketbuild' ),
			'name_admin_bar'        => __( $singular_name, 'rocketbuild' ),
			'archives'              => __( $singular_name . ' Archives', 'rocketbuild' ),
			'parent_item_colon'     => __( "Parent $singular_name:", 'rocketbuild' ),
			'all_items'             => __( "All $plural_name", 'rocketbuild' ),
			'add_new_item'          => __( "Add New $singular_name", 'rocketbuild' ),
			'add_new'               => __( 'Add New', 'rocketbuild' ),
			'new_item'              => __( "New $singular_name", 'rocketbuild' ),
			'edit_item'             => __( "Edit $singular_name", 'rocketbuild' ),
			'update_item'           => __( "Update $singular_name", 'rocketbuild' ),
			'view_item'             => __( "View $singular_name", 'rocketbuild' ),
			'search_items'          => __( "Search $singular_name", 'rocketbuild' ),
			'not_found'             => __( 'Not found', 'rocketbuild' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'rocketbuild' ),
			'featured_image'        => __( 'Featured Image', 'rocketbuild' ),
			'set_featured_image'    => __( 'Set featured image', 'rocketbuild' ),
			'remove_featured_image' => __( 'Remove featured image', 'rocketbuild' ),
			'use_featured_image'    => __( 'Use as featured image', 'rocketbuild' ),
			'insert_into_item'      => __( "Insert into $singular_name", 'rocketbuild' ),
			'uploaded_to_this_item' => __( "Uploaded to this $singular_name", 'rocketbuild' ),
			'items_list'            => __( $plural_name . ' list', 'rocketbuild' ),
			'items_list_navigation' => __( $plural_name . ' list navigation', 'rocketbuild' ),
			'filter_items_list'     => __( "Filter $plural_name list", 'rocketbuild' ),
		);
		$args   = array(
			'label'               => __( $singular_name, 'rocketbuild' ),
			'description'         => __( $description, 'rocketbuild' ),
			'labels'              => $labels,
			'supports'            => $supports,
			'taxonomies'          => $taxonomies,
			'hierarchical'        => $hierarchical,
			'public'              => $public,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => $menu_icon,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);

		if ( $rewrite ) {
			$args['rewrite'] = $rewrite;
		}
		register_post_type( $key, $args );
	}
	// Register Custom Taxonomy
	public static function register_taxonomy( $hierarchical = false, $key = 'taxonomy', $singular_name = 'Taxonomy', $plural_name = 'Taxonomies', $public = true, $post_types = array( 'post' ) ) {
		$labels = array(
			'name'                       => _x( $plural_name, 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( $singular_name, 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( $singular_name, 'text_domain' ),
			'all_items'                  => __( "All $plural_name", 'text_domain' ),
			'parent_item'                => __( "Parent $singular_name", 'text_domain' ),
			'parent_item_colon'          => __( "Parent $singular_name:", 'text_domain' ),
			'new_item_name'              => __( "New $singular_name Name", 'text_domain' ),
			'add_new_item'               => __( "Add New $singular_name", 'text_domain' ),
			'edit_item'                  => __( "Edit $singular_name", 'text_domain' ),
			'update_item'                => __( "Update $singular_name", 'text_domain' ),
			'view_item'                  => __( "View $singular_name", 'text_domain' ),
			'separate_items_with_commas' => __( "Separate $plural_name with commas", 'text_domain' ),
			'add_or_remove_items'        => __( "Add or remove $plural_name", 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( "Popular $plural_name", 'text_domain' ),
			'search_items'               => __( "Search $plural_name", 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
			'no_terms'                   => __( "No $plural_name", 'text_domain' ),
			'items_list'                 => __( $plural_name . ' list', 'text_domain' ),
			'items_list_navigation'      => __( $plural_name . ' list navigation', 'text_domain' ),
		);
		$args   = array(
			'labels'            => $labels,
			'hierarchical'      => $hierarchical,
			'public'            => $public,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
		);
		register_taxonomy( $key, $post_types, $args );
	}
}
