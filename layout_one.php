<?php
/*
Template Name: Left-Sidebar Default Header
*/
?>
<?php get_header(); ?>
<div class="row container">
    <?php
    if( have_posts() ) :
        while( have_posts() ) : the_post();
            ?>
            <div class="panel callout small-12 large-12 columns">
                <h1 class="text-center" itemprop="name"><span itemprop="headline"><?php the_title(); ?></span></h1>
                <?php Jasper_entry_meta(); ?>
            </div>
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
