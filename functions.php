<?php
function coppuapp_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'main-menu' => 'Main Menu',
  ]);
}
add_action('after_setup_theme', 'coppuapp_setup');



function coppus_app_enqueue_styles() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
  wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'coppus_app_enqueue_styles');

function create_demo_app_post_type() {
  register_post_type('demo_app',
    [
      'labels' => [
        'name' => 'デモアプリ',
        'singular_name' => 'デモアプリ'
      ],
      'public' => true,
      'has_archive' => true,
      'supports' => ['title', 'editor', 'thumbnail'],
      'rewrite' => ['slug' => 'demo-apps'],
    ]
  );
}
add_action('init', 'create_demo_app_post_type');
