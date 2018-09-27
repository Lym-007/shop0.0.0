<?php
header("Content-type:text/html;charset=utf-8");
     $str=file_get_contents("json/shop.json");
   //  $str=json_decode($str);
     echo($str);
    
?>