<article <?php post_class("masonry__brick entry format-gallery"); ?> data-aos="fade-up">
    <div class="entry__thumb slider">
        <div class="slider__slides">
            <div class="slider__slide">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="slider__slide">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="slider__slide">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
    </div>
    <?php get_template_part("template-parts/common/post/summary"); ?>
</article>