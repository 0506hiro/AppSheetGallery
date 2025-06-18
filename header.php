<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php
  // SEO用のメタデータを設定
  $site_name = get_bloginfo('name');
  $site_description = get_bloginfo('description');
  $current_url = home_url(add_query_arg(array(), $_SERVER['REQUEST_URI']));
  
  // ページタイプに応じたタイトルとディスクリプション
  if (is_home() || is_front_page()) {
    $page_title = $site_name . ' | ' . $site_description;
    $meta_description = 'AppSheetで作成したデモアプリをご紹介。ノーコードで業務効率化・DX推進を実現するアプリケーションの実例を多数公開中。お問合せ・カスタマイズ対応可能です。';
    $meta_keywords = 'AppSheet,ノーコード,デモアプリ,業務効率化,DX,アプリ開発,Google,スプレッドシート,モバイルアプリ';
  } elseif (is_singular('demo_app')) {
    $page_title = get_the_title() . ' | ' . $site_name;
    $content = get_the_content();
    $meta_description = wp_trim_words(strip_tags($content), 30, '...') ?: 'AppSheetで作成した' . get_the_title() . 'のデモアプリです。実際の動作をご確認いただけます。';
    $meta_keywords = 'AppSheet,' . get_the_title() . ',デモアプリ,ノーコード,業務効率化';
  } elseif (is_post_type_archive('demo_app')) {
    $page_title = 'デモアプリ一覧 | ' . $site_name;
    $meta_description = 'AppSheetで作成したデモアプリの一覧ページです。様々な業界・業務に対応したノーコードアプリケーションの実例をご覧いただけます。';
    $meta_keywords = 'AppSheet,デモアプリ一覧,ノーコード,アプリ開発,業務効率化,DX';
  } elseif (is_page('otoiawase')) {
    $page_title = 'お問合せ | ' . $site_name;
    $meta_description = 'AppSheetデモアプリに関するお問合せはこちらから。アプリのカスタマイズ、導入支援、技術相談など、お気軽にご相談ください。';
    $meta_keywords = 'お問合せ,AppSheet,アプリ開発,カスタマイズ,導入支援,技術相談';
  } else {
    $page_title = wp_title('|', false, 'right') . $site_name;
    $meta_description = $site_description;
    $meta_keywords = 'AppSheet,ノーコード,デモアプリ,業務効率化';
  }
  ?>
  
  <title><?php echo esc_html($page_title); ?></title>
  <meta name="description" content="<?php echo esc_attr($meta_description); ?>">
  <meta name="keywords" content="<?php echo esc_attr($meta_keywords); ?>">
  <meta name="author" content="<?php echo esc_attr($site_name); ?>">
  <meta name="robots" content="index, follow">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="<?php echo is_singular() ? 'article' : 'website'; ?>">
  <meta property="og:url" content="<?php echo esc_url($current_url); ?>">
  <meta property="og:title" content="<?php echo esc_attr($page_title); ?>">
  <meta property="og:description" content="<?php echo esc_attr($meta_description); ?>">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png">
  <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>">
  <meta property="og:locale" content="ja_JP">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="<?php echo esc_url($current_url); ?>">
  <meta name="twitter:title" content="<?php echo esc_attr($page_title); ?>">
  <meta name="twitter:description" content="<?php echo esc_attr($meta_description); ?>">
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png">
  
  <!-- 構造化データ（JSON-LD） -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "<?php echo is_singular('demo_app') ? 'SoftwareApplication' : 'Organization'; ?>",
    <?php if (is_singular('demo_app')) : ?>
    "name": "<?php echo esc_js(get_the_title()); ?>",
    "description": "<?php echo esc_js($meta_description); ?>",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web, iOS, Android",
    "url": "<?php echo esc_url($current_url); ?>",
    "author": {
      "@type": "Organization",
      "name": "<?php echo esc_js($site_name); ?>",
      "url": "<?php echo esc_url(home_url()); ?>"
    }
    <?php else : ?>
    "name": "<?php echo esc_js($site_name); ?>",
    "description": "<?php echo esc_js($meta_description); ?>",
    "url": "<?php echo esc_url(home_url()); ?>",
    "logo": "<?php echo get_template_directory_uri(); ?>/img/logo-pc.png",
    "sameAs": []
    <?php endif; ?>
  }
  </script>
  
  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo esc_url($current_url); ?>">
  
  <!-- Favicon -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon2.png">
  
  <!-- 言語・地域設定 -->
  <meta name="language" content="Japanese">
  <meta name="geo.region" content="JP">
  <meta name="geo.country" content="Japan">
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-drawer-open="false">
<header class="site-header">
    <div class="container">
      <div class="site-logo">
        <?php
        if ( has_custom_logo() ) {
          the_custom_logo();
        } else {
          ?>
          <a href="<?php echo home_url(); ?>"><img class="logo-pc" src="<?php echo get_template_directory_uri(); ?>/img/logo-pc.png" alt="<?php bloginfo('name'); ?>">
          <img class="logo-sp" src="<?php echo get_template_directory_uri(); ?>/img/logo-sp.png" alt="<?php bloginfo('name'); ?>"></a>
          <?php
        }
        ?>
      </div>
      <h1 class="site-title"><a href="<?php echo home_url(); ?>">coppu's_App</a></h1>
      <button class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="main-nav">
        <ul>
          <li><a href="<?php echo get_post_type_archive_link('demo_app'); ?>">デモアプリ一覧</a></li>
          <li><a href="<?php echo esc_url( home_url( '/otoiawase' ) ); ?>">お問合せ</a></li>
        </ul>
      </nav>
    </div>
    <div class="breadcrumb-container">
    <?php
    if ( function_exists('bcn_display') ) {
        bcn_display();
    }
    ?>
    </div>
</header>