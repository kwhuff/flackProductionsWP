<?php // phpcs:ignore Files.Filename
/**
 * Two Up Module. Displays title, body text and button with link.
 *
 * @package flackprods
 */

$videos = get_sub_field(Portfolio::VIDEO);
//var_dump($videos[0]);
//var_dump($videos[0]['video_url'])
?>

<div class="grid-container portfolio-styling">
	<div class="grid-x text-center">
		<?php foreach ($videos as $video ) : ?>
			<div class="large-4 small-12 all-videos-wrapper">
				<div class="video-thumbnail-wrapper">
					<div data-attribute="<?php echo esc_html($video['video_url']); ?>" class="video-thumbnail" style="background-image:url('<?php echo $video['video_thumbnail']['url']; ?>')"></div>
				</div>
				<div class="video-title"><?php echo $video['video_title']; ?></div>
			</div>
		<?php endforeach ?>
	</div>
	<div id="video-player-wrapper">

	</div>
</div>
