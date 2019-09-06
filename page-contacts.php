<?php
/*
	Template Name: страница контактов
*/
?>

<?php get_header(); ?>

<body class="hidden hidden-ball smooth-scroll">
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PK4G36D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<main>
		<!-- Preloader -->
		<div class="preloader-wrap">
			<div class="outer">
				<div class="inner">
					<!-- <div class="percentage" id="precent"></div> -->
					<div class="trackbar">
						<div class="loadbar"></div>
					</div>
				</div>
			</div>
		</div>
		<!--/Preloader -->
		<div class="cd-index cd-main-content">
			<!-- Page Content -->
			<div id="page-content" class="light-content">
				<!-- Header -->
				<header class="fullscreen-menu">
					<div id="header-container">
						<!-- Logo -->
						<div id="logo" class="hide-ball">
							<a class="ajax-link" data-type="page-transition" href="<?php echo home_url(); ?>">
								<img class="black-logo" src="<?php echo get_template_directory_uri() . '/assets/images/svg/logo.svg' ?>" alt="Logo">
								<img class="white-logo" src="<?php echo get_template_directory_uri() . '/assets/images/svg/logo.svg' ?>" alt="Logo">
							</a>
						</div>
						<!--/Logo -->
						<div class="header-middle">
							<div class="button-wrap left quickmenu">
								<div class="icon-wrap parallax-wrap">
									<div class="button-icon parallax-element">
										<a href="tel:79872175175" class="goal_zvonok"><i class="fa fa-phone fa-2x"></i></a>
									</div>
								</div>
								<div class="button-text"><a href="tel:79872175175" class="goal_zvonok"><span data-on="Позвоните нам" data-off="Звонок!">Позвоните нам</span></a></div>
							</div>
						</div>
						<div class="header-middle">
							<!--<div class="button-wrap left quickmenu">
								<div class="button-text-hi"><span>Предлагаем квартиры в новостройках</span></div>
							</div>-->
						</div>
						<!-- Navigation -->
						<nav>
							<div class="nav-height">
								<div class="outer">
									<?php wp_nav_menu([
											'theme location' => 'top',
											'container'       => 'div',
											'container_class' => 'inner', 
											'container_id'    => '',
											'menu_class'      => 'menu', 
											'menu_id'         => '',
											'items_wrap'      => '<ul data-breakpoint="10025" class="flexnav">%3$s</ul>',
										]); 
									?>
								</div>
							</div>
						</nav>
						<!--/Navigation -->
						<!-- Menu Burger -->
						<div class="button-wrap right  menu">
							<div class="icon-wrap parallax-wrap">
								<div class="button-icon parallax-element">
									<div id="burger-wrapper">
										<div id="menu-burger">
											<span></span>
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="button-text"><span data-hover="Меню">Меню</span></div>
						</div>
						<!--/Menu Burger -->
					</div>
				</header>
				<!--/Header -->
				<!-- Content Scroll -->
				<div id="content-scroll">
					<!-- Main -->
					<div id="main">
						<!-- Hero Section -->
						<div id="hero">
							<div id="hero-styles" class="parallax-onscroll">
								<div id="hero-caption">
									<div class="inner">
										<div class="hero-title text-align-center">DVM Group</div>
										<h1 class="has-mask text-align-center" data-delay="10">7 (843) 2-175-175</h1>
									</div>
								</div>
							</div>
						</div>
						<!--/Hero Section -->
						<!-- Main Content -->
						<div id="main-content">
							<div id="main-page-content">
								<div class="vc_row">
									<hr>
								</div>
							</div>
							<!-- Project Navigation -->
							<div id="page-nav">
								<div class="next-page-wrap">
									<div class="next-page-title">
										<div class="inner" style="text-align: center;">
											<h3 style="line-height: 1.5;">Мы будем рады ответить на ваши вопросы!</h3>
											<div class="has-animation button-border outline rounded" data-delay="150"><a class="hide-ball next-ajax-link-page" data-type="page-transition" href="<?php echo home_url() . '/booking' ?>">Оставить заявку</a></div>
											<div class="subtitle-name">Давайте начнем!</div>
										</div>
									</div>
								</div>
							</div>
							<!--/Project Navigation -->
						</div>
						<!--/Main Content -->
					</div>
					<!--/Main -->
					<!-- Footer -->
					<footer class="hidden">
						<div id="footer-container">
							<div id="backtotop" class="button-wrap left">
								<div class="icon-wrap parallax-wrap">
									<div class="button-icon parallax-element">
										<i class="fa fa-angle-up"></i>
									</div>
								</div>
								<div class="button-text"><span data-hover="Back Top">Наверх</span></div>
							</div>
							<div class="footer-middle">
								<div class="copyright">2019 © <a class="link" target="_blank" href="https://dvmrealt.ru/">DVM Group</a></div>
							</div>
							<div class="socials-wrap">
								<div class="socials-icon"><i class="fa fa-share-alt" aria-hidden="true"></i></div>
								<div class="socials-text">Соц. сети</div>
								<ul class="socials">
									<li><span class="parallax-wrap"><a class="parallax-element" href="https://www.facebook.com/dvm.realt" target="_blank">Fb</a></span></li>
									<li><span class="parallax-wrap"><a class="parallax-element" href="https://vk.com/club183978620" target="_blank">Vk</a></span></li>
									<li><span class="parallax-wrap"><a class="parallax-element" href="https://instagram.com/dvm.realt">In</a></span></li>
								</ul>
							</div>
						</div>
					</footer>
					<!--/Footer -->
				</div>
			</div>
			<!--/Page Content -->
		</div>
	</main>
	<div class="cd-cover-layer"></div>
	<div id="magic-cursor">
		<div id="ball">
			<div id="hold-event"></div>
			<div id="ball-loader"></div>
		</div>
	</div>
	<div id="clone-image"></div>
	<div id="rotate-device"></div>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpK1sWi3J3EbUOkF_K4-UHzi285HyFX5M&amp;sensor=false"></script>

<?php get_footer(); ?>