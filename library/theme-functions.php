<?php

if( ! function_exists( 'ListArticlesFor404' ) ){

    function ListArticlesFor404(){
        $args = array(
            'posts_per_page' => 3
        );

        $customQuery = new WP_Query( $args );
        ?>
            <h2 class="text-center"><small>Check out These Amazing Articles and Videos</small></h2>
        <?php
        while ( $customQuery->have_posts() ) : $customQuery->the_post();
            ?>
            <div class="panel">
                <h2 class="small-12 large-12 columns" itemprop="name"><small><span itemprop="headline"><a href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></span></small></h2>
                <p class="small-10 small-centered large-10 large-centered columns">
                    <?php
                    if( ! has_post_format( 'video' ) ){
                        the_excerpt();
                    } else {
                        ?>
                        <hr />
                        <div class="row">
                            <div class="small-10 small-centered large-9 large-centered columns">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <a class="button" href="<?php the_permalink(); ?>">Read More</a>
                </p>
            </div>
        <?php
        endwhile;
    }

} // ends the function ListArticlesFor404()

if( ! function_exists( 'custom_excerpt_length' )){
    function custom_excerpt_length( $length ) {
        return 125;
    }
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

if( ! function_exists( 'new_excerpt_more' )){
    function new_excerpt_more( $more ) {
        return '';
    }
}
add_filter('excerpt_more', 'new_excerpt_more');

if(!function_exists('Jasper_entry_meta')) :
    function Jasper_entry_meta() {
        echo '<div class="small-12 large-12 columns">';
        echo '<div class="row collapse"><div class="small-6 large-6 columns"><p class="byline text-center"><span class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf('Posted on %s.', get_the_time('l, F jS, Y')).'</p></span></div>';
        echo '<div class="small-6 large-6 columns"><p class="byline author text-center">Written by <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p></div>';
        echo '</div></div>';
    }
endif;

if(!function_exists('Archive_entry_meta')) :
    function Archive_entry_meta() {
        echo '<div class="small-12 large-12 columns">';
        echo '<div class="row collapse"><div class="small-6 large-6 columns"><p class="byline text-center"><span class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf('Posted on %s.', get_the_time('D, M jS, Y')).'</p></span></div>';
        echo '<div class="small-6 large-6 columns"><p class="byline author text-center">Written by <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p></div>';
        echo '</div></div>';
    }
endif;

if( ! function_exists( 'JasperDisplayOrbit' ) ){
    function JasperDisplayOrbit( $OrbitId = 1 ){
        ?>
        <!--Begin Orbit -->
        <ul class="example-orbit small-12 large-12 columns" data-orbit>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/img/orbit/slide1.jpg'; ?>" alt="slide 1" />
                <div class="orbit-caption"> Caption One. </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/img/orbit/slide2.jpg'; ?>" alt="slide 2" />
                <div class="orbit-caption"> Caption Two. </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/img/orbit/slide3.jpg'; ?>" alt="slide 3" />
                <div class="orbit-caption"> Caption Three. </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/img/orbit/slide4.jpg'; ?>" alt="slide 2" />
                <div class="orbit-caption"> Caption Four. </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/img/orbit/slide5.jpg'; ?>" alt="slide 3" />
                <div class="orbit-caption"> Caption Five. </div>
            </li>
        </ul>
        <!--End Orbit -->
    <?php
    }
} // end function JasperDisplayOrbit();
