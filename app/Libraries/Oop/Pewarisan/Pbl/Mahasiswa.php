<?php

namespace App\Libraries\Oop\Pewarisan\Pbl;

class Mahasiswa extends Pengguna
{
    private string $nim;
    private string $prodi;

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
        ];
    }

    public function tampilkanPeran(): string
    {
        return 'Peran : Mahasiswa Sistem Informasi';
    }
}
