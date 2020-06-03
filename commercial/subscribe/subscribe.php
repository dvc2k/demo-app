<?php
if (!defined('APP_ROOT')){
    define ('APP_ROOT','../..');
    define ('LIB_ROOT','../..');
    define ('IMG_ROOT','../../images');
} 
include_once APP_ROOT."/app/core/variables.php";
include_once APP_ROOT."/app/core/utils.php";

echo f_html_header('Subscribe');
echo f_app_mainmenu();
echo '<h1>Sports Subscription</h1>';
echo '<ul>'
    .'<li>Subscribirse por Email</li>'
    .'<li>Subscribirse por App</li>'
    .'<li>Aqui estuvo Diego</li>'
    .'</ul>';
echo f_html_footer();
?>