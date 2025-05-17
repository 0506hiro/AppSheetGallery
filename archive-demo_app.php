<?php get_header(); ?>
<main class="archive container">
  <h1>デモアプリ一覧</h1>
  <div class="demo-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="demo-card">
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) : ?>
            <div class="demo-thumbnail"><?php the_post_thumbnail('medium'); ?></div>
          <?php endif; ?>
          <h3><?php the_title(); ?></h3>
          <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
        </a>
      </div>
    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
