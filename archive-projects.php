<?php get_header(); ?>
<?php echo the_ID(); ?>
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
                                <a class="ajax-link" data-type="page-transition" href="index.html">
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
                    <!-- Quick Menu -->
                    <div id="quickmenu">
                        <div class="outer">
                            <div class="inner">
                                <div id="quickmenu-scroll">
                                    <div id="close-quickmenu"></div>
                                    <ul id="quick-projects" data-fx="1">
										<?php	
											$posts = show_projects();
											// global $post;
											// $args = array( 
											// 	'orderby'     => 'date',
											// 	'order'       => 'ASC',
											// 	'post_type'   => 'projects',
											// );	
											// $posts = get_posts($args);	
											// foreach( $posts as $post ){
											// 	setup_postdata($post);
											// if( have_posts() ): 
											// 	while(have_posts()): the_post($args);
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
										<!-- <?php
												// endwhile;
											// else:
										?>
										<h2>ЖК не найдено!</h2>
										<?php
											// endif;
										?>	-->
										<?php
											endforeach;
										?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Scroll -->
                    <div id="content-scroll">
                        <!-- Main -->
                        <div id="main">
                            <!-- Main Content -->
                            <div id="main-content">
                                <!-- Showcase Holder -->
                                <div id="showcase-holder">
                                    <div id="showcase-tilt-wrap">
                                        <div id="showcase-tilt">
                                            <div id="showcase-slider" class="swiper-container">
                                                <div class="swiper-wrapper">
													<?php
													// перематываем цикл на начало, чтобы еще раз использовать `have_posts()`
													rewind_posts(); 

													if( have_posts() ): 
														while(have_posts()): the_post();
													?>		
													<!-- Section Slide -->
													<div class="swiper-slide" data-title="<?php echo get_post_meta($post->ID, 'data_title', true); ?>" data-subtitle="<?php echo get_post_meta($post->ID, 'data_subtitle', true); ?>" data-number="<?php echo '0' . get_post_meta($post->ID, 'data_number', true); ?>">
														<div class="img-mask">
															<div class="section-image desktop" data-src="<?php echo get_template_directory_uri() . '/assets/images/' . get_post_meta($post->ID, 'data_number', true) . '.jpg' ?>"></div>
															<div class="section-image mobile" data-src="<?php echo get_template_directory_uri() . '/assets/images/' . get_post_meta($post->ID, 'data_number', true) . 'm.png' ?>"></div>
														</div>
														<a class="title hide-ball" data-type="page-transition" href="<?php the_permalink(); ?>"><?php the_title(); ?>
														<span><?php echo '0' . get_post_meta($post->ID, 'data_number', true); ?></span>
														</a>
														<div class="subtitle"><?php echo get_post_meta($post->ID, 'data_description', true) . '||' . get_post_meta($post->ID, 'data_subtitle', true) ?></div>
													</div>
													<!--/Section Slide -->	
													<?php
															endwhile;
														else:
													?>
													<h2>ЖК не найдено!</h2>
													<?php
														endif;
													?>
													<!-- ------------- -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="showcase-captions-wrap no-stroked">
                                        <div class="showcase-captions"></div>
                                    </div>
                                </div>
                                <!-- Showcase Holder -->
                            </div>
                            <!--/Main Content -->
                        </div>
                        <!--/Main -->
                    </div>
                    <!--/Content Scroll -->
                    <!-- Footer -->
                    <footer class="fixed">
                        <div id="footer-container">
                            <div class="arrows-wrap">
                                <div class="prev-wrap parallax-wrap">
                                    <div class="swiper-button-prev swiper-button-white parallax-element"></div>
                                </div>
                                <div class="next-wrap parallax-wrap">
                                    <div class="swiper-button-next swiper-button-white parallax-element"></div>
                                </div>
                            </div>
                            <div class="footer-middle">
                               <div class="fack-date">Срок завершения строительства:</div> <div class="showcase-subtitles-wrap"></div>
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

<?php get_footer(); ?>