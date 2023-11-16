<?php

include_once("models/model_delete.php");

class ControllerDelete{
    public $model_delete;
    public $model_get;

    public function __construct()
    {
        $this->model_delete = new ModelDelete();
    }

    public function indexDelete(){
        $this->model_delete->deleteMahasiswa();
        header("location:index.php");
    }

    
}

?>