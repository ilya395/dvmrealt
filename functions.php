<?php

// хук события подклюсения скриптов
add_action('wp_enqueue_scripts', 'market_wp_media');

function market_wp_media() {
    wp_enqueue_style('main_style', get_template_directory_uri() . '/style.css', [], null, false);
    wp_enqueue_style('vertical_style', get_template_directory_uri() . '/assets/css/vertical.min.css', [], null, false);
    wp_enqueue_style('font_awesome_style', get_template_directory_uri() . '/assets/css/font-awesome.min.css', [], null, false);

    wp_enqueue_script('jquery_script', get_template_directory_uri() . '/assets/js/jquery.min.js', [], null, false);
    wp_enqueue_script('plugins_script', get_template_directory_uri() . '/assets/js/plugins.js', ['jquery_script'], null, true);
    wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/scripts.js', ['jquery_script'], null, true);
    if(is_page('booking') || is_page('booking-projects') || is_page('thanks') ) {
        wp_enqueue_script('maskedinput_script', get_template_directory_uri() . '/assets/js/maskedinput.min.js', ['jquery_script'], null, true);
        wp_enqueue_script('custom_script', get_template_directory_uri() . '/assets/js/custom.js', ['jquery_script'], null, true);
    };
};

// регистрация меню
add_action('after_setup_theme', 'navigation_zone');

function navigation_zone() {
    register_nav_menu('top', 'Top Menu');
}

// новый тип записей - карточка проекта
add_action('init', 'registering_post_type');

function registering_post_type() {
    register_post_type('projects', [
        'label'  => null,
		'labels' => [
			'name'               => 'Проекты', // основное название для типа записи
			'singular_name'      => 'Проект', // название для одной записи этого типа
			'add_new'            => 'Добавить проект', // для добавления новой записи
			'add_new_item'       => 'Добавление проекта', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование проекта', // для редактирования типа записи
			'new_item'           => 'Новый проект', // текст новой записи
			'view_item'          => 'Смотреть проект', // для просмотра записи этого типа.
			'search_items'       => 'Искать проект', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Проекты', // название меню
        ],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','thumbnail', 'custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => true,
    ]);
}

// получаем все карточки ЖК
function show_projects() {
 
    $args = array( 
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'ASC',
        'post_type'   => 'projects', // тип получаемых записей
    ); 

    $posts = get_posts($args);

    return $posts; 
}

// цепляемся к хуку, чтобы получить url до местного обработчика ajax
// add_action('wp_head', 'way_js_vars');

// function way_js_vars() {

//     $vars = array(
//         'ajax_url' => admin_url('admin-ajax.php'),
//     );

//     echo "<script>window.wp = " . json_encode($vars) . "</script>";
// }

// // обработка ajax
// add_action('wp_ajax_projectapp', 'simple_ajax_projectapp'); // ajax от админа или авторизованого пользователя
// add_action('wp_ajax_nopriv_projectapp', 'simple_ajax_projectapp'); // ajax от неавторизованного пользователя

// сюда нужно вписать токен вашего бота
define('TELEGRAM_TOKEN', '919656472:AAFtg4HI0cmd_fkpdJbSomlBMeJPCGIL9jM');

// сюда нужно вписать ваш внутренний айдишник
define('TELEGRAM_CHATID', '-1001352697643');

// обработка ajax запроса
function simple_ajax_projectapp() {

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

    };

    //данные из форм
    $project = trim($_POST['project']);
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    // данные для сообщения
    $message = array(
        "Заголовок" => $title_project,
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

    $res = array(
        'success' => 'Okay', 
        'err' => 'Not_Okay',
    );
    echo json_encode($res);

    wp_die();
};

?>