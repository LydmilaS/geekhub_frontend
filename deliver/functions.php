<?php
    function blogin_resources() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

/* В боковой колонке */
function true_register_wp_sidebars() {
    register_sidebar(
        array(
            'id' => 'sidebar1', // уникальный id
            'name' => 'Боковая колонка', // название сайдбара
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
            'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
            'after_title' => '</h3>'
        )
    );
}
//Navigation Menus
register_nav_menus(array (
    'primary' => __('Primary Menu', 'blogin'),
    'footer' => __('Footer Menu', 'blogin'),
));

function blogin_setup() {
	add_theme_support('post-thumbnails');
	add_action('wp_enqueue_scripts', 'blogin_resources');
	add_action( 'widgets_init', 'true_register_wp_sidebars' );
	add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'blogin_setup');

//Get top ancestor
function get_top_ancestor_id() {

	global $post;

	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}

	return $post->ID;
}

// Регистрация пользовательского типа записи Portfolio
if (!function_exists('my_custom_post_types')):
    function my_custom_post_types() {
        register_post_type('Portfolio', array (
            'label' => 'Portfolio',
            'public'=> true,
            'publicly_queryable' => true,
            'menu_position' => null,
            'show ui' => true,
            'menu_icon'           => 'dashicons-format-image',
            'capability_type' => 'post',
            'hierarchical' => false,
            'rewrite' => true,
            'query_var' => true,
            'supports' => array (
                'title',
                'editor',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'thumbnail',
                'author',
                'page-attributes',)
        ));
    }
add_action('init', 'my_custom_post_types');
endif;