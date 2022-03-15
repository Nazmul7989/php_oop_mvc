<?php include "inc/header.php"; ?>

<?php

    $url = $_GET['url'];
    $url = rtrim($url,'/');
    $url = explode('/',$url);

//include 'app/controllers/Test.php';
//new Test();
include 'app/controllers/'.$url[0].".php";
    new $url[0]();


?>


















<?php include "inc/footer.php"; ?>