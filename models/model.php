<?php
include_once("models/mahasiswa.php");

class Model{
   public function getMahasiswaList(){
    // Koneksi ke database
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "mahasiswa";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Koneksi ke database gagal!";
    }
    $sql = "SELECT * FROM mahasiswa";

    $result = $conn->query($sql);
    $array = array();
    while ($row = $result->fetch_assoc()) {
        $array[] = $row;
    
    }
    return $array;
}
}


?>