<?php
/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 6/20/16
 * Time: 11:45 AM
 */
$h1_tag               = of_get_option( mix_id( 'h1_tag' ) );
$homepage_description = of_get_option( mix_id( 'hompage_description' ) );
?>

<?php get_header() ?>
<?php get_template_part( 'tpl/layout', 'start' ) ?>

<!--Content go here-->
<div id="heading-index">
	<h1>
		<?php echo $h1_tag ? $h1_tag : '' ?>
	</h1>

	<p>
		<?php echo $homepage_description ? $homepage_description : '' ?>
	</p>
</div>

<!--Content end-->

<?php get_template_part( 'tpl/layout', 'end' ) ?>
<?php get_footer() ?>
