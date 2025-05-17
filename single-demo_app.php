<?php get_header(); ?>
<main class="single container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="demo-single">
    <div class="demo-single">
      <div class="demo-content-wrapper">
        <h1><?php the_title(); ?></h1>
        <div class="demo-content"><?php the_content(); ?></div>
      </div>
      <?php
        $demo_video = get_post_meta( get_the_ID(), '_demo_video', true );
        if ( $demo_video ) :
      ?>
        <div class="demo-video">
          <video width="640" height="360" controls>
            <source src="<?php echo esc_url( $demo_video ); ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      <?php endif; ?>
    </div>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
