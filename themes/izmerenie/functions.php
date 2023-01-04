<?php
/**
 * izmerenie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package izmerenie
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function izmerenie_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on izmerenie, use a find and replace
		* to change 'izmerenie' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'izmerenie', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'Aside-menu' => esc_html__( 'Основне меню', 'izmerenie' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'izmerenie_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'izmerenie_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function izmerenie_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'izmerenie_content_width', 640 );
}
add_action( 'after_setup_theme', 'izmerenie_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function izmerenie_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'izmerenie' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'izmerenie' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'izmerenie_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function izmerenie_scripts() {
	wp_enqueue_style( 'izmerenie-style', get_template_directory_uri() . '/dist/css/style.css', array(), _S_VERSION );
	wp_style_add_data( 'izmerenie-style', 'rtl', 'replace' );

	wp_enqueue_script( 'izmerenie-navigation', get_template_directory_uri() . '/dist/js/common.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'izmerenie_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

register_post_type('programs', [
    'label' => null,
    'labels' => [
        'name' => 'Програми', // основное название для типа записи
        'singular_name' => 'Програма', // название для одной записи этого типа
        'add_new' => 'Додати програму', // для добавления новой записи
        'add_new_item' => 'Додати нову', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item' => 'Редагувати програму', // для редактирования типа записи
        'new_item' => 'Новая програма', // текст новой записи
        'view_item' => 'Дивитися програму', // для просмотра записи этого типа.
        'search_items' => 'Шукати програму', // для поиска по этим типам записи
        'not_found' => 'не знайдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Not found in the basket', // если не было найдено в корзине
        'parent_item_colon' => '', // для родителей (у древовидных типов)
        'menu_name' => 'Програми', // название меню
    ],
    'description' => '',
    'public' => true,
    'taxonomies'		 => array( 'product-category' ),
    // 'publicly_queryable'  => null, // зависит от public
    // 'exclude_from_search' => null, // зависит от public
    // 'show_ui'             => null, // зависит от public
    // 'show_in_nav_menus'   => null, // зависит от public
    'show_in_menu' => null, // показывать ли в меню адмнки
    // 'show_in_admin_bar'   => null, // зависит от show_in_menu
    'show_in_rest' => null, // добавить в REST API. C WP 4.7
    'rest_base' => null, // $post_type. C WP 4.7
    'menu_position' => null,
    'menu_icon' => 'dashicons-products',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical' => false,
    'supports' => ['title','editor','thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'has_archive' => true,
    'rewrite' => true,
    'query_var' => true,
]);
register_post_type('podcasts', [
    'label' => null,
    'labels' => [
        'name' => 'Підкасти', // основное название для типа записи
        'singular_name' => 'Підкаст', // название для одной записи этого типа
        'add_new' => 'Додати підкаст', // для добавления новой записи
        'add_new_item' => 'Додати новий', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item' => 'Редагувати підкаст', // для редактирования типа записи
        'new_item' => 'Новий підкаст', // текст новой записи
        'view_item' => 'Дивитися підкаст', // для просмотра записи этого типа.
        'search_items' => 'Шукати підкаст', // для поиска по этим типам записи
        'not_found' => 'не знайдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Not found in the basket', // если не было найдено в корзине
        'parent_item_colon' => '', // для родителей (у древовидных типов)
        'menu_name' => 'Підкасти', // название меню
    ],
    'description' => '',
    'public' => true,
    'taxonomies'		 => array( 'podcasts-category' ),
    // 'publicly_queryable'  => null, // зависит от public
    // 'exclude_from_search' => null, // зависит от public
    // 'show_ui'             => null, // зависит от public
    // 'show_in_nav_menus'   => null, // зависит от public
    'show_in_menu' => null, // показывать ли в меню адмнки
    // 'show_in_admin_bar'   => null, // зависит от show_in_menu
    'show_in_rest' => null, // добавить в REST API. C WP 4.7
    'rest_base' => null, // $post_type. C WP 4.7
    'menu_position' => null,
    'menu_icon' => 'dashicons-images-alt',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical' => false,
    'supports' => ['title','editor','thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'has_archive' => true,
    'rewrite' => true,
    'query_var' => true,
]);
add_action( 'init', 'mayak_taxonomy_register' );
function mayak_taxonomy_register(){
    $labels = array(
        'name'                     => 'Категорії', // основное название во множественном числе
        'singular_name'            => 'Категорія', // название единичного элемента таксономии
        'menu_name'                => 'Категорії', // Название в меню. По умолчанию: name.
        'all_items'                => 'Всі категорії',
        'edit_item'                => 'Змінити категорію',
        'view_item'                => 'Дивитись категорію', // текст кнопки просмотра записи на сайте (если поддерживается типом)
        'update_item'              => 'Оновити категорію',
        'add_new_item'             => 'Додати категорію',
        'new_item_name'            => 'Назва нової новой',
        'parent_item'              => 'Батьківська категорія', // только для таксономий с иерархией
        'parent_item_colon'        => 'Батьківська категорія:',
        'search_items'             => 'Шукати категорію',
        'popular_items'            => 'Популярні категорії', // для таксономий без иерархий
        'separate_items_with_commas' => 'Разделяйте категории запятыми',
        'add_or_remove_items'      => 'Добавить или удалить категорию',
        'choose_from_most_used'    => 'Выбрать из часто используемых категорий',
        'not_found'                => 'Категория не найден',
        'back_to_items'            => '← Назад к полам',
    );
    $args = array(
        'labels'                => $labels,
        'label'                 => 'Категорії',
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_rest'          => false,
        'rest_base'             => 'url_rest',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'show_tagcloud'         => true,
        'show_in_quick_edit'    => true,
        'meta_box_cb'           => null,
        'show_admin_column'     => true,
        'description'           => '',
        'hierarchical'          => true,
        'update_count_callback' => '',
        'query_var'             => $taxonomy,
        'rewrite'               => true,
        'sort'                  => true,
        '_builtin'              => false,
    );
    register_taxonomy('programs-category', array('programs'), $args);
}

add_action( 'init', 'mayak_taxonomy_register1' );
function mayak_taxonomy_register1(){
    $labels = array(
        'name'                     => 'Категорії', // основное название во множественном числе
        'singular_name'            => 'Категорія', // название единичного элемента таксономии
        'menu_name'                => 'Категорії', // Название в меню. По умолчанию: name.
        'all_items'                => 'Всі категорії',
        'edit_item'                => 'Змінити категорію',
        'view_item'                => 'Дивитись категорію', // текст кнопки просмотра записи на сайте (если поддерживается типом)
        'update_item'              => 'Оновити категорію',
        'add_new_item'             => 'Додати категорію',
        'new_item_name'            => 'Назва нової новой',
        'parent_item'              => 'Батьківська категорія', // только для таксономий с иерархией
        'parent_item_colon'        => 'Батьківська категорія:',
        'search_items'             => 'Шукати категорію',
        'popular_items'            => 'Популярні категорії', // для таксономий без иерархий
        'separate_items_with_commas' => 'Разделяйте категории запятыми',
        'add_or_remove_items'      => 'Добавить или удалить категорию',
        'choose_from_most_used'    => 'Выбрать из часто используемых категорий',
        'not_found'                => 'Категория не найден',
        'back_to_items'            => '← Назад к полам',
    );
    $args = array(
        'labels'                => $labels,
        'label'                 => 'Категорії',
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_rest'          => false,
        'rest_base'             => 'url_rest',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'show_tagcloud'         => true,
        'show_in_quick_edit'    => true,
        'meta_box_cb'           => null,
        'show_admin_column'     => true,
        'description'           => '',
        'hierarchical'          => true,
        'update_count_callback' => '',
        'query_var'             => $taxonomy,
        'rewrite'               => true,
        'sort'                  => true,
        '_builtin'              => false,
    );
    register_taxonomy('podcasts-category', array('podcasts'), $args);
}

register_post_type('videos', [
    'label' => null,
    'labels' => [
        'name' => 'Відео', // основное название для типа записи
        'singular_name' => 'Відео', // название для одной записи этого типа
        'add_new' => 'Додати відео', // для добавления новой записи
        'add_new_item' => 'Додати відео', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item' => 'Редагувати відео', // для редактирования типа записи
        'new_item' => 'Нове відео', // текст новой записи
        'view_item' => 'Дивитися відео', // для просмотра записи этого типа.
        'search_items' => 'Шукати відео', // для поиска по этим типам записи
        'not_found' => 'не знайдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Not found in the basket', // если не было найдено в корзине
        'parent_item_colon' => '', // для родителей (у древовидных типов)
        'menu_name' => 'Відео', // название меню
    ],
    'description' => '',
    'public' => true,
    'taxonomies'		 => array( 'videos-category' ),
    // 'publicly_queryable'  => null, // зависит от public
    // 'exclude_from_search' => null, // зависит от public
    // 'show_ui'             => null, // зависит от public
    // 'show_in_nav_menus'   => null, // зависит от public
    'show_in_menu' => null, // показывать ли в меню адмнки
    // 'show_in_admin_bar'   => null, // зависит от show_in_menu
    'show_in_rest' => null, // добавить в REST API. C WP 4.7
    'rest_base' => null, // $post_type. C WP 4.7
    'menu_position' => null,
    'menu_icon' => 'dashicons-format-video',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical' => false,
    'supports' => ['title','editor','thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'has_archive' => true,
    'rewrite' => true,
    'query_var' => true,
]);
add_action( 'init', 'mayak_taxonomy_register2' );
function mayak_taxonomy_register2(){
    $labels = array(
        'name'                     => 'Категорії', // основное название во множественном числе
        'singular_name'            => 'Категорія', // название единичного элемента таксономии
        'menu_name'                => 'Категорії', // Название в меню. По умолчанию: name.
        'all_items'                => 'Всі категорії',
        'edit_item'                => 'Змінити категорію',
        'view_item'                => 'Дивитись категорію', // текст кнопки просмотра записи на сайте (если поддерживается типом)
        'update_item'              => 'Оновити категорію',
        'add_new_item'             => 'Додати категорію',
        'new_item_name'            => 'Назва нової новой',
        'parent_item'              => 'Батьківська категорія', // только для таксономий с иерархией
        'parent_item_colon'        => 'Батьківська категорія:',
        'search_items'             => 'Шукати категорію',
        'popular_items'            => 'Популярні категорії', // для таксономий без иерархий
        'separate_items_with_commas' => 'Разделяйте категории запятыми',
        'add_or_remove_items'      => 'Добавить или удалить категорию',
        'choose_from_most_used'    => 'Выбрать из часто используемых категорий',
        'not_found'                => 'Категория не найден',
        'back_to_items'            => '← Назад к полам',
    );
    $args = array(
        'labels'                => $labels,
        'label'                 => 'Категорії',
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_rest'          => false,
        'rest_base'             => 'url_rest',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'show_tagcloud'         => true,
        'show_in_quick_edit'    => true,
        'meta_box_cb'           => null,
        'show_admin_column'     => true,
        'description'           => '',
        'hierarchical'          => true,
        'update_count_callback' => '',
        'query_var'             => $taxonomy,
        'rewrite'               => true,
        'sort'                  => true,
        '_builtin'              => false,
    );
    register_taxonomy('videos-category', array('videos'), $args);
}
