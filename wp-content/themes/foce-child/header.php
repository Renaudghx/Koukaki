<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
        <ul><li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li></ul>
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div id="menu">
            <img class="imgMenu logoMenu" src="<?php echo get_template_directory_uri() . '-child/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            <img class="imgMenu flower flowerMenu1" src="<?php echo get_template_directory_uri() . '-child/assets/images/orchid.png'; ?> " alt="Une Orchidé">
            <img class="imgMenu flower flowerMenu2" src="<?php echo get_template_directory_uri() . '-child/assets/images/Sunflower.png'; ?> " alt="Un tournesol">
            <img class="imgMenu flower flowerMenu3" src="<?php echo get_template_directory_uri() . '-child/assets/images/random_flower.png'; ?> " alt="Une fleur">
            <img class="imgMenu flower flowerMenu4" src="<?php echo get_template_directory_uri() . '-child/assets/images/flower.png'; ?> " alt="Une autre fleur">
            <img class="imgMenu flower flowerMenu5" src="<?php echo get_template_directory_uri() . '-child/assets/images/hibiscus_footer.png'; ?> " alt="Encore une fleur">
            <img class="imgMenu cat catMenu1" src="<?php echo get_template_directory_uri() . '-child/assets/images/catBlue.png'; ?> " alt="Une Chat Bleu">
            <img class="imgMenu cat catMenu2" src="<?php echo get_template_directory_uri() . '-child/assets/images/catGrey.png'; ?> " alt="Un chat gris">
            <img class="imgMenu cat catMenu3" src="<?php echo get_template_directory_uri() . '-child/assets/images/catYellow.png'; ?> " alt="Un chat jaune">             
                <ul>
                    <li><a href="#story">Histoire</a></li>
                    <li><a href="#characters">Personnages</a></li>               
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                </ul>
                <p class="imgMenu menuP">STUDIO KOUKAKI</p>                
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
