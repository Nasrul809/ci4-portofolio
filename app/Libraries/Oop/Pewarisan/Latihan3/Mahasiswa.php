<?php

namespace App\Libraries\Oop\Pewarisan\Latihan3;

/** latihan3.php - constructor turunan memanggil parent::__construct(). */
class Mahasiswa extends Pengguna
{
    public string $nim;
    public string $prodi;

    public function __construct(string $nama, string $email, string $nim, string $prodi)
    {
        parent::__construct($nama, $email);
        $this->nim   = $nim;
        $this->prodi = $prodi;
    }

    /** @return list<string> */
    public function tampilData(): array
    {
        return [
            ...parent::tampilData(),
            'NIM : ' . $this->nim,
            'Prodi : ' . $this->prodi,
            '', // baris kosong pemisah antar mahasiswa
        ];
    }
}
