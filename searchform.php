<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="row collapse">
        <div class="small-9 columns">
            <input type="text" class="field" name="s" id="s" placeholder="<?php echo esc_attr( 'Search' ); ?>" />
        </div>
        <div class="small-3 columns">
            <input type="submit" class="button postfix submit" name="submit" id="searchsubmit" value="<?php echo esc_attr( 'Search' ); ?>" />
        </div>
    </div>
    <!--    <a href="#" class="button postfix">Go</a>-->
</form>
