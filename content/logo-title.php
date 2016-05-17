<?php
/**
 * This template is used to display the logo or site title.
 *
 * @package Natural Lite
 * @since Natural Lite 1.0
 */

?>

<?php $header_image = get_header_image(); ?>

<?php if ( get_theme_mod( 'natural_lite_logo', get_template_directory_uri() . '/images/logo.png' ) ) { ?>

	<h1 id="logo"<?php if ( ! empty( $header_image ) ) { ?> class="vertical-center"<?php } ?>>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( get_theme_mod( 'natural_lite_logo', get_template_directory_uri() . '/images/logo.png' ) ); ?>" alt="" />
			<span class="logo-text"><?php echo wp_kses_post( get_bloginfo( 'name' ) ); ?></span>
		</a>
	</h1>

<?php } else { ?>

	<div id="masthead"<?php if ( ! empty( $header_image ) ) { ?> class="vertical-center"<?php } ?>>

		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_kses_post( get_bloginfo( 'name' ) ); ?></a>
		</h1>

		<h2 class="site-description">
			<?php echo html_entity_decode( get_bloginfo( 'description' ) ); ?>
		</h2>

	</div>

<?php } ?>
