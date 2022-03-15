<?php include "inc/header.php"; ?>

<?php

include 'system/libs/ParentController.php';

    $url = isset($_GET['url'])? $_GET['url']: null;

    if ($url != null) {

        $url = rtrim($url,'/');
        $url = explode('/',$url);

        if (isset($url[0])) {

            include 'app/controllers/'.$url[0].".php";
            $controller = new $url[0]();

            if (isset($url[1])) {

                $methodName = $url[1];

                if (isset($url[2])) {
                    $method = $controller->$methodName($url[2]);
                }
            }
        }


    }else{
        include 'app/controllers/Index.php';
        new Index();
    }




    


?>


















<?php include "inc/footer.php"; ?>