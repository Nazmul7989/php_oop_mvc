<?php include "inc/header.php"; ?>

<?php

    $url = $_GET['url'];
    $url = rtrim($url,'/');
    $url = explode('/',$url);

//include 'app/controllers/Test.php';
//new Test();
include 'app/controllers/'.$url[0].".php";

$controller = new $url[0]();

//$method = $controller->test();
$methodName = $url[1];
$method = $controller->$methodName($url[2]);





?>


















<?php include "inc/footer.php"; ?>