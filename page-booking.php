<?php
	/*
		Template Name: Заявка
		Template Post Type: page
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
                                            <div class="plus-img">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-text"><span data-on="Все предложения" data-off="Закрыть">Все предложения</span></div>
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
                    <!-- Quick Menu -->
                    <div id="quickmenu">
                        <div class="outer">
                            <div class="inner">
                                <div id="quickmenu-scroll">
                                    <div id="close-quickmenu"></div>
                                    <ul id="quick-projects" data-fx="1">
										<?php 
											$posts = show_projects();
											foreach( $posts as $post ):
										?>
                                        <li class="hide-ball" data-img="<?php echo get_template_directory_uri() . '/assets/images/' . get_post_meta($post->ID, 'data_number', true) . '.jpg' ?>">
                                            <a class="quick-title" data-type="page-transition" href="<?php the_permalink(); ?>">
												<div class="q-timeline"><?php the_title(); ?>
													<span><?php echo '0' . get_post_meta($post->ID, 'data_number', true); ?></span>
                                                    <div class="q-cat"><?php echo get_post_meta($post->ID, 'data_subtitle', true); ?></div>
                                                </div>
                                            </a>
                                        </li>
										<?php
											endforeach;
										?>
                                        <!-- <li class="hide-ball" data-img="images/1.jpg">
                                            <a class="quick-title" data-type="page-transition" href="/project-atlantis.html">
                                                <div class="q-timeline">Atlantis Deluxe<span>01</span>
                                                    <div class="q-cat">2 квартал 2021 года</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="hide-ball" data-img="images/2.jpg">
                                            <a class="quick-title" data-type="page-transition" href="/project-richmond.html">
                                                <div class="q-timeline">Richmond<span>02</span>
                                                    <div class="q-cat">2 квартал 2021 года</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="hide-ball" data-img="images/3.jpg">
                                            <a class="quick-title" data-type="page-transition" href="/project-skyline.html">
                                                <div class="q-timeline">Skyline<span>03</span>
                                                    <div class="q-cat">2 квартал 2021 года</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="hide-ball" data-img="images/4.jpg">
                                            <a class="quick-title" data-type="page-transition" href="/project-privilege.html">
                                                <div class="q-timeline">Привилегия<span>04</span>
                                                    <div class="q-cat">2 квартал 2021 года</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="hide-ball" data-img="images/5.jpg">
                                            <a class="quick-title" data-type="page-transition" href="/project-norwegian.html">
                                                <div class="q-timeline">Норвежский<span>05</span>
                                                    <div class="q-cat">2 квартал 2021 года</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="hide-ball" data-img="images/6.jpg">
                                            <a class="quick-title" data-type="page-transition" href="/project-malinovka.html">
                                                <div class="q-timeline">Малиновка<span>06</span>
                                                    <div class="q-cat">4 кв 2020 года (1 оч.), 2 кв 2021 года (2 оч.)</div>
                                                </div>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Scroll -->
                    <div id="content-scroll">
                        <!-- Main -->
                        <div id="main">
                            <div id="showcase-holder" class="relative">
                                <!-- Hero Section -->
                                <div id="hero">
                                    <div id="hero-styles" class="parallax-onscroll">
                                        <div id="hero-caption">
                                            <div class="inner">
                                                <div class="hero-title">Заявка</div>
                                                <div class="hero-subtitle">Наши менеджеры свяжутся с Вами</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/Hero Section -->
                                <!-- Main Content -->
                                <div id="main-content">
                                    <!-- Main Page Content -->
                                    <div id="main-page-content">
                                        <!-- Row -->
                                        <div class="vc_row row_padding_bottom">
                                            <div class="two_third last">
                                                <!-- Contact Formular -->
                                                <div id="contact-formular">
                                                    <div id="message"></div>
                                                    <form action="<?php the_permalink(39); ?>" method="POST" class="contactform" accept-charset="utf-8" autocomplete="off" enctype="multipart/form-data">
                                                        <input type="hidden" id="goal" name="goal" value="dvmgroup">
                                                        <div class="name-box has-animation" data-delay="100">
                                                            <input type="hidden" id="project" name="user_project" value="Заявка DVM Group">
                                                        </div>
                                                        <div class="name-box has-animation" data-delay="100">
                                                            <input type="name" id="name" name="user_name" value="" placeholder="Ваше Имя"><label class="input_label"></label>
                                                        </div>
                                                        <div class="email-box has-animation" data-delay="150">
                                                            <input type="tel" id="phone" onkeyup="check()" name="user_phone" value="" placeholder="Ваш Телефон"><label class="input_label"></label>
                                                        </div>
                                                        <div class="button-box has-animation mt-50" data-delay="100">
                                                            <div class="rabbit-button-wrap parallax-wrap hide-ball">
                                                                <div class="rabbit-button parallax-element">
                                                                    <div class="button-border outline rounded parallax-element-second">
                                                                        <input disabled type="submit" id="button" name="button" value="Отправить" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!--/Contact Formular -->
                                            </div>
                                        </div>
                                        <!--/Row -->
                                    </div>
                                    <!--/Main Page Content -->
                                    <!-- Project Navigation -->
                                    <div id="page-nav">
                                        <div class="next-page-wrap">
                                            <div class="next-page-title">
                                                <div class="inner">
                                                    <div class="subtitle-info has-animation">Свяжитесь с нами</div>
                                                    <div class="has-animation" data-delay="150"><a class="page-title hide-ball next-ajax-link-page" data-type="page-transition" href="<?php the_permalink(9); ?>">Контакты</a></div>
                                                    <!--<div class="subtitle-name">Мы лучшие</div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Project Navigation -->
                                </div>
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
                                    <div class="copyright">2019 © <a class="link" target="_blank" href="https://www.dvmrealt.ru/">DVM Group</a></div>
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
                    <div class="thumb-container">
                        <div class="thumb-page" data-src="<?php echo get_template_directory_uri() . '/assets/images/1.jpg' ?>"></div>
                        <div class="thumb-page" data-src="<?php echo get_template_directory_uri() . '/assets/images/2.jpg' ?>"></div>
                        <div class="thumb-page" data-src="<?php echo get_template_directory_uri() . '/assets/images/3.jpg' ?>"></div>
                        <div class="thumb-page" data-src="<?php echo get_template_directory_uri() . '/assets/images/4.jpg' ?>"></div>
                        <div class="thumb-page" data-src="<?php echo get_template_directory_uri() . '/assets/images/5.jpg' ?>"></div>
                        <div class="thumb-page" data-src="<?php echo get_template_directory_uri() . '/assets/images/6.jpg' ?>"></div>
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

        <!-- <script src="js/maskedinput.min.js"></script>
        <script src="js/custom.js"></script> -->

<?php get_footer(); ?>