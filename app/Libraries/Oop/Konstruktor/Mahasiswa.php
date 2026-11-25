<?php

namespace App\Libraries\Oop\Konstruktor;

/** latihan4.php - constructor dengan 4 parameter. */
class Mahasiswa
{
    public function __construct(
        public string $nim,
        public string $nama,
        public string $prodi,
        public int $semester,
    ) {
    }

    /** @return list<string> */
    public function tampilkanData(): array
    {
        return [
            'NIM : ' . $this->nim,
            'Nama : ' . $this->nama,
            'Prodi : ' . $this->prodi,
            'Semester : ' . $this->semester,
        ];
    }
}
