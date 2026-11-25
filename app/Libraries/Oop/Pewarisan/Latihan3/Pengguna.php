<?php

namespace App\Libraries\Oop\Pewarisan\Latihan3;

/** latihan3.php - class induk dengan constructor. */
class Pengguna
{
    public function __construct(
        public string $nama,
        public string $email,
    ) {
    }

    /** @return list<string> */
    public function tampilData(): array
    {
        return [
            'Nama : ' . $this->nama,
            'Email : ' . $this->email,
        ];
    }
}
