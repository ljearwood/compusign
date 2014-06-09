<?php //ob_start();// This should add the topbar module
    $shortTitleOption = get_option('compu_settings');
    $shortTitle = $shortTitleOption['title'];
?>
<!--<div id="fb-root"></div>-->
<div id="jas-topbar" class="fixed jas-top-bar contain-to-grid">
    <nav class="top-bar" data-topbar="">
        <ul class="title-area">
            <li class="name show-for-medium-up"><h1 class="always-white"><a href="<?php echo get_home_url(); ?>"><?php echo $shortTitle; //bloginfo( 'name' ); ?></a></h1></li>
            <li class="name show-for-small"><h1><a href="<?php echo get_home_url(); ?>"><?php echo $shortTitle; ?></a></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>
        <ul>
            <li class="divider"></li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="show-for-medium-up"><a id="start-jr" onclick="StartJoyRide();" class="button">Start the tour</a></li>
                <li class="has-form">
                    <div class="row collapse">
                        <div class="small-12 columns show-for-medium-up">
                            <?php get_top_bar_search_form(); ?>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Get a Quote</a></li>
                <li class="toggle-topbar"><a href="#">Places</a></li>
            </ul>
        </section>
    </nav>
</div>