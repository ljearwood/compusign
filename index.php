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
        <h2 class="show-for-small text-center">Compusign</h2>
        <?php //var_dump( $postID['main_description'] ); ?>
        <hr />
        <?php  //JasperDisplayOrbit(); ?>
    <article class="hentry" itemscope="" itemtype="http://schema.org/Article">
        <div class="row">
            <h1 class="small-12 large-12 columns text-center entry-title" itemprop="name"><span id="numero1" itemprop="headline"><a rel-bookmark href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></span></h1>
            <?php Jasper_entry_meta(); ?>
        </div>
    <div class="small-3 large-3 columns">
        <div class="panel">
            <h2>Welcome to Our site</h2>
            <hr/>
            <h3>Helpful links</h3>
            <ul>
                <li><a href="#">Lorem ipsum dolor.</a></li>
                <li><a href="#">Ducimus, itaque, praesentium.</a></li>
                <li><a href="#">Amet, deserunt, esse.</a></li>
                <li><a href="#">Dolorum, harum, voluptatibus.</a></li>
                <li><a href="#">Aperiam, ducimus, eius.</a></li>
            </ul>
        </div>
        <div class="panel">
            <h3>Get a Quote!</h3>

            <form action="#" method="post">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="row collapse">
                            <div class="small-8 columns">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="small-4 columns">
                                <a href="#" class="button postfix">Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="panel">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eius modi saepe!</p>
            <h4><a href="#">Some Useful link</a>
            </h4>
            <p>Debitis error hic iure nemo perspiciatis quaerat, quam quas quo? Laudantium, tempore!</p>
        </div>
    </div>
    <div id="firstStop" class="small-12 large-6 columns panel">
        <?php the_content(); ?>
    <?php
            endwhile;
        endif;
        wp_reset_postdata();
    ?>
    </div>
    <div class="small-12 large-3 columns right">
        <?php get_sidebar(); ?>
    </div>
</article>

</div>
<?php get_footer(); ?>
