<?php
if( ! function_exists( 'DisplayCategoryList' ) ){

    function DisplayCategoryList(){

        $args = array(
        'type'                     => 'post',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'hide_empty'               => 1,
        'hierarchical'             => 1,
        'exclude'                  => '',
        'include'                  => '',
        'number'                   => '',
        'taxonomy'                 => 'category',
        'pad_counts'               => false

        );

        $categories = get_categories( $args );

        foreach ( $categories as $category){
            $catUrl = get_category_link( $category->cat_ID );
            $outputListItem = sprintf( '<li class="has-dropdown"><a href="%1$s">%2$s</a><ul class="dropdown">', $catUrl, $category->name  );
            echo $outputListItem;
            DisplayTitlesByCategory( $category->cat_ID );
            echo '</li></ul>';
        }

        //        $category->term_id
        //        $category->name
        //        $category->slug
        //        $category->term_group
        //        $category->term_taxonomy_id
        //        $category->taxonomy
        //        $category->description
        //        $category->parent
        //        $category->count
        //        $category->cat_ID
        //        $category->category_count
        //        $category->category_description
        //        $category->cat_name
        //        $category->category_nicename
        //        $category->category_parent

    }

} // end function DisplayCategoryList()
if( ! function_exists( 'DisplayTitlesByCategory' ) ){
    function DisplayTitlesByCategory( $categoryId ){

    $args = array(
        'category__in' =>$categoryId
    );

    $categoryTitleQuery = new WP_Query( $args );

    while( $categoryTitleQuery->have_posts() ) : $categoryTitleQuery->the_post();
        $permalinkString = get_permalink();
        $currentTitleInCategory = get_the_title();
        $outputString = sprintf('<li><a href="%1$s">%2$s</a></li>', $permalinkString, $currentTitleInCategory );
        echo $outputString;
    endwhile;

    }
} // end function DisplayTitlesByCategory( $categoryId )
if(!function_exists('cwmc_recent_posts')){
    function cwmc_recent_posts(){
        ?>
        <ul>
            <?php
            $args = array(
                'posts_per_page'=>'30'
            );
            $articlesQuery = new WP_Query( $args );
            ?>
            <?php while( $articlesQuery->have_posts()) : $articlesQuery->the_post(); ?>
                <li><?php
                    if(! has_post_format('video')){
                        ?>
                        <h2><a class="cwmc-title" href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                        <?php  //Archive_entry_meta(); ?>
                    <?php } ?>
                    <p class="cwmc-excerpt"><?php
                        if(! has_post_format('video')){
                            $shortExcerpt = get_the_excerpt();
                            $linkToArticle = '<br /><a class="button" href="' . get_permalink() . '">Read More</a>';
                            echo $shortExcerpt . ' ' . $linkToArticle;
                        }
                        ?>
                    </p>
                </li>
            <?php endwhile; ?>
            <?php
            ?>
        </ul>
    <?php
    }
} // end function cwmc_recent_posts();

if( ! function_exists( 'JasperListPages' ) ){
    function JasperListPages(){
        $args = array(
            'authors'      => '',
            'child_of'     => 0,
            'date_format'  => get_option('date_format'),
            'depth'        => 1,
            'echo'         => 1,
            'exclude'      => '',
            'include'      => '',
            'link_after'   => '',
            'link_before'  => '',
            'post_type'    => 'page',
            'post_status'  => 'publish',
            'show_date'    => '',
            'sort_column'  => 'menu_order, post_title',
            'title_li'     => '',
            'walker'       => ''
        );

        wp_list_pages( $args );

    }

} // end function JasperListPages();

if( ! function_exists( 'JasperListVideos' ) ){
    function JasperListVideos(){
        $args = array(
            'post_type' => 'post',
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_format',
                    'field' => 'slug',
                    'terms' => array( 'post-format-video' )
                )
            )
        );
        $VideoTitlesList = new WP_Query( $args );
        if( $VideoTitlesList->have_posts() ):
            while( $VideoTitlesList->have_posts() ): $VideoTitlesList->the_post();
            ?>
                <li><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></li>
            <?php
            endwhile;
        endif;
    }
} //end function JasperListVideos();