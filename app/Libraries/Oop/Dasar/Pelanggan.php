<?php

namespace App\Libraries\Oop\Dasar;

/** Tugas.php */
class Pelanggan
{
    public string $id;
    public string $nama;
    public string $alamat;
    public string $tujuan;

    /** @return list<string> */
    public function tampilkanData(): array
    {
        return [
            'ID Pelanggan : ' . $this->id,
            'Nama Pelanggan : ' . $this->nama,
            'Alamat : ' . $this->alamat,
            'Tujuan : ' . $this->tujuan,
        ];
    }

    public function sewaKendaraan(): string
    {
        return 'Pelanggan ' . $this->nama . ' menyewa kendaraan menuju ' . $this->tujuan;
    }
}
