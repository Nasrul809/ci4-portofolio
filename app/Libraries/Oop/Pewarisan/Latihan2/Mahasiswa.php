<?php

namespace App\Libraries\Oop\Pewarisan\Latihan2;

/** latihan2.php - class turunan (extends Pengguna). */
class Mahasiswa extends Pengguna
{
    public string $nim;
    public string $prodi;

    /** @return list<string> */
    public function tampilData(): array
    {
        return [
            ...parent::tampilData(),
            'NIM : ' . $this->nim,
            'Prodi : ' . $this->prodi,
        ];
    }
}
