<?php

//$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
//$base_url="$protocol://".$_SERVER['SERVER_NAME']."/".explode('/',$_SERVER['SCRIPT_NAME'])[1]."/admin/";
   $base_url="http://localhost/employee/";
    require_once('class/crud.php');
    $mysqli=new crud;
?>