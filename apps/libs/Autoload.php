<?php
class Autoload{
public function __construct(){
   $robj=Request();
   @$controller=$robj->controller;
   @$method=$robj->method;
   $path="apps/controller/$controller.php";
  if( file_exists($path)){
    include $path;
    $obj =new $controller();
    $obj->$method();
  }
}
}
?>