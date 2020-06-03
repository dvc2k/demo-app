<?php
if (!defined('APP_ROOT')){
    define ('APP_ROOT','.');
    define ('LIB_ROOT','.');
    define ('IMG_ROOT','./images');
};
include_once APP_ROOT."/app/core/variables.php";
include_once APP_ROOT."/app/core/utils.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <?php echo f_app_mainmenu(); ?>    
    <h1>Home Page</h1>
    <div>
        Wellcome!    
    </div>
    <strong>Aqui estuvo David!</strong>
</body>
</html>