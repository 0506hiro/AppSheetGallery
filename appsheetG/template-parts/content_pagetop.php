   <!-- mv-top -->
   <div class="mv-top" id="top_area">
     <!-- mv-top_contents -->
     <div class="mv-top_contents">
        <div class="mv-top_img <?php echo get_top_img();?>">
          <div class="mv-top_img-shadow"></div>
          <div class="mv-top_text">
            <h3><?php echo get_main_title();?></h3>
            <p><?php echo get_sub_title();?></p>
          </div>
        </div>
        	<!--  -->
          <?php if (function_exists('bcn_display')) : ?>
            <div class="breadcrumb">
              <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
            </div><!-- /breadcrumb -->
          <?php endif; ?>
       </div>  <!-- /mv-top_contents -->
   </div>   <!-- /mv-top -->
