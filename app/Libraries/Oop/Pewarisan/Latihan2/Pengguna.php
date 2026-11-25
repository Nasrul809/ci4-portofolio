<?php

namespace App\Libraries\Oop\Pewarisan\Latihan2;

/** latihan2.php - class induk. */
class Pengguna
{
    public string $nama;
    public string $email;

    /** @return list<string> */
    public function tampilData(): array
    {
        return [
            'Nama : ' . $this->nama,
            'Email : ' . $this->email,
        ];
    }
}
