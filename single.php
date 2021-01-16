<?php 
the_post();
get_header(); ?>
      <!-- s-content
         ================================================== -->
      <section class="s-content s-content--narrow s-content--no-padding-bottom">
         <article class="row format-standard">
            <div class="s-content__header col-full">
               <h1 class="s-content__header-title">
                  <?php the_title();?>
               </h1>
               <ul class="s-content__header-meta">
                  <li class="date"><?php the_time('F j, Y'); ?></li>
                  <li class="cat">
                     In
                     <a href="#0"> <?php the_category(" "); ?></a>                     
                  </li>
               </ul>
            </div>
            <!-- end s-content__header -->
            <div class="s-content__media col-full">
               <div class="s-content__post-thumb">
                   <?php the_post_thumbnail();?>
               </div>
            </div>
            <!-- end s-content__media -->
            <div class="col-full s-content__main">
               <p <?php post_class('lead'); ?>>
                     <?php the_content();?>
               </p>
               
               <p class="s-content__tags">
                  <span>Post Tags</span>
                  <span class="s-content__tag-list">
                  <a href="#0"><?php echo get_the_tag_list();?> </a>                  
                  </span>
               </p>
               <!-- end s-content__tags -->
               <div class="s-content__author">
                  <?php echo get_avatar(get_the_author_meta('ID')); ?>
                  <div class="s-content__author-about">
                     <h4 class="s-content__author-name">
                        <a href="<?php get_author_posts_url(get_the_author_meta("ID")); ?>"> <?php the_author(); ?> </a>
                     </h4>
                     <p><?php the_author_meta('description'); ?></p>
                     <ul class="s-content__author-social">
                        <li><a href="#0">Facebook</a></li>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">GooglePlus</a></li>
                        <li><a href="#0">Instagram</a></li>
                     </ul>
                  </div>
               </div>
               <div class="s-content__pagenav">
                  <div class="s-content__nav">
                     <div class="s-content__prev">
                        <?php 
                            $previous = get_previous_post();
                            if($previous){ ?>
                            <a href="<?php echo get_the_permalink($previous);?>" rel="prev">
                              <span><?php _e("Previous Post","philosophy"); ?></span>
                               <?php echo get_the_title($previous);?>     
                           </a>
                         <?php }     
                         ?>
                        
                     </div>
                     <div class="s-content__next">
                        <?php 
                            $next = get_next_post();
                            if($next){ ?>
                            <a href="<?php echo get_the_permalink($next);?>" rel="next">
                              <span><?php _e("Next Post","philosophy"); ?></span>            
                              <?php echo get_the_title($next);?>   
                           </a>
                         <?php }     
                         ?>
                     </div>
                  </div>
               </div>
               <!-- end s-content__pagenav -->
            </div>
            <!-- end s-content__main -->
         </article>
         <!-- comments
            ================================================== -->
           <?php 
            if(!post_password_required()){
                  comments_template();
               }
            ?>
      </section>
      <!-- s-content -->
      <?php get_footer(); ?>