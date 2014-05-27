<?php get_header(); ?>
<div class="row container">
    <?php
    $postID = get_option('compu_settings');
    $args = $postID['id_number'];
    $titleString = $postID['title'];
    if( ! $args ){
        $args = 'posts_per_page=1';
        $my_query = new WP_Query( $args );
    } else {
        $prepArg = 'p=' . (string)($args);
        $my_query = new WP_Query( $prepArg );

    }

    if( $my_query->have_posts() ) :
    while( $my_query->have_posts() ) : $my_query->the_post();
    ?>
        <h2 class="show-for-medium-up text-center" itemprop="headline"><?php echo $titleString; ?></h2>
        <h2  class="show-for-small text-center" itemprop="headline">Compusign</h2>
        <?php //var_dump( $postID['main_description'] ); ?>
        <hr />
        <?php  //JasperDisplayOrbit(); ?>
    <article class="hentry" itemscope="" itemtype="http://schema.org/Article">
        <div class="row">
            <h1 class="small-12 large-12 columns text-center entry-title" itemprop="name"><span id="numero1" itemprop="headline"><a rel-bookmark href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></span></h1>
            <?php Jasper_entry_meta(); ?>
        </div>

    <div id="firstStop" class="small-9 large-8 columns panel">
        <?php the_content(); ?>
    <?php
            endwhile;
        endif;
        wp_reset_postdata();
    ?>
    </div>
    </article>
    <div class="small-3 large-4 columns show-for-medium-up">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
