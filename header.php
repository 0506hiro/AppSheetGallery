<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
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
          <li><a href="<?php echo get_post_type_archive_link('demo_app'); ?>">サンプルページ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/seisaku' ) ); ?>">制作の流れ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/otoiawase' ) ); ?>">お問合せ</a></li>
        </ul>
      </nav>
    </div>
  </header>
