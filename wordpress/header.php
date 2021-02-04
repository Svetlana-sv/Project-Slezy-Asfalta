<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Main_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
            <div class="ul ul-header">
                <div class="li-header li--logo">
	                <?php the_custom_logo([
		                'theme_location'  => 'Main menu'
                    ]); ?>
                </div>
                <div class="li-header">
                    <div class="ul-header--left-bar">
                        <div class="li--left-bar-top">
                            <input id="toggle" type="checkbox">
                            <div class="menu--main-menu">
	                            <?php wp_nav_menu(); ?>
                            </div>
                            <label for="toggle">
                                <div class="menu--img">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                            </label>
                        </div>
                        <div class="li--left-bar">
                            <div class="li--left-bar">
	                            <?php dynamic_sidebar( 'social' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</header><!-- #masthead -->