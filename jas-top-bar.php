<?php //ob_start();// This should add the topbar module
    $shortTitleOption = get_option('compu_settings');
    $shortTitle = $shortTitleOption['title'];
?>
<!--<div id="fb-root"></div>-->
<div id="jas-topbar" class="fixed jas-top-bar">
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
                <li class="has-dropdown show-for-large-up">
                    <a href="#">Categories</a>
                    <ul class="dropdown">
                        <?php DisplayCategoryList(); ?>
                    </ul>

                </li>
                <li class="has-dropdown">
                    <a href="#">Articles</a>
                    <ul class="dropdown">
                        <li class="has-dropdown">
                            <a href="#">Recent Articles</a>
                            <ul class="dropdown">
                                <li class="articleSearchResult">
                                    <header class="cwmc-top-bar-header">
                                        <h5 class="text-center"><sup class="leadingTrainingLines">___</sup><?php echo date('D M d, Y'); ?><sup class="leadingTrainingLines">___</sup></h5>
                                    </header>
                                    <?php cwmc_recent_posts(); ?>
                                    <footer class="cwmc-top-bar-footer">
                                        <h5 class="text-center"><sup class="leadingTrainingLines">___</sup> CWMC <sup class="leadingTrainingLines">___</sup></h5>
                                    </footer>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Videos</a>
                    <ul class="dropdown">
                        <?php JasperListVideos(); ?>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Pages</a>
                    <ul class="dropdown">
                        <?php JasperListPages(); ?>
                    </ul>
                </li>
                <li>
                    <!-- Place this code where you want the badge to render. -->
<!--                    <a href="//plus.google.com/109903743473823980230?prsrc=3"-->
<!--                       rel="publisher" target="_top" style="text-decoration:none;">-->
<!--                        <img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/>-->
<!--                    </a>-->
                </li>
                <li class="ytSubscribeArea">
<!--                    <div class="g-ytsubscribe cwmc-yt-subscribe" data-channelid="UCePOnSCIS3N9lCtrBebwmIw" data-layout="default" data-theme="dark" data-count="hidden"></div>-->
                </li>
                <li class="fbSubscriber">
<!--                    <div class="fb-like" data-href="http://www.capitolwebmarketingconsultants.com/" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>-->
                </li>
            </ul>
        </section>
    </nav>
</div>