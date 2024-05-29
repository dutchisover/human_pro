	<!DOCTYPE html>
	<html lang="ja" prefix="og: http://ogp.me/ns#">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Noto+Sans+JP:wght@100..900&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

		<?php get_template_part('inc/inc-tag-head'); ?>
		<?php get_template_part('inc/inc-style'); ?>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php get_template_part('inc/inc-tag-body'); ?>

		<!-- <div class="loading">
			<div class="loader">Loading...</div>
		</div> -->

		<header class="header">
			<div class="header__inner">
				<div class="header__logo">
					<a href="<?= home_url(); ?>">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/logo.svg" alt="PRO" width="365" height="40">
					</a>
				</div>

				<nav class="header__nav">
					<div class="header__nav-logo pc-none">
						<a href="<?php home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo_footer.svg" alt="PRO" width="480" height="53">
						</a>
					</div>

					<ul class="header__nav-list">
						<li class="header__nav-item"><a href="<?php home_url(); ?>/examination" data-current="examination">審査について</a></li>
						<li class="header__nav-item"><a href="<?php home_url(); ?>/admission" data-current="admission">入会案内</a></li>
						<li class="header__nav-item"><a href="<?php home_url(); ?>/authorize" data-current="authorize">認定一覧</a></li>
						<li class="header__nav-item"><a href="<?php home_url(); ?>/about" data-current="about">法人概要</a></li>
						<li class="header__nav-item"><a href="<?php home_url(); ?>/news" data-current="news">お知らせ</a></li>
						<li class="header__nav-button">
							<ul>
								<li class="header__nav-item"><a href="<?php home_url(); ?>/app" data-current="app">PRO認定の申請</a></li>
								<li class="header__nav-item"><a href="<?php home_url(); ?>/contact" data-current="contact">お問い合わせ</a></li>
							</ul>
						</li>
					</ul>

					<button class="header__menu-close pc-none">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/button_nav-close_sp.svg" alt="Close" class="header__menu-image" width="31" height="32">
					</button>
				</nav>

				<button class="header__menu pc-none">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/button_nav_sp.svg" alt="Menu" class="header__menu-image" width="32" height="32">
				</button>
			</div><!-- /.header__inner -->
		</header><!-- /.header --><!-- /.header -->
