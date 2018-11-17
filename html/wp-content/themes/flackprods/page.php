<?php
/**
 * Page Template
 *
 * @package Franklin
 */

get_header(); ?>

<?php
if ( get_field(INCLUDE_HERO )) {
require locate_template( 'parts/hero.php' );
};
?>

<?php get_template_part( 'module-loader' ); ?>

<?php
get_footer();
