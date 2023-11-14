<?php


    class ModelPost{
        public function postMahasiswa(){
            include_once("koneksi.php");
            
            if(isset($_POST['submit'])){


                $nim = $_POST['id'];
                $nama = $_POST['nama'];
                $prodi = $_POST['prodi'];
                $conn = new mysqli($servername, $username_db, $password_db, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    echo "Koneksi ke database gagal!";
                }


                $sql = "INSERT INTO mahasiswa (id, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
                $result = $conn->query($sql);
                if ($result) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Data tidak ditemukan";
            }

        }

    }

?>