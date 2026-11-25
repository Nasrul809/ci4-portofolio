<?php

namespace App\Libraries\Oop\Pewarisan\Pbl;

class Dosen extends Pengguna
{
    private string $nidn;
    private string $bidangKeahlian;

    public function __construct(string $nama, string $email, string $nidn, string $bidangKeahlian)
    {
        parent::__construct($nama, $email);
        $this->nidn           = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }

    /** @return list<string> */
    public function tampilData(): array
    {
        return [
            ...parent::tampilData(),
            'NIDN : ' . $this->nidn,
            'Bidang Keahlian : ' . $this->bidangKeahlian,
        ];
    }

    public function tampilkanPeran(): string
    {
        return 'Peran : Dosen Sistem Informasi';
    }
}
