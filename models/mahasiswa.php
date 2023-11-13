<?php
class Mahasiswa {
    public $id;
    public $nama;
    public $prodi;

    public function __construct($id, $nama, $prodi) {
        $this->id = $id;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }
}

?>