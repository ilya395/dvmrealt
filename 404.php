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
						<div id="hero" class="has-image" style="background: #20202040">
							<div id="hero-styles" class="parallax-onscroll">
								<div id="hero-caption">
									<div class="inner hello-page">
										<img class="mb-50 desktop" src="<?php echo get_template_directory_uri() . '/assets/images/svg/logo.svg' ?>" style="height: 5rem; margin: 0 auto 50px;" alt="">
										<h4 class="hello-page">#уйня какая-то </h4>
										<h4 class="hello-sub pt-20">Давай поищем чего-нибудь другого!</h4>
										<div class="button-border outline rounded parallax-element-second mt-20 mb-10">
											<input type="submit" name="button" value="Проекты" onClick='location.href="projects"' />
										</div>
									</div>
								</div>
								<div class="hero-bottom">
									<div class="hb-right mobile"><a href="tel:79872175175" class="goal_zvonok"><i class="fa fa-phone fa-3x"></i></a></div>
								</div>
							</div>
						</div>
						<div id="hero-bg-wrapper">
							<div id="hero-image-parallax">
								<div class="hero-bg-image" style="background-image:url('<?php echo get_template_directory_uri() . '/assets/images/main.png' ?>')"></div>
							</div>
						</div>
						<!--/Hero Section -->
					</div>
					<!--/Main -->
				</div>
				<!--/Content Scroll -->
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

<?php get_footer(); ?>