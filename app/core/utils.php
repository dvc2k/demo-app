<?php
if (!defined('APP_ROOT')){
    define ('APP_ROOT','../..');
    define ('LIB_ROOT','../..');
    define ('IMG_ROOT','../../images');
} 


function f_html_header($title){
    return '<!DOCTYPE html>
<html>
<head>
    <title>'.$title.'</title>
</head>
<body>';
}


function f_html_footer(){
return '
</body>
</html>
';
}

  
function f_app_mainmenu(){
    return '<div style="margin:1px; padding:5px; background-color: cyan;">'
        .'| <a href="'.APP_ROOT.'/">Pagina Inicio </a> '
        .'| <a href="'.APP_ROOT.'/commercial/catalog/">Catalogos</a> '
        .'| <a href="'.APP_ROOT.'/commercial/sales/">Ventas</a> '
        .'| <a href="'.APP_ROOT.'/commercial/subscribe/">Afiliacion</a> '
        .'| <a href="'.APP_ROOT.'/doc/help/">Ayuda</a> '
        .'| <a href="'.APP_ROOT.'/doc/manual/">Manuales Tecnicos</a> '
        .'|'
        .'</div>';
}

?>