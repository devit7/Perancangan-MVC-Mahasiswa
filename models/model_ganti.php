<?php
// class Ganti{
//     public function updateStudent($id, $nama, $prodi) {
//         include("koneksi.php");
//         $query = "UPDATE mahasiswa SET nama = '$nama', prodi = '$prodi' WHERE id = '$id'";
//         $result = mysqli_query($conn, $query);

//         return $result;
//     }
// }
class ModelGanti{
    public function gantiMahasiswa( $id,$nama, $prodi){
        include_once("koneksi.php");
        
        if(isset($_POST['submit'])){

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                echo "Koneksi ke database gagal!";
            }

            if($prodi == ''){
                echo "Prodi tidak boleh kosong";
                die();
            }


            //generate id berdasarkan jumlah data, tahun, dan prodi
            // $checklenght ='SELECT COUNT(id) as jumlah_data FROM mahasiswa';
            $query = "UPDATE mahasiswa SET nama = '$nama', prodi = '$prodi' WHERE id = '$id'";
            $result = $conn->query($query);
            // $row = $result->fetch_assoc();
            // $jumlahData = $row['jumlah_data'];
                            
            // $sql = "INSERT INTO mahasiswa (id, nama, prodi) VALUES ('$id', '$nama', '$prodi')";
            // $result = $conn->query($sql);
            header('view/listmahasiswa.php');
            // if ($result) {
            //     echo "New record created successfully";
            // } else {
            //     echo "Error:".  "<br>" . $conn->error;
            // }
        } else {
            echo "Data tidak ditemukan";
        }

    }

}
?>