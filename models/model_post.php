<?php


    class ModelPost{
        public function postMahasiswa(){
            include_once("koneksi.php");
            
            if(isset($_POST['submit'])){


                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    echo "Koneksi ke database gagal!";
                }
                //check value
                $tahun = $_POST['tahun_ajar'];
                $nama = $_POST['nama'];
                $prodi = $_POST['prodi'];

                if($prodi == ''){
                    echo "Prodi tidak boleh kosong";
                    die();
                }
                $prodiId=0;
                if($prodi == 'Teknik Informatika'){
                    $prodiId = 01;
                } else if($prodi == 'Sistem Informasi'){
                    $prodiId = 02;
                } else if($prodi == 'Rekayasa Perangkat Lunak'){
                    $prodiId = 03;
                }

                //generate id berdasarkan jumlah data, tahun, dan prodi
                $checklenght ='SELECT COUNT(id) as jumlah_data FROM mahasiswa';
                $result = $conn->query($checklenght);
                $row = $result->fetch_assoc();
                $jumlahData = $row['jumlah_data'];
                $id =intval('0'.$jumlahData.$tahun.$prodiId);
                                
                $sql = "INSERT INTO mahasiswa (id, nama, prodi) VALUES ('$id', '$nama', '$prodi')";
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