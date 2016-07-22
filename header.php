<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Prodavec_okon
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="google-site-verification" content="jw6pRWvYR8RWq_K4ej-wUkiqUyA7YI-W6MbkcdwXsE0"/>
<meta name='yandex-verification' content='5a65cb0f7677c261'/>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="/wp-content/themes/prodavec_okon/favicon.ico" type="image/x-icon"/>

<!-- JQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<!-- Main JS Script -->
<script type="text/javascript" src="/wp-content/themes/prodavec_okon/js/span.js"></script>

<!-- Google Analytics counter -->
<script type="text/javascript" src="/wp-content/themes/prodavec_okon/js/google_analytics.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" src="/wp-content/themes/prodavec_okon/js/yandex_metrika.js"></script>

<!-- JS Scripts For VK & FaceBook Comments-->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
<script type="text/javascript">
  VK.init({apiId: 2442838, onlyWidgets: true});
</script>
<script type="text/javascript" src="/wp-content/themes/prodavec_okon/js/facebook.js"></script>

<?php wp_head(); ?>
<?php require_once("walker_menu.php"); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
	<div><img src="https://mc.yandex.ru/watch/7365511" style="position:absolute; left:-9999px;" alt="" /></div>
	<header class="header">
		<div class="place_menu">
			<div class="place_main_menu">
				<a href="http://prodavecokon.ru/"><div class="logo f_left"><div class="logo_img"></div></div></a>
				<div class="line f_left"></div>
				<div class="menu f_left">
					<!--noindex-->
					<?
						$walker = new mainMenuWalker ();
						$args_menu_top = array(
						'menu'    => 'top_menu',
						'container'   => '',
						'walker' => $walker
						);
			
						wp_nav_menu( $args_menu_top );
					?>
					<!--/noindex-->
				</div>
				<div class="tel_num f_right">
					<div class="tel">+7-962-350-10-95</div>
					<div class="info">пн.-пт.., с 9.00 до 18.00</div>
					<div class="info">vip@prodavecokon.ru</div>
				</div>
				<div class="line f_right"></div>
			</div>
		</div>
	</header>

	<div class="middle">
