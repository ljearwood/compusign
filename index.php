<?php get_header(); ?>
<div class="row collapse">
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
        <div class="row collapse">
<!--            <h1 class="small-12 large-12 columns text-center entry-title" itemprop="name"><span id="numero1" itemprop="headline"><a rel-bookmark href="--><?php //the_permalink(); ?><!--" itemprop="url">--><?php //the_title(); ?><!--</a></span></h1>-->
<!--            --><?php //Jasper_entry_meta(); ?>
            <div class="large-12 medium-12 columns logo-slogan-container">
                <div class="row">
                    <div class="large-6 medium-6 columns">
                        <div class="">
                            <h1>Lorem ipsum dolor sit amet.</h1>
                        </div>
                    </div>
                    <div class="large-6 medium-6 columns">
                        <div class="">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="medium-6 large-3 columns">
        <div class="">
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

        <div class="animateContainer">

            <div id="slideInPanel" class="slideInPanel">
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

            <div class="slideDownPanel">
                <h3>Lorem ipsum dolor sit amet.</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eius modi saepe!</p>
                <h4><a href="#">Some Useful link</a>
                </h4>

                <p>Debitis error hic iure nemo perspiciatis quaerat, quam quas quo? Laudantium, tempore!</p>
            </div>

        </div>
    </div>
    <div id="firstStop" class="medium-6 large-9 columns">
        <h1>Lorem ipsum dolor sit amet.</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor ea labore rem sint. Accusamus, assumenda est
            eveniet hic nam ut!</p>

        <p>Autem, cumque debitis enim esse expedita in inventore labore libero mollitia non nostrum quaerat quas
            recusandae reiciendis rem temporibus totam.</p>

        <p>Accusamus ad fugiat, mollitia pariatur perferendis quas! Aliquid aperiam atque exercitationem explicabo
            facere, ipsum maiores minima quo quos sapiente voluptate?</p>

        <p>Alias corporis ea, nobis omnis possimus provident voluptatibus. Culpa deserunt dolorem doloremque ea eos
            incidunt obcaecati placeat quia reiciendis rerum?</p>

        <p>Ad libero nisi tenetur? Dolor dolorem eaque facilis natus obcaecati omnis, veritatis voluptatum. A
            consequuntur doloribus excepturi nisi officia rerum.</p>
        <?php //the_content(); ?>
    <?php
            endwhile;
        endif;
        wp_reset_postdata();
    ?>
    </div>
<!--    <div class="small-12 large-3 columns right">-->
        <?php //get_sidebar(); ?>
<!--    </div>-->


</div>
<?php get_footer(); ?>
