      <!-- pagination -->
      <div class="pagination">
        <div class="pagination_pc">
         <?php
            if (isset($args['pickup_query']) && $args['pickup_query']->max_num_pages > 1) {
              echo paginate_links(array(
              'base'      => get_pagenum_link(1) . '%_%',
              'format'    => 'page/%#%/',
              'current'   => max(1, $args['paged']),
              'total'     => $args['pickup_query'] ->max_num_pages,
              'end_size' => 1,
              'mid_size' => 4,
              'prev_next' => true,
              'prev_text' => '前へ',
              'next_text' => '次へ'
              )); }?>
        </div>
        <div class="pagination_sp">
          <?php
          if (isset($args['pickup_query']) && $args['pickup_query']->max_num_pages > 1) {
            echo paginate_links(array(
            'base'      => get_pagenum_link(1) . '%_%',
            'format'    => 'page/%#%/',
            'current'   => max(1, $args['paged']),
            'total'     => $args['pickup_query'] ->max_num_pages,
            'end_size' => 1,
            'mid_size' => 1,
            'prev_next' => true,
            'prev_text' => '前へ',
            'next_text' => '次へ'
            ));   }  ?>
           </div>

    </div><!-- /pagination -->