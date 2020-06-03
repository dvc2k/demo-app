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
    .'<li>bicicleta  de Montañera</li>'
    .'<li>bicicleta  de Carrera</li>'
    .'<li>bicicleta  Electrica</li>'
    .'<li>bicicleta  Hibrida</li>'
    .'<li>Moto Honda</li>'
    .'<li>Moto Ninja</li>'
    .'<li>Moto Harley Davidson</li>'
    .'<li>Moto Kawasaki</li>'
    .'<li>Y mucho mas...</li>'
    .'</ul>';
echo f_html_footer();
?>