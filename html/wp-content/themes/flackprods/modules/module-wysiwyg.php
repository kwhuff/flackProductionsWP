<?php // phpcs:ignore Files.Filename
/**
 * WYSIWYG Module
 *
 * @package flackprods
 */

$content          = get_sub_field( WYSIWYG::CONTENT );
?>
<div class="outer-wysiwyg-background" >
	<div class="grid-container" >
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 text-center margin-vertical-2">
				<?php echo ( $content ); ?>
			</div>
		</div>
	</div>
</div>
