<?php

namespace App\Libraries\Oop\Konstruktor;

/** tugas.php */
class Buku
{
    public function __construct(
        public string $judul,
        public string $penulis,
    ) {
    }

    /** @return list<string> */
    public function tampilkanData(): array
    {
        return [
            'Judul: ' . $this->judul,
            'Penulis: ' . $this->penulis,
        ];
    }
}
