<?php // phpcs:ignore Files.Filename
/**
 * Two Up Module. Displays title, body text and button with link.
 *
 * @package flackprods
 */

//$two_up       = get_sub_field( TwoUp::TWO_UP );
//$two_up_count = count( $two_up );

$videos = get_sub_field(Portfolio::VIDEO);

//var_dump($videos);
//var_dump($videos[0]['video_thumbnail']);
//var_dump($videos[0]['video_thumbnail']['url']);
//die();

?>

<div class="grid-container portfolio-styling">
	<div class="grid-x text-center">
		<?php foreach ($videos as $video ) : ?>
			<div class="small-4">
				<div class="video-thumbnail" style="background-image:url('<?php echo $video['video_thumbnail']['url']; ?>')"></div>
				<div class="video-title"><?php echo $video['video_title']; ?></div>
			</div>
		<?php endforeach ?>
	</div>
</div>
