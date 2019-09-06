<?php
	/*
		Template Name: Атлантис
		Template Post Type: projects
	*/
?>
<?php get_header(); ?>

<body class="hidden hidden-ball smooth-scroll">
	<noscript><div><img src="https://mc.yandex.ru/watch/52997014" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
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
							<a class="ajax-link" data-type="page-transition" href="/index.html">
								<img class="black-logo" src="<?php echo get_template_directory_uri() . '/assets/images/svg/logo.svg' ?>" alt="Logo">
								<img class="white-logo" src="<?php echo get_template_directory_uri() . '/assets/images/svg/logo.svg' ?>" alt="Logo">
							</a>
						</div>
						<!--/Logo -->
						<div class="header-middle">
							<div class="button-wrap left quickmenu">
								<div class="icon-wrap parallax-wrap">
									<div class="button-icon parallax-element">
										<a href="tel:79872175175" class="goal_zvonok"><i class="fa fa-phone fa-1x"></i></a>
									</div>
								</div>
								<div class="button-text" style="font-size: large"><a href="tel:79872175175" class="goal_zvonok"><span data-on="7 (843) 2-175-175" data-off="Звонок!">7 (843) 2-175-175</span></a></div>
							</div>
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
						<div id="hero" class="has-image overmask">
							<div id="hero-styles" class="parallax-onscroll">
								<div id="hero-caption">
									<div class="inner">
										<div class="title-min">Квартиры<br>в&nbsp;ЖК&nbsp;Atlantis Deluxe</div>
										<h4 class="mt-20">от 4 млн рублей</h4>
										<div class="hero-subtitle">Срок завершения строительства: 2 квартал 2021 года</div>
									</div>
								</div>
								<div class="hero-bottom">
									<div class="hb-left">
										<div id="scrolldown" class="text-rotate link"><span>Листать вниз<br />Листать вниз<br />Листать вниз<br />Листать вниз</span></div>
									</div>
								</div>
							</div>
						</div>
						<div id="hero-bg-wrapper">
							<div id="hero-image-parallax">
								<div class="hero-bg-image desktop" style="background-image:url('<?php echo get_template_directory_uri() . '/assets/images/1.jpg' ?>')"></div>
								<div class="hero-bg-image mobile" style="background-image:url('<?php echo get_template_directory_uri() . '/assets/images/1m.png' ?>')"></div>
							</div>
						</div>
						<!--/Hero Section -->
						<!-- Main Content -->
						<div id="main-content">
							<div id="main-page-content">
								<!-- Row -->
								<div class="vc_row row_padding_top row_padding_bottom">
									<div class="one_third">
										<h3 class="has-mask">Преимущества</h3>
										<h6 class="has-animation">Квартиры с видом на кремль, центральную набережную и акваторию Казанки</h6>
										<h6 class="has-animation">Панорамное остекление и собственные террасы</h6>
										<h6 class="has-animation">В 10 минутах от Казанского кремля</h6>
									</div>
									<div class="two_third last">
										<h3 class="has-mask">ЖК Atlantis Deluxe</h3>
										<p class="has-animation" data-delay="100">Премиальный жилой комплекс, закрытый охраняемый двор, подземный паркинг, дизайнерский подъезд.<br>Пляж возле дома. 1-,2-,3-комнатные квартиры бизнес-класса. Есть варианты с террасами и панорамным видом на&nbsp;Казанский кремль и центральную набережную.
										</p>
										<!--<a class="has-animation link" data-delay="140" href="#floor" target="_blank"><span>Подобрать квартиру</span></a>-->
									</div>
								</div>
								<!--/Row -->
								<!-- Row -->
								<div class="vc_row full">
									<figure class="has-animation has-parallax">
										<img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/1.jpg' ?>" alt="Atlantis">
										<figcaption>Интерьеры Atlantis Deluxe</figcaption>
									</figure>
								</div>
								<!--/Row -->
								<!-- Row -->
								<div class="vc_row row_padding_top row_padding_bottom">
									<div class="vc_row small text-align-center">
										<h3 class="has-mask">Однокомнатные</h3>
									</div>
									<hr>
									<div class="carousel has-animation">
										<div class="slide floor"><a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/1/img.08.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/1/img.08.png' ?>" alt="Atlantis"></a>
											<figcaption class="right"><a class="next-ajax-link-page" data-type="page-transition" href="<?php echo get_page_link(37); ?>">Подробнее</a></figcaption>
										</div>
										<div class="slide floor"><a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/1/img.36.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/1/img.36.png' ?>" alt="Atlantis"></a>
											<figcaption class="right"><a class="next-ajax-link-page" data-type="page-transition" href="<?php echo get_page_link(37); ?>">Подробнее</a></figcaption>
										</div>
										<div class="slide floor"><a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/1/img.07.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/1/img.07.png' ?>" alt="Atlantis"></a>
											<figcaption class="right"><a class="next-ajax-link-page" data-type="page-transition" href="<?php echo get_page_link(37); ?>">Подробнее</a></figcaption>
										</div>
									</div>
								</div>
								<div class="vc_row row_padding_top row_padding_bottom">
									<div class="vc_row small text-align-center">
										<h3 class="has-mask">Двухкомнатные</h3>
									</div>
									<hr>
									<div class="carousel has-animation">
										<div class="slide floor"><a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/2/img.46.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/2/img.46.png' ?>" alt="Atlantis"></a>
											<figcaption class="right"><a class="next-ajax-link-page" data-type="page-transition" href="<?php echo get_page_link(37); ?>">Подробнее</a></figcaption>
										</div>
										<div class="slide floor"><a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/2/img.47.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/2/img.47.png' ?>" alt="Atlantis"></a>
											<figcaption class="right"><a class="next-ajax-link-page" data-type="page-transition" href="<?php echo get_page_link(37); ?>">Подробнее</a></figcaption>
										</div>
										<div class="slide floor"><a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/2/img.78.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/2/img.78.png' ?>" alt="Atlantis"></a>
											<figcaption class="right"><a class="next-ajax-link-page" data-type="page-transition" href="<?php echo get_page_link(37); ?>">Подробнее</a></figcaption>
										</div>
									</div>
								</div>
								<div class="vc_row row_padding_top row_padding_bottom">
									<div class="vc_row small text-align-center">
										<h3 class="has-mask">Трехкомнатные</h3>
									</div>
									<hr>
									<div class="carousel has-animation">
										<div class="slide floor"><a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/3/img.90.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/3/img.90.png' ?>" alt="Atlantis"></a>
											<figcaption class="right"><a class="next-ajax-link-page" data-type="page-transition" href="<?php echo get_page_link(37); ?>">Подробнее</a></figcaption>
										</div>
										<div class="slide floor"><a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/3/img.92.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/3/img.92.png' ?>" alt="Atlantis"></a>
											<figcaption class="right"><a class="next-ajax-link-page" data-type="page-transition" href="<?php echo get_page_link(37); ?>">Подробнее</a></figcaption>
										</div>
										<div class="slide floor"><a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/3/img.96.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/3/img.96.png' ?>" alt="Atlantis"></a>
											<figcaption class="right"><a class="next-ajax-link-page" data-type="page-transition" href="<?php echo get_page_link(37); ?>">Подробнее</a></figcaption>
										</div>
									</div>
								</div>
								<!--/Row -->
								<!-- Row -->
								<div class="vc_row row_padding_top row_padding_left row_padding_right full">
									<div class="vc_row small text-align-center">
										<h3 class="has-mask">Галерея интерьеров</h3>
									</div>
									<hr>
									<div class="carousel has-animation gallery">
										<div class="slide">
											<a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/1.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/1.png' ?>" alt="Atlantis"></a>
											<figcaption>Интерьеры Atlantis Deluxe</figcaption>
										</div>
										<div class="slide">
											<a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/2.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/2.png' ?>" alt="Atlantis"></a>
											<figcaption>Интерьеры Atlantis Deluxe</figcaption>
										</div>
										<div class="slide">
											<a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/3.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/3.png' ?>" alt="Atlantis"></a>
											<figcaption>Интерьеры Atlantis Deluxe</figcaption>
										</div>
										<div class="slide">
											<a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/4.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/4.png' ?>" alt="Atlantis"></a>
											<figcaption>Интерьеры Atlantis Deluxe</figcaption>
										</div>
										<div class="slide">
											<a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/5.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/5.png' ?>" alt="Atlantis"></a>
											<figcaption>Интерьеры Atlantis Deluxe</figcaption>
										</div>
										<div class="slide">
											<a href="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/6.png' ?>" class="image-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/projects/atlantis/gallery/6.png' ?>" alt="Atlantis"></a>
											<figcaption>Интерьеры Atlantis Deluxe</figcaption>
										</div>
									</div>
								</div>
								<!--/Row -->
								<div class="vc_row row_padding_left row_padding_right text-align-center mt-50 mb-50">
									<div class="button-border outline rounded parallax-element-second mt-20 mb-10">
										<input type="submit" name="button" value="Оставьте заявку и узнайте больше" onClick='location.href="<?php the_permalink(37); ?>"' />
									</div>
								</div>
								<div class="vc_row row_padding_top row_padding_bottom">
									<p>Проектная декларация и информация о застройщике на сайте <a href="https://domatlantis.ru/" target="_blank" style="text-decoration: underline">domatlantis.ru</a></p>
								</div>
							</div>
							<!--/Main Page Content -->
							<!-- Project Navigation -->
							<div id="project-nav">
								<div class="next-project-wrap">
									<div class="next-project-image">
										<div class="next-project-image-bg" style="background-image:url('<?php echo get_template_directory_uri() . '/assets/images/2.jpg' ?>')"></div>
									</div>
									<div class="next-project-title">
										<div class="inner">
											<div class="next-subtitle-info has-animation">Следующий проект</div>
											<div class="has-animation float-left" data-delay="150"><a class="main-title next-ajax-link-project hide-ball" data-type="page-transition" href="<?php the_permalink(27); ?>">Richmond</a></div>
											<div class="has-animation next-project-right" data-delay="150"><a class="main-title next-ajax-link-project hide-ball" data-type="page-transition" href="<?php echo get_post_type_archive_link('projects'); ?>">Все проекты</a></div>
											<div class="next-subtitle-name">2 квартал 2021</div>
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
									<li><span class="parallax-wrap"><a class="parallax-element" href="https://vk.com/public183978620" target="_blank">Vk</a></span></li>
									<li><span class="parallax-wrap"><a class="parallax-element" href="https://instagram.com/dvm.realt">In</a></span></li>
								</ul>
							</div>
						</div>
					</footer>
					<!--/Footer -->
				</div>
				<!--/Content Scroll -->
			</div>
			<!--/Page Content -->
		</div>
		<div class="hb-right- mobile"><a href="tel:79872175175" onclick="ym(54269659, 'reachGoal', 'zvonok'); return true;"><i class="fa fa-phone fa-3x"></i></a></div>
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
	<!-- calltouch -->
	<script src="https://mod.calltouch.ru/init.js?id=3auj2mxu"></script>
	<!-- /calltouch -->

<?php get_footer(); ?>