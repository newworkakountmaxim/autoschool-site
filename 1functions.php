<?php
/**
 * autoschool-mariupol functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package autoschool-mariupol
 */

add_filter( 'show_admin_bar', '__return_false', PHP_INT_MAX );

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

	// wp_enqueue_style( 'main-css',  get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'main-css',  get_template_directory_uri() . '/Auto/app/css/main.css' );

	//wp_enqueue_script( 'autoschool-mariupol-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20191215', true );

	wp_enqueue_script( 'slick-js', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' , array( 'jquery' ), '20191215', true );

	// wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '20191215', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/Auto/app/js/main.js', array( 'jquery' ), '20191215', true );


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

add_action('init', 'my_custom_type_filials');
function my_custom_type_filials(){
    $args = array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Филиалы', // основное название для типа записи
            'singular_name'      => 'Филиал', // название для одной записи этого типа
            'add_new'            => 'Добавить Филиал', // для добавления новой записи
            'add_new_item'       => 'Новый Филиал', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => '', // для редактирования типа записи
            'new_item'           => '', // текст новой записи
            'view_item'          => 'Просмотреть', // для просмотра записи этого типа.
            'search_items'       => '', // для поиска по этим типам записи
            'not_found'          => '', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => '', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родительских типов. для древовидных типов
            'menu_name'          => 'Филиалы', // название меню
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
        'supports'            => array('title','editor','thumbnail'),
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => true,
    );
    register_post_type('contacts', $args );
}

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
/**
 * Хлебные крошки для WordPress (breadcrumbs)
 *
 * @param  string [$sep  = '']      Разделитель. По умолчанию ' » '
 * @param  array  [$l10n = array()] Для локализации. См. переменную $default_l10n.
 * @param  array  [$args = array()] Опции. См. переменную $def_args
 * @return string Выводит на экран HTML код
 *
 * version 3.2
 */
function kama_breadcrumbs( $sep = ' » ', $l10n = array(), $args = array() ){
    $kb = new Kama_Breadcrumbs;
    echo $kb->get_crumbs( $sep, $l10n, $args );
}

class Kama_Breadcrumbs {

    public $arg;

    // Локализация
    static $l10n = array(
        'home'       => 'Главная',
        'paged'      => 'Страница %d',
        '_404'       => 'Ошибка 404',
        'search'     => 'Результаты поиска по запросу - <b>%s</b>',
        'author'     => 'Архив автора: <b>%s</b>',
        'year'       => 'Архив за <b>%d</b> год',
        'month'      => 'Архив за: <b>%s</b>',
        'day'        => '',
        'attachment' => 'Медиа: %s',
        'tag'        => 'Записи по метке: <b>%s</b>',
        'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
        // tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
        // Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
    );

    // Параметры по умолчанию
    static $args = array(
        'on_front_page'   => true,  // выводить крошки на главной странице
        'show_post_title' => true,  // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
        'show_term_title' => true,  // показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
        'title_patt'      => '<span class="kb_title">%s</span>', // шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
        'last_sep'        => true,  // показывать последний разделитель, когда заголовок в конце не отображается
        'markup'          => 'schema.org', // 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
        // или можно указать свой массив разметки:
        // array( 'wrappatt'=>'<div class="kama_breadcrumbs">%s</div>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', )
        'priority_tax'    => array('category'), // приоритетные таксономии, нужно когда запись в нескольких таксах
        'priority_terms'  => array(), // 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
        // Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
        // 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
        // порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
        'nofollow' => false, // добавлять rel=nofollow к ссылкам?

        // служебные
        'sep'             => '',
        'linkpatt'        => '',
        'pg_end'          => '',
    );

    function get_crumbs( $sep, $l10n, $args ){
        global $post, $wp_query, $wp_post_types;

        self::$args['sep'] = $sep;

        // Фильтрует дефолты и сливает
        $loc = (object) array_merge( apply_filters('kama_breadcrumbs_default_loc', self::$l10n ), $l10n );
        $arg = (object) array_merge( apply_filters('kama_breadcrumbs_default_args', self::$args ), $args );

        $arg->sep = '<span class="kb_sep">'. $arg->sep .'</span>'; // дополним

        // упростим
        $sep = & $arg->sep;
        $this->arg = & $arg;

        // микроразметка ---
        if(1){
            $mark = & $arg->markup;

            // Разметка по умолчанию
            if( ! $mark ) $mark = array(
                'wrappatt'  => '<div class="kama_breadcrumbs">%s</div>',
                'linkpatt'  => '<a href="%s">%s</a>',
                'sep_after' => '',
            );
            // rdf
            elseif( $mark === 'rdf.data-vocabulary.org' ) $mark = array(
                'wrappatt'   => '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</div>',
                'linkpatt'   => '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">%s</a>',
                'sep_after'  => '</span>', // закрываем span после разделителя!
            );
            // schema.org
            elseif( $mark === 'schema.org' ) $mark = array(
                'wrappatt'   => '<div class="kama_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">%s</div>',
                'linkpatt'   => '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="%s" itemprop="item"><span itemprop="name">%s</span></a></span>',
                'sep_after'  => '',
            );

            elseif( ! is_array($mark) )
                die( __CLASS__ .': "markup" parameter must be array...');

            $wrappatt  = $mark['wrappatt'];
            $arg->linkpatt  = $arg->nofollow ? str_replace('<a ','<a rel="nofollow"', $mark['linkpatt']) : $mark['linkpatt'];
            $arg->sep      .= $mark['sep_after']."\n";
        }

        $linkpatt = $arg->linkpatt; // упростим

        $q_obj = get_queried_object();

        // может это архив пустой таксы?
        if( empty($post) )
            $ptype = & $wp_post_types[ get_taxonomy($q_obj->taxonomy)->object_type[0] ];
        else
            $ptype = & $wp_post_types[ $post->post_type ];

        // paged
        $arg->pg_end = '';
        if( ($paged_num = get_query_var('paged')) || ($paged_num = get_query_var('page')) )
            $arg->pg_end = $sep . sprintf( $loc->paged, (int) $paged_num );

        $pg_end = $arg->pg_end; // упростим

        // ну, с богом...
        $out = '';

        if( is_front_page() ){
            return $arg->on_front_page ? sprintf( $wrappatt, ( $paged_num ? sprintf($linkpatt, get_home_url(), $loc->home) . $pg_end : $loc->home ) ) : '';
        }
        // страница записей, когда для главной установлена отдельная страница.
        elseif( is_home() ) {
            $out = $paged_num ? ( sprintf( $linkpatt, get_permalink($q_obj), esc_html($q_obj->post_title) ) . $pg_end ) : esc_html($q_obj->post_title);
        }
        elseif( is_404() ){
            $out = $loc->_404;
        }
        elseif( is_search() ){
            $out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
        }
        elseif( is_author() ){
            $tit = sprintf( $loc->author, esc_html($q_obj->display_name) );
            $out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
        }
        elseif( is_year() || is_month() || is_day() ){
            $y_url  = get_year_link( $year = get_the_time('Y') );

            if( is_year() ){
                $tit = sprintf( $loc->year, $year );
                $out = ( $paged_num ? sprintf($linkpatt, $y_url, $tit) . $pg_end : $tit );
            }
            // month day
            else {
                $y_link = sprintf( $linkpatt, $y_url, $year);
                $m_url  = get_month_link( $year, get_the_time('m') );

                if( is_month() ){
                    $tit = sprintf( $loc->month, get_the_time('F') );
                    $out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
                }
                elseif( is_day() ){
                    $m_link = sprintf( $linkpatt, $m_url, get_the_time('F'));
                    $out = $y_link . $sep . $m_link . $sep . get_the_time('l');
                }
            }
        }
        // Древовидные записи
        elseif( is_singular() && $ptype->hierarchical ){
            $out = $this->_add_title( $this->_page_crumbs($post), $post );
        }
        // Таксы, плоские записи и вложения
        else {
            $term = $q_obj; // таксономии

            // определяем термин для записей (включая вложения attachments)
            if( is_singular() ){
                // изменим $post, чтобы определить термин родителя вложения
                if( is_attachment() && $post->post_parent ){
                    $save_post = $post; // сохраним
                    $post = get_post($post->post_parent);
                }

                // учитывает если вложения прикрепляются к таксам древовидным - все бывает :)
                $taxonomies = get_object_taxonomies( $post->post_type );
                // оставим только древовидные и публичные, мало ли...
                $taxonomies = array_intersect( $taxonomies, get_taxonomies( array('hierarchical' => true, 'public' => true) ) );

                if( $taxonomies ){
                    // сортируем по приоритету
                    if( ! empty($arg->priority_tax) ){
                        usort( $taxonomies, function($a,$b)use($arg){
                            $a_index = array_search($a, $arg->priority_tax);
                            if( $a_index === false ) $a_index = 9999999;

                            $b_index = array_search($b, $arg->priority_tax);
                            if( $b_index === false ) $b_index = 9999999;

                            return ( $b_index === $a_index ) ? 0 : ( $b_index < $a_index ? 1 : -1 ); // меньше индекс - выше
                        } );
                    }

                    // пробуем получить термины, в порядке приоритета такс
                    foreach( $taxonomies as $taxname ){
                        if( $terms = get_the_terms( $post->ID, $taxname ) ){
                            // проверим приоритетные термины для таксы
                            $prior_terms = & $arg->priority_terms[ $taxname ];
                            if( $prior_terms && count($terms) > 2 ){
                                foreach( (array) $prior_terms as $term_id ){
                                    $filter_field = is_numeric($term_id) ? 'term_id' : 'slug';
                                    $_terms = wp_list_filter( $terms, array($filter_field=>$term_id) );

                                    if( $_terms ){
                                        $term = array_shift( $_terms );
                                        break;
                                    }
                                }
                            }
                            else
                                $term = array_shift( $terms );

                            break;
                        }
                    }
                }

                if( isset($save_post) ) $post = $save_post; // вернем обратно (для вложений)
            }

            // вывод

            // все виды записей с терминами или термины
            if( $term && isset($term->term_id) ){
                $term = apply_filters('kama_breadcrumbs_term', $term );

                // attachment
                if( is_attachment() ){
                    if( ! $post->post_parent )
                        $out = sprintf( $loc->attachment, esc_html($post->post_title) );
                    else {
                        $_crumbs    = $this->_tax_crumbs( $term, 'self' );
                        $parent_tit = sprintf( $linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent) );
                        $_out = implode( $sep, array($_crumbs, $parent_tit) );
                        $out = $this->_add_title( $_out, $post );
                    }
                }
                // single
                elseif( is_single() ){
                    $_crumbs = $this->_tax_crumbs( $term, 'self' );
                    $out = $this->_add_title( $_crumbs, $post );
                }
                // не древовидная такса (метки)
                elseif( ! is_taxonomy_hierarchical($term->taxonomy) ){
                    // метка
                    if( is_tag() )
                        $out = $this->_add_title('', $term, sprintf( $loc->tag, esc_html($term->name) ) );
                    // такса
                    elseif( is_tax() ){
                        $post_label = $ptype->labels->name;
                        $tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
                        $out = $this->_add_title('', $term, sprintf( $loc->tax_tag, $post_label, $tax_label, esc_html($term->name) ) );
                    }
                }
                // древовидная такса (рибрики)
                else {
                    $_crumbs = $this->_tax_crumbs( $term, 'parent' );
                    $out = $this->_add_title( $_crumbs, $term, esc_html($term->name) );
                }
            }
            // влоежния от записи без терминов
            elseif( is_attachment() ){
                $parent = get_post($post->post_parent);
                $parent_link = sprintf( $linkpatt, get_permalink($parent), esc_html($parent->post_title) );
                $_out = $parent_link;

                // вложение от записи древовидного типа записи
                if( is_post_type_hierarchical($parent->post_type) ){
                    $parent_crumbs = $this->_page_crumbs($parent);
                    $_out = implode( $sep, array( $parent_crumbs, $parent_link ) );
                }

                $out = $this->_add_title( $_out, $post );
            }
            // записи без терминов
            elseif( is_singular() ){
                $out = $this->_add_title( '', $post );
            }
        }

        // замена ссылки на архивную страницу для типа записи
        $home_after = apply_filters('kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype );

        if( '' === $home_after ){
            // Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
            if( $ptype->has_archive && ! in_array( $ptype->name, array('post','page','attachment') )
                && ( is_post_type_archive() || is_singular() || (is_tax() && in_array($term->taxonomy, $ptype->taxonomies)) )
            ){
                $pt_title = $ptype->labels->name;

                // первая страница архива типа записи
                if( is_post_type_archive() && ! $paged_num )
                    $home_after = $pt_title;
                // singular, paged post_type_archive, tax
                else{
                    $home_after = sprintf( $linkpatt, get_post_type_archive_link($ptype->name), $pt_title );

                    $home_after .= ( ($paged_num && ! is_tax()) ? $pg_end : $sep ); // пагинация
                }
            }
        }

        $before_out = sprintf( $linkpatt, home_url(), $loc->home ) . ( $home_after ? $sep.$home_after : ($out ? $sep : '') );

        $out = apply_filters('kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg );

        $out = sprintf( $wrappatt, $before_out . $out );

        return apply_filters('kama_breadcrumbs', $out, $sep, $loc, $arg );
    }

    function _page_crumbs( $post ){
        $parent = $post->post_parent;

        $crumbs = array();
        while( $parent ){
            $page = get_post( $parent );
            $crumbs[] = sprintf( $this->arg->linkpatt, get_permalink($page), esc_html($page->post_title) );
            $parent = $page->post_parent;
        }

        return implode( $this->arg->sep, array_reverse($crumbs) );
    }

    function _tax_crumbs( $term, $start_from = 'self' ){
        $termlinks = array();
        $term_id = ($start_from === 'parent') ? $term->parent : $term->term_id;
        while( $term_id ){
            $term       = get_term( $term_id, $term->taxonomy );
            $termlinks[] = sprintf( $this->arg->linkpatt, get_term_link($term), esc_html($term->name) );
            $term_id    = $term->parent;
        }

        if( $termlinks )
            return implode( $this->arg->sep, array_reverse($termlinks) ) /*. $this->arg->sep*/;
        return '';
    }

    // добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
    function _add_title( $add_to, $obj, $term_title = '' ){
        $arg = & $this->arg; // упростим...
        $title = $term_title ? $term_title : esc_html($obj->post_title); // $term_title чиститься отдельно, теги моугт быть...
        $show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

        // пагинация
        if( $arg->pg_end ){
            $link = $term_title ? get_term_link($obj) : get_permalink($obj);
            $add_to .= ($add_to ? $arg->sep : '') . sprintf( $arg->linkpatt, $link, $title ) . $arg->pg_end;
        }
        // дополняем - ставим sep
        elseif( $add_to ){
            if( $show_title )
                $add_to .= $arg->sep . sprintf( $arg->title_patt, $title );
            elseif( $arg->last_sep )
                $add_to .= $arg->sep;
        }
        // sep будет потом...
        elseif( $show_title )
            $add_to = sprintf( $arg->title_patt, $title );

        return $add_to;
    }

}
//End kroshki