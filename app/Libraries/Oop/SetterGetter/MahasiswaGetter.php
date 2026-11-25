<?php

namespace App\Libraries\Oop\SetterGetter;

/** latihan3.php - nilai diisi lewat constructor, dibaca lewat getter. */
class MahasiswaGetter
{
    public function __construct(
        private string $nim,
        private string $nama,
        private string $prodi,
    ) {
    }

    public function getNim(): string
    {
        return $this->nim;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getProdi(): string
    {
        return $this->prodi;
    }
}
