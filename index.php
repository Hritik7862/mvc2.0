<?php
include "helper/Request.php";
spl_autoload_register(function($file){
    $path= "apps/libs/$file.php";
    if(file_exists($path)){
        include $path;
    }

});
//echo "hello";
new Autoload();
?>