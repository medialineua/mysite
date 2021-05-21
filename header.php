<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	

			<header class="header">
		<div class="header__container container">
			<div class="header__wrapper align-items-center">
				<div class="header__burger js-header__burger"></div>
				<div class="header__logo">
					<a href="#">
						<img src="https://vap.medialine.cc/images/logo.svg" alt="">
					</a>
				</div>
				<nav class="header__nav js-header__nav">
					<ul class="header__nav-list">
						<li class="header__nav-item">
							<a href="./main.html" class="header__nav-link">Головна</a>
						</li>
						<li class="header__nav-item header__nav-item_dropdown">
							<span href="#" class="header__nav-link">Послуги</span>
							<ul class="header__nested-list">
								<li class="header__nested-item">
									<a href="/service.html" class="header__nested-link">Ссылdasdsadка 1</a>
								</li>
								<li class="header__nested-item">
									<a href="/service1.html" class="header__nested-link">Ссdsadasd dsadsa dsылка 2</a>
								</li>
							</ul>
						</li>
						<li class="header__nav-item">
							<a href="/legislation.html" class="header__nav-link">Законодавство</a>
						</li>
						<li class="header__nav-item">
							<a href="#info" class="header__nav-link">Контакти</a>
						</li>
						<li class="header__nav-item">
							<a href="#clients" class="header__nav-link">Партнери</a>
						</li>
					</ul>
				</nav>
				<div class="header__info">
					<div class="header__lang">
						<select name="" id="" class="select js-select">
							<option value="UA" selected>UA</option>
							<option value="RU">RU</option>
							<option value="US">US</option>
						</select>

					</div>
					<div class="header__phone">
						<ul>
							<li><a href="#">+38 (050) 463 77 00</a></li>
							<li><a href="#">+38 (050) 345 07 00</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
