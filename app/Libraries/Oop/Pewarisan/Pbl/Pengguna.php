<?php

namespace App\Libraries\Oop\Pewarisan\Pbl;

/** pbl_peng.php - class induk. */
class Pengguna
{
    public function __construct(
        protected string $nama,
        protected string $email,
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

    public function tampilkanPeran(): string
    {
        return 'Peran : Pengguna Umum';
    }
}
