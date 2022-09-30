<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// show titles
add_theme_support('title-tag');
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
    $separator = '|';
    return $separator;
}
// delete tag line and change title
add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title)
{
    if (is_home()) {
        unset($title['tagline']); // delete tagline one homepage;
        $title['title'] = 'Coffee & co.で、飲みたいコーヒーに出逢う。'; // change the title text on home page
    }
    return $title;
}

// get images
add_theme_support('post-thumbnails');

// theme customization
add_theme_support('menus');

// Our custom post type function
function create_post_type()
{

    register_post_type(

        'menus',
        $args = [
            'labels' => [
                'name' => 'Menus',
                'singular_name' => 'menu'
            ],
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'menu'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields',),
        ]
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_post_type');

function cpt_taxonomy()
{
    register_taxonomy(
        'menu',
        ['menus'],
        $args = [
            'label' => 'Add category',
            'hierarchical' => false,
            'show_admin_column' => true,
            'publicly_queryable' => true,
            'rest_controller_class' => 'WP_REST_Terms_Controller',
            'show_in_rest' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'all', 'with_front' => true,],
        ],
    );
}
add_action('init', 'cpt_taxonomy');




// Our custom post type function
function create_another_post_type()
{

    register_post_type(

        'news',
        $args = [
            'labels' => [
                'name' => 'News',
                'singular_name' => 'news'
            ],
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'news'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields',),
        ]
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_another_post_type');

function cpt_another_taxonomy()
{
    register_taxonomy(
        'news',
        ['news'],
        $args = [
            'label' => 'Add category',
            'hierarchical' => false,
            'show_admin_column' => true,
            'publicly_queryable' => true,
            'rest_controller_class' => 'WP_REST_Terms_Controller',
            'show_in_rest' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'news', 'with_front' => true,],
        ],
    );
}
add_action('init', 'cpt_another_taxonomy');



add_action('wp', 'my_wpautop');
function my_wpautop()
{
    if (is_page('contact')) {
        remove_filter('the_content', 'wpautop');
    }
}
