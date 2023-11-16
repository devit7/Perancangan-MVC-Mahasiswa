<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/">
    <title>Document</title>
</head>
<body>
    <?php
        
        include_once("controller/controller.php");
        include_once('controller/controller_post.php');
        include_once('controller/controller_delete.php');
        include_once('controller/controller_edit.php');
        include_once('controller/controller_ganti.php');


        $controller = new Controller();
        $controller_post = new ControllerPost();
        $controller_delete = new ControllerDelete();
        $controller_edit = new ControllerEdit();
        $controller_ganti = new Controllerganti();

        if(isset($_GET['action'])){
            if($_GET['action'] == 'post_mahasiswa'){
                $controller_post->indexPost();
            }elseif($_GET['action'] == 'delete_mahasiswa'){
                $controller_delete->indexDelete();
            }elseif($_GET['action'] == 'edit_mahasiswa'){
                $controller_edit->indexEdit();
            }elseif($_GET['action'] == 'ganti_mahasiswa') {
                $controller_ganti->indexGanti();
            }

        } else {
            $controller->index();
        }


    ?>
</body>
</html>