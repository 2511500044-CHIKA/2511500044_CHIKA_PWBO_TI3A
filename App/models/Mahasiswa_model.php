<?php
class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "Chika",
            "nim" => "2511500044",
            "email" => "2411500044@mahasiswa.atmaluhur.ac.id",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "zayin",
            "nim" => "2511500044",
            "email" => "2411500044@mahasiswa.atmaluhur.ac.id",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "billa",
            "nim" => "2511500044",
            "email" => "2411500044@mahasiswa.atmaluhur.ac.id",
            "jurusan" => "Teknik Informatika"
        ],
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}