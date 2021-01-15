<?php get_header(); ?>

<!-- s-content
    ================================================== -->
<section class="s-content">
    <div class="row masonry-wrap">
        <div class="masonry">
            <div class="grid-sizer"></div>
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post(); ?>            
            <article class="masonry__brick entry format-standard" data-aos="fade-up">
                <div class="entry__thumb">
            <a href="<?php the_permalink(); ?>" class="entry__thumb-link"><?php the_post_thumbnail('small'); ?></a>
                </div>
                <div class="entry__text">
                    <div class="entry__header">
                        <div class="entry__date">
                            <a href="single-standard.html"><?php the_time('F j, Y'); ?></a>
                        </div>
                        <h1 class="entry__title"><a href="single-standard.html"><?php the_title(); ?></a></h1>
                    </div>
                    <div class="entry__excerpt">
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                    <div class="entry__meta">
                        <span class="entry__meta-links">
                            <a href=""><?php the_category(' | '); ?></a>
                        </span>
                    </div>
                </div>
            </article> <!-- end article -->                    
            <?php }
                }
             ?>
        </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->
    <div class="row">
        <div class="col-full">
            <nav class="pgn">
                <ul>
                    <li><a class="pgn__prev" href="#0">Prev</a></li>
                    <li><a class="pgn__num" href="#0">1</a></li>
                    <li><span class="pgn__num current">2</span></li>
                    <li><a class="pgn__num" href="#0">3</a></li>
                    <li><a class="pgn__num" href="#0">4</a></li>
                    <li><a class="pgn__num" href="#0">5</a></li>
                    <li><span class="pgn__num dots">…</span></li>
                    <li><a class="pgn__num" href="#0">8</a></li>
                    <li><a class="pgn__next" href="#0">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section> <!-- s-content -->    
<?php get_footer(); ?>