<?php
/**
 * Module Loader
 *
 * @package Franklin
 */

$page_for_post = get_the_ID();
if ( have_rows( 'main_content', $page_for_post ) ) :
	while ( have_rows( 'main_content', $page_for_post ) ) :
		$row = the_row();
		ACFModuleLoader::setupModule();
		$style_string = get_module_styles();
		$hide_classes = ACFModuleLoader::getHideClasses();
		?>
		<section <?php echo esc_attr( get_module_attributes() ); ?>
			class="module
				module-<?php echo esc_attr( get_module_name() . ' ' . get_sub_field( 'class' ) ); ?>
				<?php echo esc_attr( implode( ' ', $hide_classes ) ); ?>"
			style="<?php echo esc_attr( $style_string ); ?>">
			<div id="<?php echo esc_attr( get_module_id() ); ?>" class="anchor-jump"></div>
			<?php get_template_part( 'modules/module', get_module_name() ); ?>
		</section>
		<?php
	endwhile;
endif;
?>
