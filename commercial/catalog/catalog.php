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
<<<<<<< HEAD
    .'<li>Bici Montañera</li>'
    .'<li>Bici de Carrera</li>'
    .'<li>Bici Electrica</li>'
    .'<li>Y mucho mas...</li>'
=======
    .'<li>bicicleta  de Montañera</li>'
    .'<li>bicicleta  de Carrera</li>'
    .'<li>bicicleta  Electrica</li>'
    .'<li>bicicleta  Hibrida</li>'
>>>>>>> a1390c039a22a4aa344833dc69b8877787c32090
    .'</ul>';
echo f_html_footer();
?>