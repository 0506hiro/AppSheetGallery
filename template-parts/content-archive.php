    <!-- blog_item -->
    <a href="<?php the_permalink() ?>"  class="blog_card <?php new_content();?>">
                 <div class="blog_card-img">
                   <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail(); ?>
                   <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() ?>/img/noimg.png" alt="">
                   <?php endif; ?>
                  </div>
                 <div class="blog_card-body">
                  <?php 
                   $category = get_naw_cat();
                   if($category) : ?>
                    <div class="blog_card-tag"><?php echo $category; ?></div><!-- /blog_item-tag -->
                   <?php endif; ?>
                   <h2 class="blog_card-title"><?php the_title(); ?></h2><!-- /blog_item-title -->
                   <time class="blog_card-published" datetime="<?php the_time('c') ?>"><?php the_time('Y.n.j') ?></time><!-- /blog_item-published -->
                 </div>
              </a><!-- /blog_item -->