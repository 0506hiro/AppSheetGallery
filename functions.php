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

function get_contact_form_7_id_by_title( $title ) {
  $args = array(
    'post_type' => 'wpcf7_contact_form',
    'title' => $title,
    'posts_per_page' => 1,
    'fields' => 'ids'
  );
  $posts = get_posts( $args );
  if ( $posts ) {
    return $posts[0];
  }
  return null;
}

// Contact Form 7のセレクトボックスにデモアプリ一覧を動的に追加
function add_demo_apps_to_contact_form($tag, $unused) {
    if ($tag['name'] != 'demo-app') {
        return $tag;
    }
    
    $demo_apps = get_posts(array(
        'post_type' => 'demo_app',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC'
    ));
    
    $tag['raw_values'] = array('その他');
    $tag['values'] = array('その他');
    $tag['labels'] = array('その他');
    
    foreach($demo_apps as $app) {
        $tag['raw_values'][] = $app->post_title;
        $tag['values'][] = $app->post_title;
        $tag['labels'][] = $app->post_title;
    }
    
    return $tag;
}
add_filter('wpcf7_form_tag', 'add_demo_apps_to_contact_form', 10, 2);


// デモURL用のメタボックスを追加
function add_demo_url_meta_box() {
    add_meta_box(
        'demo_url_meta_box',
        'デモURL設定',
        'demo_url_meta_box_callback',
        'demo_app', // demo_appカスタム投稿タイプ（適宜変更してください）
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_demo_url_meta_box');

// メタボックスの内容を表示
function demo_url_meta_box_callback($post) {
    wp_nonce_field('demo_url_meta_box_nonce', 'demo_url_meta_box_nonce');
    $demo_url = get_post_meta($post->ID, '_demo_url', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="demo_url">デモページURL</label></th>
            <td>
                <input type="url" 
                       id="demo_url" 
                       name="demo_url" 
                       value="<?php echo esc_attr($demo_url); ?>" 
                       style="width: 100%; max-width: 400px;" 
                       placeholder="https://example.com/demo">
                <p class="description">デモページにアクセスするためのURLを入力してください。</p>
            </td>
        </tr>
    </table>
    <?php
}

// デモURLを保存
function save_demo_url_meta_box($post_id) {
    // nonce チェック
    if (!isset($_POST['demo_url_meta_box_nonce']) || 
        !wp_verify_nonce($_POST['demo_url_meta_box_nonce'], 'demo_url_meta_box_nonce')) {
        return;
    }
    
    // 自動保存時は何もしない
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // 権限チェック
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // デモURLを保存
    if (isset($_POST['demo_url'])) {
        $demo_url = sanitize_url($_POST['demo_url']);
        update_post_meta($post_id, '_demo_url', $demo_url);
    }
}
add_action('save_post', 'save_demo_url_meta_box');