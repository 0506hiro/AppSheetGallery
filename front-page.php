<?php get_header(); ?>
<main class="front-page container">
  <section class="hero">
    <div class="hero-text">
      <h2>日常業務をちょっと楽に。</h2>
      <p>シンプルで無料の業務アプリを今すぐ体験。</p>
      <a href="<?php echo esc_url( get_post_type_archive_link('demo_app') ); ?>" class="cta-button">デモアプリを見る</a>
    </div>
    <div class="hero-image">
      <video src="<?php echo get_template_directory_uri(); ?>/img/デモ動画.MP4" autoplay loop muted width="320" height="180"></video>
    </div>
  </section>

  <section class="features">
    <h2>こんな方におすすめ</h2>
    <ul>
      <li>業務効率を上げたいが、難しいツールは使いたくない</li>
      <li>無料で使えるシンプルなアプリを探している</li>
      <li>モバイルでも使いやすいアプリが欲しい</li>
    </ul>
  </section>

  <section class="demo-preview">
    <h2>おすすめのデモアプリ</h2>
    <div class="demo-grid">
      <?php
      $demo_query = new WP_Query([
        'post_type' => 'demo_app',
        'posts_per_page' => 3
      ]);
      if ($demo_query->have_posts()):
        while ($demo_query->have_posts()): $demo_query->the_post(); ?>
        <div class="demo-card">
          <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
            <?php if (has_post_thumbnail()): ?>
              <div class="demo-thumbnail"><?php the_post_thumbnail('medium'); ?></div>
            <?php else: ?>
              <div class="demo-thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-placeholder.png" alt="デモプレビュー">
              </div>
            <?php endif; ?>
            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
          </a>
        </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </section>

  <section class="faq">
    <h2>よくある質問</h2>
    <dl>
      <dt>無料で使えますか？</dt>
      <dd>はい、紹介しているデモアプリはすべて無料でお試しいただけます。</dd>
      <dt>カスタマイズは可能ですか？</dt>
      <dd>はい、ご希望に合わせたカスタマイズも承っています。</dd>
    </dl>
  </section>

  <section class="cta">
    <h2>今すぐ試してみませんか？</h2>
    <a href="<?php echo esc_url( get_post_type_archive_link('demo_app') ); ?>" class="cta-button">デモアプリを見る</a>
  </section>
</main>
<?php get_footer(); ?>
