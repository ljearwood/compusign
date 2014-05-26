<?php
// This is the search form use get_top_bar_search_form(); to retrieve this template file. This uses foundation.

function get_top_bar_search_form(){
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="row collapse">
        <div class="small-9 columns">
            <input type="text" class="field" name="s" id="s" placeholder="<?php echo esc_attr( 'Search' ); ?>" />
        </div>
        <div class="small-3 columns">
            <a type="submit" class="button expand" name="submit" id="searchsubmit"><?php echo esc_attr( 'Search' ); ?></a>
        </div>
    </div>
    <!--    <a href="#" class="button postfix">Go</a>-->
</form>
<?php
}
?>