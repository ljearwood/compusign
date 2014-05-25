<?php get_header(); ?>
<div class="row container">
    <div class="small-12 small-centered large-12 large-centered columns">
        <?php ?>
        <h2 class="subheader">Apologies, but the Resource you requested is not found!</h2>
    </div>
    <div class="small-3 large-4 columns">
        <?php get_sidebar(); ?>
    </div>
    <div class="small-9 large-8 columns">
            <h3 class="small-12 large-12 columns">Thank you for visiting our Web-site.</h3>
            <?php ListArticlesFor404(); ?>
            <p class="small-10 small-centered large-10 large-centered columns">Use this form to search our Site.</p>
            <?php
            get_search_form();
            ?>
    </div>
</div>
<?php get_footer(); ?>
