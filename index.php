<?php

    include_once("controller/controller.php");
    include_once('controller/controller_post.php');

    $controller = new Controller();
    $controller_post = new ControllerPost();

    if(isset($_GET['action'])){
        if($_GET['action'] == 'post_mahasiswa'){
            $controller_post->indexPost();
        }
    } else {
        $controller->index();
    }


?>