<?php // phpcs:ignore Files.Filename
/**
 * Wedding Package Module.
 *
 * @package flackprods
 */

$package_title = get_sub_field(WeddingPackage::PACKAGE_TITLE);
$package_price = get_sub_field(WeddingPackage::PACKAGE_PRICE);
$package_features = get_sub_field(WeddingPackage::PACKAGE_FEATURES);
?>

<div class="grid-margin grid-container package-wrapper">
	<h1><?php echo $package_title; ?></h1>
	<ul class="no-bullet feature-list">
<!--	<div class="feature-list grid-x">-->
	<?php foreach( $package_features as $feature ) : ?>
	<li class="feature-text">- <?php echo $feature['package_feature'] ?></li>
<!--	<div class="feature-text small-12 large-6">- --><?php //echo $feature['package_feature'] ?><!--</div>-->
	<?php endforeach ?>
	</ul>
<!--	</div>-->
	<?php if( $package_price !== '' ) { ?>
		<h2 class="package-price"><?php echo $package_price; ?></h2>
	<?php } ?>
	<hr>
</div>
