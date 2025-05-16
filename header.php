<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="container">
      <h1 class="site-title"><a href="<?php echo home_url(); ?>">coppu's_App</a></h1>
      <button class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="main-nav">
        <ul>
          <li><a href="<?php echo get_post_type_archive_link('demo_app'); ?>">サンプルページ</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('seisaku') ); ?>">制作の流れ</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('otoiawase') ); ?>">お問合せ</a></li>
        </ul>
      </nav>
    </div>
  </header>
