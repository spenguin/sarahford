<?php
/**
 *
 * @package WordPress
 * @subpackage Sarah_Ford
 * @since Sarah Ford 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--    <link href="https://fonts.googleapis.com/css?family=Fugaz+One|Gentium+Basic" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Philosopher|Varela" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo site_url(); ?>/wp-content/themes/sarahford/css/style.css?<?php echo time(); ?>" >
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <a id="top"></a>
        <header>
            <h1>Sarah Ford</h1>
            <nav>
                <label for="menu">Menu</label>
                <input type="checkbox" name="menu" id="menu" />
                <ul>
                    <li><a href="#vo-demos">Voiceover Demos</a></li>
                    <li><a href="#vo-videos">Video Voiceovers</a></li>
                    <li><a href="#clients">Clients</a></li>
                    <li><a href="#contact">Get in touch</a></li>
                </ul>
            </nav>
        </header>
        <main>