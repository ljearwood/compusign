<?php get_header(); ?>
<div class="row container">
    <?php
    if( have_posts() ) :
    while( have_posts() ) : the_post();
    ?>
    <div class="small-12 small-centered large-12 large-centered columns">
        <?php  ?>
        <div class="row collapse">
            <h2 class="small-12 large-12 columns text-center entry-title" itemprop="name"><span itemprop="headline"><a rel-bookmark href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></span></h2>
            <?php Jasper_entry_meta(); ?>
        </div>
    </div>
    <div class="small-9 large-8 columns panel">
                <?php the_content(); ?>
                <?php if( has_post_format( 'video' ) ){
                    JasperDisplayOrbit();
                }
                ?>

                <?php
            endwhile;
        endif;
        ?>
    </div>
    <div class="small-3 large-4 columns">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
