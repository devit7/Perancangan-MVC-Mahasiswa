<?php

    class ModelEdit{
        public function editMahasiswa(){
            include_once('koneksi.php');

            $id = $_GET['id'];

            $query = "SELECT * FROM mahasiswa WHERE id = '$id'";

            $result = mysqli_query($conn, $query);

            $row = mysqli_fetch_assoc($result);

            return $row;

            

        }

    }

?>