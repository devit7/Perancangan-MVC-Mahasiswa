<?php

include_once("models/model_post.php");

class ControllerPost{
    public $model_post;
    public $model_get;

    public function __construct()
    {
        $this->model_post = new ModelPost();
        $this->model_get = new Model();
    }

    public function indexPost(){
        $this->model_post->postMahasiswa();
        header("location:index.php");
    }

    
}



?>