<?php

namespace App\Libraries\Oop\SetterGetter;

/** latihan2.php */
class MahasiswaNama
{
    private string $nama;

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    public function getNama(): string
    {
        return $this->nama;
    }
}
