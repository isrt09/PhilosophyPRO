<div class="comments-wrap">
  <div id="comments" class="row">     
     <div class="col-full">
        <h2><?php
          $philosophy_count = get_comments_number();
          if($philosophy_count > 1){
             echo $philosophy_count." ".__("Comments","philosophy");
          }else{
            echo $philosophy_count." ".__("Comments","philosophy");
          }
         ?></h2>
        <ol class="commentlist">
            <?php wp_list_comments(); ?>
        </ol>
        <div class="comments-pagination">
           <?php 
               the_comments_pagination(array(
                  'screen_reader_text' => __("Pagination","philosophy"),
                  'prev_text' => '<'.__("Previous Comments","philosophy"),
                  'next_text' => '<'.__("Next Comments","philosophy"),
               ));
            ?>
        </div>
        <div class="respond">
           <div class="h2"><?php _e("Add Comment","philosophy"); ?></div>
           <?php 
              comment_form();
            ?>
        </div>
     </div>         
     <!-- end col-full -->
  </div>
  <!-- end row comments -->
</div>
<!-- end comments-wrap -->