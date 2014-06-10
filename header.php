<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?> itemscope="" itemtype="http://schema.org/WebPage">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?> itemscope="" itemtype="http://schema.org/WebPage">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?> itemscope="" itemtype="http://schema.org/WebPage">
<!--<![endif]-->

<head>
    <title itemprop="name">
        <?php
            // Print the <title> tag based on what is being viewed.
            global $page, $paged;

            wp_title( '|', true, 'right' );

            // Add the blog name.
            bloginfo( 'name' );

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";

            // Add a page number if necessary:
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf('Page %s', max( $paged, $page ) );
        ?>
    </title>
    <meta name="homeurl" itemprop="url" content="<?php echo get_site_url(); ?>" />
    <meta name="description" itemprop="description" content="<?php
        $clearOptions = get_option('compu_settings');
        $mainDescription = $clearOptions['main_description'];
        echo $mainDescription;
    ?>"
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
    <link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/css/app.css'; ?>"  />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemprop="mainContentOfPage">
<?php include "compu-top-bar.php"; ?>

