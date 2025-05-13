<?php get_header(); ?>
<main class="single container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="demo-single">
      <h1><?php the_title(); ?></h1>
      <?php if (has_post_thumbnail()) : ?>
        <div class="demo-thumbnail"><?php the_post_thumbnail('large'); ?></div>
      <?php endif; ?>
      <div class="demo-content"><?php the_content(); ?></div>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
