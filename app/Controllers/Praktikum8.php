<?php

namespace App\Controllers;

use App\Libraries\Oop\Pewarisan\Latihan1\Pengguna as Pengguna1;
use App\Libraries\Oop\Pewarisan\Latihan2\Mahasiswa as Mahasiswa2;
use App\Libraries\Oop\Pewarisan\Latihan3\Mahasiswa as Mahasiswa3;
use App\Libraries\Oop\Pewarisan\Latihan4\Admin;
use App\Libraries\Oop\Pewarisan\Latihan4\Dosen as Dosen4;
use App\Libraries\Oop\Pewarisan\Latihan4\Mahasiswa as Mahasiswa4;
use App\Libraries\Oop\Pewarisan\Pbl\Administrasi;
use App\Libraries\Oop\Pewarisan\Pbl\Dosen;
use App\Libraries\Oop\Pewarisan\Pbl\Mahasiswa as MahasiswaPbl;
use CodeIgniter\Exceptions\PageNotFoundException;

/**
 * Project 8 - Pewarisan (folder lama: pewarisan/pewarisan).
 * Class-nya ada di app/Libraries/Oop/Pewarisan.
 *
 *  latihan1..4.php -> latihan(1..4)
 *  pbl_peng.php    -> pbl()
 */
class Praktikum8 extends BasePraktikum
{
    protected int $nomor = 8;

    public function index(): string
    {
        return $this->menu('Project 8', 'Pewarisan', [
            'Latihan' => [
                ['Latihan 1', site_url('praktikum/8/latihan/1'), 'latihan1.php'],
                ['Latihan 2', site_url('praktikum/8/latihan/2'), 'latihan2.php'],
                ['Latihan 3', site_url('praktikum/8/latihan/3'), 'latihan3.php'],
                ['Latihan 4', site_url('praktikum/8/latihan/4'), 'latihan4.php.php'],
            ],
            'PBL' => [
                ['PBL', site_url('praktikum/8/pbl'), 'pbl_peng.php'],
            ],
        ]);
    }

    public function latihan(int $n): string
    {
        switch ($n) {
            case 1:
                $pengguna        = new Pengguna1();
                $pengguna->nama  = 'Andi';
                $pengguna->email = 'andi@gmail.com';
                $baris           = $pengguna->tampilkanData();
                break;

            case 2:
                $mhs        = new Mahasiswa2();
                $mhs->nama  = 'Rizky';
                $mhs->email = 'Rizky@gmail.com';
                $mhs->nim   = '123456';
                $mhs->prodi = 'Sistem Informasi';
                $baris      = $mhs->tampilData();
                break;

            case 3:
                $mhs1  = new Mahasiswa3('Rizky', 'Riz@gmail.com', '123456', 'Sistem Informasi');
                $mhs2  = new Mahasiswa3('Andi', 'Andi@gmail.com', '123457', 'Sistem Informasi');
                $baris = [...$mhs1->tampilData(), ...$mhs2->tampilData()];
                break;

            case 4:
                $baris = [
                    (new Dosen4())->tampilkanPeran(),
                    (new Mahasiswa4())->tampilkanPeran(),
                    (new Admin())->tampilkanPeran(),
                ];
                break;

            default:
                throw PageNotFoundException::forPageNotFound();
        }

        return $this->output("Latihan {$n}", $baris);
    }

    public function pbl(): string
    {
        $mhs1   = new MahasiswaPbl('Budi', 'budi@gmail.com', '123456789', 'Sistem Informasi');
        $dosen1 = new Dosen('Dr. Andi', 'andi@gmail.com', '987654321', 'Pemrograman Web');
        $admin1 = new Administrasi('Siti', 'siti@gmail.com', 'ADM007', 'Keuangan & Kemahasiswaan');

        return $this->output('PBL Pewarisan', [
            ['h2' => 'Data Mahasiswa'],
            ...$mhs1->tampilData(),
            $mhs1->tampilkanPeran(),
            ['h2' => 'Data Dosen'],
            ...$dosen1->tampilData(),
            $dosen1->tampilkanPeran(),
            ['h2' => 'Data Administrasi'],
            ...$admin1->tampilData(),
            $admin1->tampilkanPeran(),
        ]);
    }
}
