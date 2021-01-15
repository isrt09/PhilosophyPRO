<article <?php post_class('masonry__brick entry format-video'); ?> data-aos="fade-up">
    <div class="entry__thumb video-image">
        <a href="<?php the_permalink(); ?>" data-lity><?php the_post_thumbnail(); ?></a>           
    </div>    
    <?php get_template_part("template-parts/common/post/summary"); ?>
</article> <!-- end article -->