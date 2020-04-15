<?php

class Mahasiswa_model{
    private $mhs = [
        [
            "nama"          => "Dani",
            "nim"           => "D12119xxx",
            "tempat_lahir"  => "Makassar",
            "tanggal_lahir" => "11-10-2000",
            "kontak"        => "081294349xxx"
        ],
        [
            "nama"          => "Dani",
            "nim"           => "D12119xxx",
            "tempat_lahir"  => "Makassar",
            "tanggal_lahir" => "11-10-2000",
            "kontak"        => "081294349xxx"
        ],
        [
            "nama"          => "Dani",
            "nim"           => "D12119xxx",
            "tempat_lahir"  => "Makassar",
            "tanggal_lahir" => "11-10-2000",
            "kontak"        => "081294349xxx"
        ],
    ];

    public function getMahasiswa(){
        return $this->mhs;
    }
}