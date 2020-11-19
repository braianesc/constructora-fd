<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Johnnygolite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'johnnygolite-theme/site/page-start' ); ?>
<?php johnnygolite_get_page_preloader(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'johnnygolite' ); ?></a>
	<header id="masthead" <?php echo johnnygolite_get_container_classes( 'site-header' ); ?>>
        <div class="top_panel_banner">
            <?php johnnygolite_top_panel_baner(); ?>
        </div>
		<?php get_template_part( 'template-parts/header', 'header' ); ?>
	</header><!-- #masthead -->
	<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
	<div id="content" <?php echo johnnygolite_get_container_classes( 'site-content' ); ?>>
