<?php
    header("Content-type:text/html;charset=utf-8");
    $info=array("id"=>$_GET["id"],"name"=>$_GET["name"],"price"=>$_GET["price"]);
    $info=json_encode($info);//转为json字符串
    echo $info;
?>