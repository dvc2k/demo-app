<?php
if (!defined('APP_ROOT')){
    define ('APP_ROOT','../..');
    define ('LIB_ROOT','../..');
    define ('IMG_ROOT','../../images');
} 
include_once APP_ROOT."/app/core/variables.php";
include_once APP_ROOT."/app/core/utils.php";

echo f_html_header('Product 1');
echo f_app_mainmenu();
echo '<h1>Catalog of Products</h1>';
echo '<ul> '
    .'<li>Bici de Montañera</li>'
    .'<li>Bici de Carrera</li>'
    .'<li>Bici Electrica</li>'
    .'</ul>';
echo f_html_footer();
?>