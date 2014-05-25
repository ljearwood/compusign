<?php

require_once "library/cleanup.php";
require_once "library/foundation.php";
require_once "library/enqueue-scripts.php";
require_once "library/theme-setup.php";
require_once "library/menu-walker.php";
require_once "library/jas-topbar-functions.php";
require_once "library/sidebars.php";
require_once "library/theme-functions.php";
require_once "library/ClearSettings.php";


if( is_admin() ){
    $clear_settings_page = new ClearSettings();
}

