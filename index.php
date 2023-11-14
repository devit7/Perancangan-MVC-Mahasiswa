<?php

    include_once("controller/controller.php");
    include_once('controller/controller_post.php');
    include_once('controller/controller_delete.php');

    $controller = new Controller();
    $controller_post = new ControllerPost();
    $controller_delete = new ControllerDelete();

    if(isset($_GET['action'])){
        if($_GET['action'] == 'post_mahasiswa'){
            $controller_post->indexPost();
        }elseif($_GET['action'] == 'delete_mahasiswa'){
            $controller_delete->indexDelete();
        }
    } else {
        $controller->index();
    }


?>