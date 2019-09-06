<?php
	/*
		Template Name: Благодарность
		Template Post Type: page
	*/
?>
<?php get_header(); ?>

<?php

// var_dump($_POST);

// сюда нужно вписать токен вашего бота
define('TELEGRAM_TOKEN', '919656472:AAFtg4HI0cmd_fkpdJbSomlBMeJPCGIL9jM');

// сюда нужно вписать ваш внутренний айдишник
define('TELEGRAM_CHATID', '-1001352697643');

// обработка запроса

function message_to_telegram($text){
    
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => TELEGRAM_CHATID,
                'text' => $text,
            ),
            CURLOPT_PROXY => '149.56.15.105:7653',
            CURLOPT_PROXYUSERPWD => 'tgdm:superslivaestbanan',
            CURLOPT_PROXYTYPE => CURLPROXY_SOCKS5,
            CURLOPT_PROXYAUTH => CURLAUTH_BASIC,
        )
    );
    curl_exec($ch);

    $token = '919656472:AAFtg4HI0cmd_fkpdJbSomlBMeJPCGIL9jM';
    $chatid = '-1001352697643';
    fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text={$text}","r");

};

//данные из форм
$project = trim($_POST['user_project']);
$name = trim($_POST['user_name']);
$phone = trim($_POST['user_phone']);
// данные для сообщения
$message = array(
    "Заголовок" => $project,
    "Имя" => $name,
    "Телефон" => $phone,
);
//формируем сообщение
$text="";
foreach($message as $key => $value) {
        $text .= "".$key.": ".$value."\n";
};
// отправляем ссобщение
if ($name != "" and $phone != "") {
    message_to_telegram($text);
};
?>

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
                            <a class="ajax-link" data-type="page-transition" href="<?php echo home_url('/'); ?>">
                                <img class="black-logo" src="<?php echo get_template_directory_uri() . '/assets/images/svg/logo.svg' ?>" alt="Logo">
                                <img class="white-logo" src="<?php echo get_template_directory_uri() . '/assets/images/svg/logo.svg' ?>" alt="Logo">
                            </a>
                        </div>
                        <!--/Logo -->
                        <div class="header-middle">
                            <div class="button-wrap left quickmenu">
                                <div class="icon-wrap parallax-wrap">
                                    <div class="button-icon parallax-element">
                                        <a href="tel:78432175175" class="goal_zvonok"><i class="fa fa-phone fa-1x"></i></a>
                                    </div>
                                </div>
                                <div class="button-text"><a href="tel:78432175175" class="goal_zvonok"><span data-on="Позвоните нам" data-off="Звонок!">Позвоните нам</span></a></div>
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
                        <div id="hero">
                            <div id="hero-styles" class="parallax-onscroll">
                                <div id="hero-caption">
                                    <div class="inner">
                                        <div class="hero-title">DVM Group</div>
                                        <hr>
                                        <hr>
                                        <h2>Благодарим Вас за интерес к нашему предложению!</h2>
                                        <hr>
                                        <h4>В ближайшее время менеджер свяжется с Вами и расскажет подробнее о предложении.</h4>                                     
                                        <div class="button-box has-animation mt-50" data-delay="100" style="margin-right: 20px">
                                            <div class="rabbit-button-wrap parallax-wrap hide-ball">
                                                <div class="rabbit-button parallax-element">
                                                    <div class="button-border outline rounded parallax-element-second">
                                                        <input type="submit" id="button" name="button" value="На главную" onclick="location.href='/projects'" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Hero Section -->
                    </div>
                    <!--/Main -->
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

    <?php
    // var_dump($project);
    if($project == "Атлантис"){
        echo "<script>jQuery(function($){get_file_url('" . get_template_directory_uri() . "/documents/Atlantis.pdf');});</script>";
    } elseif($project == "Малиновка"){
        echo "<script>jQuery(function($){get_file_url('" . get_template_directory_uri() . "/documents/Malinovka.pdf');});</script>";
    } elseif($project == "Норвежский"){
        echo "<script>jQuery(function($){get_file_url('" . get_template_directory_uri() . "/documents/Norvegian.pdf');});</script>";
    } elseif($project == "Привилегия"){
        echo "<script>jQuery(function($){get_file_url('" . get_template_directory_uri() . "/documents/Privilege.pdf');});</script>";
    } elseif($project == "Richmond"){
        echo "<script>jQuery(function($){get_file_url('" . get_template_directory_uri() . "/documents/Richmond.pdf');});</script>";
    } elseif($project == "Skyline"){
        echo "<script>jQuery(function($){get_file_url('" . get_template_directory_uri() . "/documents/Skyline.pdf');});</script>";
    } else {
        echo "<script>console.log('Чот нету файла!');</script>";
    } 
    ?>

<?php get_footer('thanks'); ?>