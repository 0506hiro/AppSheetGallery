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
wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', [], null, true);
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
      'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
      'rewrite' => ['slug' => 'demo-apps'],
      'menu_position' => 5,
      'menu_icon' => 'dashicons-smartphone',
    ]
  );
}
add_action('init', 'create_demo_app_post_type');

// カスタムフィールドを追加
function add_demo_app_custom_fields() {
  add_meta_box(
    'demo_app_video',
    'デモ動画',
    'demo_app_video_callback',
    'demo_app',
    'normal',
    'high'
  );
}
add_action( 'add_meta_boxes', 'add_demo_app_custom_fields' );

function demo_app_video_callback( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'demo_app_video_nonce' );
  $demo_video = get_post_meta( $post->ID, '_demo_video', true );
  echo '<label for="demo_video">動画URL:</label>';
  echo '<input type="text" id="demo_video" name="demo_video" value="' . esc_attr( $demo_video ) . '" size="80" />';
}

function save_demo_app_video( $post_id ) {
  if ( ! isset( $_POST['demo_app_video_nonce'] ) || ! wp_verify_nonce( $_POST['demo_app_video_nonce'], basename( __FILE__ ) ) ) return;

  if ( isset( $_POST['demo_video'] ) ) {
    update_post_meta( $post_id, '_demo_video', sanitize_text_field( $_POST['demo_video'] ) );
  }
}
add_action( 'save_post', 'save_demo_app_video' );

