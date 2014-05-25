<?php
register_sidebar(array(
        'name'=> 'Main Sidebar',
        'id'=>'main-sidebar',
        'before_widget' => '<div class="row collapse"><div class="widget %2$s small-12 columns"><ul id="%1$s" class="pricing-table">',
        'after_widget' => '</ul></div></div>',
        'before_title' => '<li class="title">',
        'after_title' => '</li>'
    )
);
