<?php

class ModelDelete{
public function deleteMahasiswa(){

    include_once('koneksi.php');

    $id = $_GET['id'];

    $query = "DELETE FROM mahasiswa WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "Data berhasil dihapus";
    } else {
        echo "Data gagal dihapus";
    }

}

}

?>
    