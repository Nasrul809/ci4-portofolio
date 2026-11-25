<?php

namespace App\Libraries\Oop\Pewarisan\Pbl;

/** Class Administrasi mewarisi Pengguna. */
class Administrasi extends Pengguna
{
    // Properti khusus kelas administrasi
    private string $idPegawai;
    private string $bagian;

    // Constructor memanggil parent::__construct()
    public function __construct(string $nama, string $email, string $idPegawai, string $bagian)
    {
        parent::__construct($nama, $email);
        $this->idPegawai = $idPegawai;
        $this->bagian    = $bagian;
    }

    /** Menampilkan data umum (dari induk) dan data administrasi. */
    public function tampilData(): array
    {
        return [
            ...parent::tampilData(),
            'ID Pegawai : ' . $this->idPegawai,
            'Bagian : ' . $this->bagian,
        ];
    }

    public function tampilkanPeran(): string
    {
        return 'Peran : Tenaga Administrasi Kampus';
    }
}
