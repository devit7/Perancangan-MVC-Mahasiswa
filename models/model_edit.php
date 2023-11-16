<?php
class ModelEdit {
    public function getStudentById($id) {
        include("koneksi.php");
        $id = $_GET['id'];
        $query = "SELECT * FROM mahasiswa WHERE id = '$id'";
        $result = mysqli_query($conn, $query);

        $array = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    
}
?>