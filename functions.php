<?php
/**
 * autoschool-mariupol functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package autoschool-mariupol
 */

if ( ! function_exists( 'autoschool_mariupol_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function autoschool_mariupol_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on autoschool-mariupol, use a find and replace
		 * to change 'autoschool-mariupol' to the name of your theme in all the template files.
		 */
		//load_theme_textdomain( 'autoschool-mariupol', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		//add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		//add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'autoschool-mariupol' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
//		add_theme_support( 'custom-background', apply_filters( 'autoschool_mariupol_custom_background_args', array(
//			'default-color' => 'ffffff',
//			'default-image' => '',
//		) ) );

		// Add theme support for selective refresh for widgets.
		//add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'autoschool_mariupol_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function autoschool_mariupol_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'autoschool_mariupol_content_width', 640 );
}
add_action( 'after_setup_theme', 'autoschool_mariupol_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
//function autoschool_mariupol_widgets_init() {
//	register_sidebar( array(
//		'name'          => esc_html__( 'Sidebar', 'autoschool-mariupol' ),
//		'id'            => 'sidebar-1',
//		'description'   => esc_html__( 'Add widgets here.', 'autoschool-mariupol' ),
//		'before_widget' => '<section id="%1$s" class="widget %2$s">',
//		'after_widget'  => '</section>',
//		'before_title'  => '<h2 class="widget-title">',
//		'after_title'   => '</h2>',
//	) );
//}
//add_action( 'widgets_init', 'autoschool_mariupol_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function autoschool_mariupol_scripts() {
	wp_enqueue_style( 'autoschool-mariupol-style', get_stylesheet_uri() );

	wp_enqueue_style( 'slick-css',  'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );

	wp_enqueue_style( 'monserat-font',  'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Roboto:300,400,500,700&display=swap&subset=cyrillic,cyrillic-ext' );

	wp_enqueue_style( 'main-css',  get_template_directory_uri() . '/css/main.css' );

	//wp_enqueue_script( 'autoschool-mariupol-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20191215', true );

	wp_enqueue_script( 'slick-js', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' , array( 'jquery' ), '20191215', true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '20191215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'autoschool_mariupol_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
//}




////////////////////////////////////////////////////////////
///
///
add_action('init', 'my_custom_type_blog');
function my_custom_type_blog(){
    $args = array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Блог', // основное название для типа записи
            'singular_name'      => 'Блог', // название для одной записи этого типа
            'add_new'            => 'Добавить', // для добавления новой записи
            'edit_item'          => '', // для редактирования типа записи
            'new_item'           => '', // текст новой записи
            'view_item'          => 'Просмотреть', // для просмотра записи этого типа.
            'search_items'       => '', // для поиска по этим типам записи
            'not_found'          => '', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => '', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родительских типов. для древовидных типов
            'menu_name'          => 'Блог', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => null,
        'show_in_menu'        => true,
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => array('title','editor','excerpt','thumbnail'),
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => true,
    );
    register_post_type('blog', $args );
}

//add_action('init', 'my_custom_type_contacts');
//function my_custom_type_contacts(){
//    $args = array(
//        'label'  => null,
//        'labels' => array(
//            'name'               => 'Контакты', // основное название для типа записи
//            'singular_name'      => 'Контакт', // название для одной записи этого типа
//            'add_new'            => 'Добавить контакт', // для добавления новой записи
//            'add_new_item'       => 'Новый контакт', // заголовка у вновь создаваемой записи в админ-панели.
//            'edit_item'          => '', // для редактирования типа записи
//            'new_item'           => '', // текст новой записи
//            'view_item'          => 'Просмотреть', // для просмотра записи этого типа.
//            'search_items'       => '', // для поиска по этим типам записи
//            'not_found'          => '', // если в результате поиска ничего не было найдено
//            'not_found_in_trash' => '', // если не было найдено в корзине
//            'parent_item_colon'  => '', // для родительских типов. для древовидных типов
//            'menu_name'          => 'Контакты', // название меню
//        ),
//        'description'         => '',
//        'public'              => true,
//        'publicly_queryable'  => null,
//        'exclude_from_search' => null,
//        'show_ui'             => null,
//        'show_in_menu'        => true,
//        'menu_position'       => null,
//        'menu_icon'           => null,
//        //'capability_type'   => 'post',
//        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
//        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
//        'hierarchical'        => false,
//        'supports'            => array('title','editor','excerpt','thumbnail'),
//        'taxonomies'          => array(),
//        'has_archive'         => false,
//        'rewrite'             => true,
//        'query_var'           => true,
//        'show_in_nav_menus'   => true,
//    );
//    register_post_type('contacts', $args );
//}

// хук для регистрации
add_action('init', 'create_blog_taxonomy');
function create_blog_taxonomy()
{
    register_taxonomy('taxonomy-blog', array('blog'), array(
        'label' => '', // определяется параметром $labels->name
        'labels' => array(
            'name' => 'Категории блога',
            'singular_name' => 'Категория блога',
            'search_items' => 'Search Категории блога',
            'all_items' => 'All Категории блогай',
            'parent_item' => 'Parent Категория блога',
            'parent_item_colon' => 'Parent Категория блога:',
            'edit_item' => 'Edit Категория блога',
            'update_item' => 'Update Категория блога',
            'add_new_item' => 'Add New Категория блога',
            'new_item_name' => 'New Категория блога',
            'menu_name' => 'Категория блога',
        ),
        'description' => '', // описание таксономии
        'public' => true,
        'publicly_queryable' => null, // равен аргументу public
        'show_in_nav_menus' => true, // равен аргументу public
        'show_ui' => true, // равен аргументу public
        'show_tagcloud' => true, // равен аргументу show_ui
        'show_in_rest' => null, // добавить в REST API
        'rest_base' => null, // $taxonomy
        'hierarchical' => true,
        'update_count_callback' => '',
        'rewrite' => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities' => array(),
        'meta_box_cb' => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
        'show_admin_column' => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
        '_builtin' => false,
        'show_in_quick_edit' => null, // по умолчанию значение show_ui
    ));
}

//Kroshki

//End kroshki