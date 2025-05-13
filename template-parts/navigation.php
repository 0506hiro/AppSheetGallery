<!-- navigation -->
<div class="navigation">
  <?php
  $prev_post = get_previous_post();
  $next_post = get_next_post();
  $archive_link = get_post_type_archive_link(get_post_type());

  if ($prev_post || $next_post || $archive_link) {
    echo '<div class="post-navigation">';
    if ($prev_post) {
      echo '<div class="nav-previous">' . get_previous_post_link('%link', '前の記事') . '<span class="sizeout">へ</span></div>';
    }
    if ($archive_link) {
      echo '<div class="nav-archive"><a href="' . $archive_link . '">記事一覧</a></div>';
    } else {
      echo '<div class="nav-archive"><a href="' . esc_url(home_url('/')) . 'example-com/blog/">記事一覧</a></div>';
    }
    if ($next_post) {
      echo '<div class="nav-next">' . get_next_post_link('%link', '次の記事') . '<span class="sizeout">へ</span></div>';
    }
    echo '</div>';
  }
  ?>
</div><!-- /navigation -->
