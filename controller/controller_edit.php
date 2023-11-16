<?php

include_once("models/model_edit.php");

class ControllerEdit {
    public $model_edit;

    public function __construct()
    {
        $this->model_edit = new ModelEdit();
    }
    public function indexEdit()
    {
        $id = $_GET['id'];
        $dataEdit=$this->model_edit->getStudentById($id);
        include 'view/editData.php';
        
       /*  if ($dataEdit) {
            $studentData = $dataEdit[0]; // Assuming you only want the first result
           */  
       /*  } else {
            echo "<p>Student data not found!</p>";
        } */
    }
    
}


?>


