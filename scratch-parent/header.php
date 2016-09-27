<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php
	$favicon = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('favicon') : '';
	if( !empty( $favicon ) ) :
	?>
	<link rel="icon" type="image/png" href="<?php echo $favicon['url'] ?>">
	<?php endif ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>
<div class="preloader">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/preloader.gif" alt="">
</div>

<div class="wrapper">

	<header class="mainheader">
		
		<section class="mainheader__top">
			<div class="center">
				<a href="tel:+491702678471" class="phone">
					+49 170 2678 471
				</a>
				<span></span>
				<a href="mailto:<?php echo get_bloginfo('admin_email'); ?>" class="mail">
					<?php echo get_bloginfo('admin_email'); ?>
				</a>
			</div>
		</section>

		<section class="mainheader__middle">
			<div class="center">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
					</a>
				</div>
				<div class="nav">
					<ul>
						<li>
							<a href="#">Главная</a>
						</li>
						<li>
							<a href="#">Услуги и ТАрифы</a>
						</li>
						<li>
							<a href="#">Новые технологии</a>
						</li>
						<li>
							<a href="#">Клиентам</a>
						</li>
						<li>
							<a href="#">Информация</a>
						</li>
						<li>
							<a href="#">Контакты</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
 
		<section class="mainheader__bottom">
			<div class="slideshow">
				<div class="slide" style="background-image:url(assets/images/header_slide_1.jpg)">
					<div class="table">
						<div class="table-cell">
							<blockquote>
								<div class="title">
									ДомКомфорт 1
								</div>
								<div class="descr">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br/><br/>
									Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velied ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
								</div>
							</blockquote>
						</div>
					</div>					
				</div>
				<div class="slide" style="background-image:url(assets/images/header_slide_2.jpg)">
					<div class="table">
						<div class="table-cell">
							<blockquote>
								<div class="title">
									ДомКомфорт 2
								</div>
								<div class="descr">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
									Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velied 
								</div>
							</blockquote>
						</div>
					</div>					
				</div>
			</div>
		</section>

	</header>

<!-- <div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
				   rel="home"><?php echo ( function_exists('fw_get_db_settings_option') ) ?
						fw_get_db_settings_option('logo') : get_option( 'blogname' ); ?></a>
			</h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'unyson' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'unyson' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'unyson' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header>
	<div id="main" class="site-main"> -->
