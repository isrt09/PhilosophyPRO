<div class="entry__text">
   <div class="entry__header">
      <div class="entry__date">
         <a href="<?php the_permalink(); ?>"><?php the_time('F j, Y'); ?> </a>
      </div>
      <h1 class="entry__title"><a href="<?php the_permalink(); ?>"><?php the_title() ?>.</a></h1>
   </div>
   <div class="entry__excerpt">
      <p>
         <?php the_content(); ?>
      </p>
   </div>
   <div class="entry__meta">
      <span class="entry__meta-links">
       <?php the_category(" "); ?>
      </span>
   </div>
</div>