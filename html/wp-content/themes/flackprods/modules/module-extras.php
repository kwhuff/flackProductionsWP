<?php // phpcs:ignore Files.Filename
/**
 * Extras Module.
 *
 * @package flackprods
 */

//$package_title = get_sub_field(WeddingPackage::PACKAGE_TITLE);
//$package_price = get_sub_field(WeddingPackage::PACKAGE_PRICE);
//$package_features = get_sub_field(WeddingPackage::PACKAGE_FEATURES);
$extras_title = get_sub_field(Extras::EXTRAS_TITLE);
$extra_features = get_sub_field(Extras::EXTRA_FEATURES);
$disclaimer = get_sub_field(Extras::DISCLAIMER);
?>

<div class="grid-margin grid-container extras-wrapper">
	<h2 class="text-center"><?php echo $extras_title; ?></h2>
	<ul class="text-center no-bullet">
		<?php foreach( $extra_features as $feature ) : ?>
			<li class="feature-text">- <?php echo $feature['extra_feature'] ?></li>
		<?php endforeach ?>
	</ul>
	<div class="text-center disclaimer font-italic">
		<?php echo $disclaimer; ?>
	</div>

</div>
