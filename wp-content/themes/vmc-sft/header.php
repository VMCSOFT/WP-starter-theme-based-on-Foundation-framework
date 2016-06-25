<?php
/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 6/20/16
 * Time: 11:45 AM
 */
$logo       = of_get_option( mix_id( 'logo_image' ) );
$logo_width = of_get_option( mix_id( 'logo_width' ) );
$logo_heigh = of_get_option( mix_id( 'logo_height' ) );
$slider     = of_get_option( mix_id( 'slider_section' ) );
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '-', true ) ?></title>
	<?php wp_head() ?>
</head>
<body <?php body_class() ?>>

<div id="wrapper">

	<header class="row">
		<div id="logo" class="large-4 medium-12 small-12 columns">
			<a href="<?php bloginfo( 'url' ) ?>">
				<img src="<?php echo $logo ?>" alt="<?php wp_title( '-', true ) ?>"
				     width="<?php echo $logo_width ?>"
				     height="<?php echo $logo_heigh ?>">
			</a>
		</div>
		<div class="contact-infos large-8 medium-12 small-12 columns">
			<ul>
				<li>Address</li>
				<li>Phone</li>
				<li>Email</li>
			</ul>
		</div>

		<nav class="large-12 columns">
			<?php wp_nav_menu( array(
				'id'             => 'menu-main',
				'menu_class'     => 'dropdown menu',
				'theme_location' => 'main_nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
				'walker'         => new VMC_Walker_Nav_Menu()
			) ) ?>
		</nav>
	</header>

	<?php if ( is_home() ): ?>
		<section id="slider" class="row">
			<div class="large-12 columns">
				<?php echo do_shortcode( $slider ) ?>
			</div>
		</section>
	<?php endif ?>
