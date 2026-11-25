<?php

namespace App\Libraries\Oop\Konstruktor;

/** latihan1.php - constructor otomatis dijalankan saat object dibuat. */
class MahasiswaPesan
{
    /** @var list<string> */
    public array $log = [];

    public function __construct()
    {
        $this->log[] = 'Object Mahasiswa berhasil dibuat';
    }
}
