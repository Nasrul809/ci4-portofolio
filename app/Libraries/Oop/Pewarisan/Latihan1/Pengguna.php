<?php

namespace App\Libraries\Oop\Pewarisan\Latihan1;

/** latihan1.php - class biasa (belum ada pewarisan). */
class Pengguna
{
    public string $nama;
    public string $email;

    /** @return list<string> */
    public function tampilkanData(): array
    {
        return [
            'Nama: ' . $this->nama,
            'Email: ' . $this->email,
        ];
    }
}
