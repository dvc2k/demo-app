<?php
if (!defined('APP_ROOT')){
    define ('APP_ROOT','../..');
    define ('LIB_ROOT','../..');
    define ('IMG_ROOT','../../images');
} 
include_once APP_ROOT."/app/core/variables.php";
include_once APP_ROOT."/app/core/utils.php";

echo f_html_header('Help');
echo f_app_mainmenu();
echo '<h1>How can I help You!<h1>';
echo '<h1 style="color:blue;" >Aqui mi cambio (Vale) <h1>';
echo f_html_footer();
?>