    <!-- blog_worke_title -->
    <div class="blog_worke_title">
            <h1><?php the_title(); ?></h1>
          </div>
            <div class="tag_meta">
              <div class="time_icon"><img src="<?php echo get_template_directory_uri() ?>/img/blog-worke/icon-time.png" alt=""></div>
              <time class="blog_card-published" datetime="<?php the_time('c') ?>"><?php the_time('Y.n.j') ?></time><!-- /blog_item-published -->
              <div class="blog_card-tag"><?php echo get_naw_cat();?></div><!-- /blog_card-tag -->
            </div>
            <?php the_content(); ?>
            <?php  wp_link_pages(
              array(
                'before' => '<nav class="worke_pagination">',
                'after' => '</nav>',
                'link_before' => '',
                'link_after' => '',
                'next_or_number' => 'number',
                'separator' => '',
              )
            );
            ?>