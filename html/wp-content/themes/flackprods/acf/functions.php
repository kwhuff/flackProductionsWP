<?php // phpcs:ignoreFile
function get_module_name() {
	return str_replace( '_dynamic', '', get_row_layout() );
}

function get_module_id() {
	$manualId = get_sub_field( 'attr_id' );

	return empty( $manualId ) ? 'module-' . get_module_name() . '-' . ACFModuleLoader::get_current_module_id() : $manualId;
}

function get_module_attributes( $includeId = false ) {
	$attrs = [];
	foreach ( get_row() as $key => $val ) {
		if ( strpos( $key, 'attr_id' ) > - 1 && ! $includeId ) {
			continue;
		}
		$attrStart = strpos( $key, 'attr_' );
		if ( ! empty( $val ) && $attrStart > - 1 ) {
			$attrs[] = substr( $key, $attrStart + 5 ) . '="' . $val . '"';
		}
	}

	return implode( $attrs, ' ' );
}

function get_module_styles() {
	$moduleName  = get_module_name();
	$bgField     = get_sub_field( 'background_image' );
	$bgSrc       = $bgField ? $bgField['url'] : '';
	$bgColor     = get_sub_field( 'background_color' );
	$styleString = "background-image:url($bgSrc);";
	if ( $bgColor ) {
		$styleString = "background-color: $bgColor;";
	}
	if ( ! empty( get_sub_field( 'margin_top' ) ) ) {
		$marginTop    = get_sub_field( 'margin_top' );
		$styleString .= "margin-top:{$marginTop}px;";
	}
	if ( ! empty( get_sub_field( 'margin_bottom' ) ) ) {
		$marginBottom = get_sub_field( 'margin_bottom' );
		$styleString .= "margin-bottom:{$marginBottom}px;";
	}
	if ( ! empty( get_sub_field( 'padding_top' ) ) ) {
		$paddingTop   = get_sub_field( 'padding_top' );
		$styleString .= "padding-top:{$paddingTop}px;";
	}
	if ( ! empty( get_sub_field( 'padding_bottom' ) ) ) {
		$paddingBottom = get_sub_field( 'padding_bottom' );
		$styleString  .= "padding-bottom:{$paddingBottom}px;";
	}

	return $styleString;
}
