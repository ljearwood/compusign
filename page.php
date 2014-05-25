<?php get_header(); ?>
<div class="row container">
    <?php
    if( have_posts() ) :
        while( have_posts() ) : the_post();
        ?>
        <h2 class="small-12 large-12 columns text-center" itemprop="name"><span itemprop="headline"><?php the_title(); ?></span></h2>
        <?php Jasper_entry_meta(); ?>
        <div class="small-3 large-4 columns">
            <?php get_sidebar(); ?>
        </div>
        <div class="small-9 large-8 columns panel">
                    <?php the_content(); ?>
        </div>
        <?php
    endwhile;
        endif;
        ?>
</div>
<?php get_footer(); ?>
