<?php
get_header();
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); // set up the author data
?><?php ?>
<div class="row container">
    <div class="small-10 small-centered large-9 large-centered columns">
        <?php printf( '<h1><small>Author Archives for %s:</small></h1>', '<span><em>' . $curauth->nickname . '</em></span>' ); ?>
    </div>
    <div class="small-9 large-8 columns">
        <div class="row collapse panel">
            <div class="small-12 large-12 columns">
                <div class="row collapse">
                    <div class="small-6 large-6 columns">
                        <img class="alignleft author-avatar" src="<?php echo get_template_directory_uri() . '/img/placeholder.png' ?>" alt=""  />
                    </div>
                    <div class="small-6 large-6 columns">
                        <ul class="vcard">
                            <li class="fn"><?php echo $curauth->nickname ?></li>
                            <li class="description"><?php echo $curauth->description ?></li>
                            <li>Visit <?php echo $curauth->first_name ?>'s Website:<a href="<?php echo $curauth->user_url ?>"> Here</a></li>
                            <li class="email"><a href="#"><?php echo $curauth->user_email ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <?php
        if( have_posts() ) :
            while( have_posts() ) : the_post();
                if( ! has_post_format( 'video' ) ){
                    ?>
                    <div class="panel">
                        <h2 class="small-12 large-12 columns" itemprop="name"><small><span itemprop="headline"><a href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></span></small></h2>
                        <?php //Archive_entry_meta(); ?>
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

