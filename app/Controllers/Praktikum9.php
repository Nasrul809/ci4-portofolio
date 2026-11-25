<?php

namespace App\Controllers;

use App\Libraries\Oop\Dasar\Kendaraan;
use App\Libraries\Oop\Dasar\Mahasiswa;
use App\Libraries\Oop\Dasar\MahasiswaNilai;
use App\Libraries\Oop\Dasar\Pelanggan;

/**
 * Project 9 - Praktikum OOP (folder lama: Praktikum/OOP-Praktikum).
 * Class-nya ada di app/Libraries/Oop/Dasar.
 *
 *  Prosedural.php -> prosedural()
 *  oop.php        -> oop()
 *  mahasiswa.php  -> mahasiswa()
 *  Tugas.php      -> tugas()
 */
class Praktikum9 extends BasePraktikum
{
    protected int $nomor = 9;

    public function index(): string
    {
        return $this->menu('Project 9', 'Praktikum OOP', [
            'Praktikum' => [
                ['Prosedural', site_url('praktikum/9/prosedural'), 'Prosedural.php'],
                ['OOP',        site_url('praktikum/9/oop'),        'oop.php'],
                ['Mahasiswa',  site_url('praktikum/9/mahasiswa'),  'mahasiswa.php'],
            ],
            'Tugas' => [
                ['Tugas', site_url('praktikum/9/tugas'), 'Tugas.php'],
            ],
        ]);
    }

    /** Versi prosedural: data dikirim ke function, tanpa class. */
    public function prosedural(): string
    {
        $nim      = '23001';
        $nama     = 'Andi';
        $prodi    = 'Sistem Informasi';
        $semester = 4;

        $tampilkanData = static fn ($nim, $nama, $prodi, $semester): array => [
            "NIM : {$nim}",
            "Nama : {$nama}",
            "Prodi : {$prodi}",
            "Semester : {$semester}",
        ];

        return $this->output('Prosedural', $tampilkanData($nim, $nama, $prodi, $semester));
    }

    public function oop(): string
    {
        $mhs1           = new Mahasiswa();
        $mhs1->nim      = '23001';
        $mhs1->nama     = 'Andi';
        $mhs1->prodi    = 'Sistem Informasi';
        $mhs1->semester = 4;

        return $this->output('OOP', [
            'NIM : ' . $mhs1->nim,
            'Nama : ' . $mhs1->nama,
            'Prodi : ' . $mhs1->prodi,
            'Semester : ' . $mhs1->semester,
        ]);
    }

    public function mahasiswa(): string
    {
        $mhs1        = new MahasiswaNilai();
        $mhs1->nim   = '23001';
        $mhs1->nama  = 'Andi';
        $mhs1->prodi = 'Sistem Informasi';
        $mhs1->nilai = 85;

        $mhs2        = new MahasiswaNilai();
        $mhs2->nim   = '23002';
        $mhs2->nama  = 'Indi';
        $mhs2->prodi = 'Sistem Informasi';
        $mhs2->nilai = 55;

        return $this->output('Mahasiswa', [...$mhs1->tampilkanData(), ...$mhs2->tampilkanData()]);
    }

    public function tugas(): string
    {
        $kendaraan1        = new Kendaraan();
        $kendaraan1->nomor = 'B0001AA';
        $kendaraan1->merk  = 'Avanza';
        $kendaraan1->jenis = 'Mobil';

        $kendaraan2        = new Kendaraan();
        $kendaraan2->nomor = 'B0002AB';
        $kendaraan2->merk  = 'NMax';
        $kendaraan2->jenis = 'Motor';

        $pelanggan1         = new Pelanggan();
        $pelanggan1->id     = '001';
        $pelanggan1->nama   = 'Upin';
        $pelanggan1->alamat = 'Kabupaten Nganjuk';
        $pelanggan1->tujuan = 'Kota Kediri';

        $pelanggan2         = new Pelanggan();
        $pelanggan2->id     = '002';
        $pelanggan2->nama   = 'Ipin';
        $pelanggan2->alamat = 'Kota Kediri';
        $pelanggan2->tujuan = 'Kota Malang';

        return $this->output('Tugas', [
            $kendaraan1->statusKendaraan(),
            ...$kendaraan1->tampilkanData(),
            '---',
            $kendaraan2->statusKendaraan(),
            ...$kendaraan2->tampilkanData(),
            '---',
            ...$pelanggan1->tampilkanData(),
            $pelanggan1->sewaKendaraan(),
            '---',
            ...$pelanggan2->tampilkanData(),
            $pelanggan2->sewaKendaraan(),
        ]);
    }
}
