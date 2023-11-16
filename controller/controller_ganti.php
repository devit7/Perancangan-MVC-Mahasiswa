<?php
// include('models/model_ganti.php');
// class Controllganti{
//     public $model_ganti;
//     public function __construct(){
//         $this->model_ganti = new Ganti();
//     }
//     public function updateStudentData()
//     {
        
//         if (isset($_POST['submit'])) {
//             $id = $_POST['id'];
//             $nama = $_POST['nama'];
//             $prodi = $_POST['prodi'];

//             $result = $this->model_ganti->updateStudent($id, $nama, $prodi);
//             // if ($result) {
//             //     echo "data berhasil diubah";
//             // } else {
//             //     echo "data Gagal dirubah";
//             // }
//             header("location:index.php");
//         }
//     }
// }


include_once("models/model_ganti.php");

class ControllerGanti{
    public $model_ganti;
    public $model_get;
    

    public function __construct()
    {
        $this->model_ganti = new ModelGanti();
    }

    public function indexGanti(){
        $id = $_GET["id"];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $this->model_ganti->gantiMahasiswa($id, $nama, $prodi);
        header('location:index.php');
        header('view/listmahasiswa.php');
        
    }

    
}



?>
