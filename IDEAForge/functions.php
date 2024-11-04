<?php 

function gt_setup(){

    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap');
    wp_enqueue_style('fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    wp_enqueue_style('style', get_stylesheet_uri('/css/style.css'));
    wp_enqueue_style('style', get_stylesheet_uri('lib/owlcarousel/assets/owl.carousel.min.css'));
    wp_enqueue_style('style', get_stylesheet_uri('lib/lightbox/css/lightbox.min.css'));
    wp_enqueue_style('style', get_stylesheet_uri('lib/flaticon/font/flaticon.css'));
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0.0', true);
    wp_enqueue_script('main', get_theme_file_uri('lib/easing/easing.min.js'), NULL, '1.0.0', true);
    wp_enqueue_script('main', get_theme_file_uri('lib/owlcarousel/owl.carousel.min.js'), NULL, '1.0.0', true);
    wp_enqueue_script('main', get_theme_file_uri('lib/isotope/isotope.pkgd.min.js'), NULL, '1.0.0', true);
    wp_enqueue_script('main', get_theme_file_uri('lib/lightbox/js/lightbox.min.js'), NULL, '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

// adding theme support 

function gt_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
);

}
add_action('after_setup_theme', 'gt_init');

//project post type

function get_custom_post_type(){
    register_post_type('project',
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' =>'Project',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-media-document',
            'public' => true,
            'has_archive' => true,
            'supports' =>array(
                'title', 'thumbnail','editor', 'excerpt','comments'
            )

        )
    );
}
add_action('init','get_custom_post_type' );