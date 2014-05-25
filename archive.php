<?php get_header(); ?>
<div class="row container">
    <div class="small-10 small-centered large-9 large-centered columns">
        <?php //put title ?>
        <?php if ( is_day() ) : ?>
            <?php printf( '<h2 class="subheader">Daily Archives: %s</h2>', '<span>' . get_the_date() . '</span>' ); ?>
        <?php elseif ( is_month() ) : ?>
            <?php printf( '<h2 class="subheader">Monthly Archives: %s</h2>', single_month_title( ' ', false ) ); ?>
        <?php elseif ( is_year() ) : ?>
            <?php printf('<h2 class="subheader">Yearly Archives: %s</h2>', '<span>' . get_the_date( 'Y' ) . '</span>' ); ?>
        <?php else : ?>
            <?php echo '<h2 class="subheader">Blog Archives:</h2>'; ?>
        <?php endif; ?>

    </div>
    <div class="small-9 large-8 columns">
        <?php
        if( have_posts() ) :
            while( have_posts() ) : the_post();
                if( ! has_post_format( 'video' ) ){
                    ?>
                    <div class="panel">
                        <h2 class="small-12 large-12 columns" itemprop="name"><small><span itemprop="headline"><a href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></span></small></h2>
                        <?php Archive_entry_meta(); ?>
                        <p class="small-10 small-centered large-10 large-centered columns">
                            <?php

                            the_excerpt();

                            ?>
                            <a class="button" href="<?php the_permalink(); ?>">Read More</a>
                        </p>
                    </div>
                <?php
                }
            endwhile;

        else:
            ?>
            <div class="panel">
                <h2>Sorry but we got nothing!</h2>
                <p>Use this form to search our Archives.</p>
            </div>
            <?php
            get_search_form();
        endif;
        ?>
    </div>
    <div class="small-3 large-4 columns">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
