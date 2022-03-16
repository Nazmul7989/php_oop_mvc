<?php //include "inc/header.php"; ?>

<?php

include 'system/libs/ParentController.php';
include 'system/libs/Load.php';
include 'system/libs/Database.php';
include 'system/libs/MainModel.php';

    $url = isset($_GET['url'])? $_GET['url']: null;

    if ($url != null) {
        $url = rtrim($url,'/');
        $url = explode('/',$url);
    }else{
        unset($url);
    }

    if (isset($url[0])) {

        include 'app/controllers/'.$url[0].".php";
        $controller = new $url[0]();

        if (isset($url[2])) {
            $methodName = $url[1];
            $method = $controller->$methodName($url[2]);
        }else{
            if (isset($url[1])) {
                $methodName = $url[1];
                $controller->$methodName();
            }
        }
    }else{
        include 'app/controllers/Index.php';
        $ctlr = new Index();
        $ctlr->home();
    }






?>




<?php //include "inc/footer.php"; ?>