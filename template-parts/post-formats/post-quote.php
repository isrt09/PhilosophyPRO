<article <?php post_class('masonry__brick entry format-quote'); ?> data-aos="fade-up">
    <div class="entry__thumb">
        <blockquote>
               <?php the_content(); ?>
               <cite><?php the_title(); ?></cite>
        </blockquote>
    </div>
    <?php get_template_part("template-parts/common/post/summary"); ?>
</article> <!-- end article -->