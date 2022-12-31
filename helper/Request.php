<?php
function Request(){
    $obj=(object)["controller"=>"product","method"=>"index","get"=>$_GET,"post"=>$_POST,"para"=>null];
    // print_r($_GET);
    // exit;
    if(isset($_GET['url'])){
        $url=explode('/',trim($_GET['url'],'/'));
        
        print_r($url);
    }

}   


?>