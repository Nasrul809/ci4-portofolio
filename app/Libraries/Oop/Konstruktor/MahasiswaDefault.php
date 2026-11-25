<?php

namespace App\Libraries\Oop\Konstruktor;

/** latihan2.php - constructor mengisi nilai awal. */
class MahasiswaDefault
{
    public string $nama;
    public string $prodi;

    public function __construct()
    {
        $this->nama  = 'Andi';
        $this->prodi = 'Sistem Informasi';
    }

    /** @return list<string> */
    public function tampilkanData(): array
    {
        return [
            'Nama : ' . $this->nama,
            'Prodi : ' . $this->prodi,
        ];
    }
}
