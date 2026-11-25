<?php

namespace App\Libraries\Oop\Dasar;

/** Tugas.php */
class Kendaraan
{
    public string $nomor;
    public string $merk;
    public string $jenis;

    /** @return list<string> */
    public function tampilkanData(): array
    {
        return [
            'Nomor : ' . $this->nomor,
            'Merk : ' . $this->merk,
            'Jenis : ' . $this->jenis,
        ];
    }

    public function statusKendaraan(): string
    {
        return 'Kendaraan tersedia untuk disewa';
    }
}
