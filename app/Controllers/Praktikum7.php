<?php

namespace App\Controllers;

use App\Libraries\Oop\Konstruktor\Buku;
use App\Libraries\Oop\Konstruktor\Mahasiswa;
use App\Libraries\Oop\Konstruktor\MahasiswaDefault;
use App\Libraries\Oop\Konstruktor\MahasiswaPesan;
use App\Libraries\Oop\Konstruktor\Produk;
use CodeIgniter\Exceptions\PageNotFoundException;

/**
 * Project 7 - Constructor (folder lama: Constructor/OOP-Constructor).
 * Class-nya ada di app/Libraries/Oop/Konstruktor.
 *
 *  latihan1..4.php -> latihan(1..4)
 *  pbl_produk.php  -> pblProduk()
 *  tugas.php       -> tugas()
 */
class Praktikum7 extends BasePraktikum
{
    protected int $nomor = 7;

    public function index(): string
    {
        return $this->menu('Project 7', 'Constructor', [
            'Latihan' => [
                ['Latihan 1', site_url('praktikum/7/latihan/1'), 'latihan1.php'],
                ['Latihan 2', site_url('praktikum/7/latihan/2'), 'latihan2.php'],
                ['Latihan 3', site_url('praktikum/7/latihan/3'), 'latihan3.php'],
                ['Latihan 4', site_url('praktikum/7/latihan/4'), 'latihan4.php'],
            ],
            'PBL & Tugas' => [
                ['PBL Produk', site_url('praktikum/7/pbl-produk'), 'pbl_produk.php'],
                ['Tugas',      site_url('praktikum/7/tugas'),      'tugas.php'],
            ],
        ]);
    }

    public function latihan(int $n): string
    {
        switch ($n) {
            case 1:
                $baris = (new MahasiswaPesan())->log;
                break;

            case 2:
                $baris = (new MahasiswaDefault())->tampilkanData();
                break;

            case 3:
                $baris = $this->dataProduk();
                break;

            case 4:
                $baris = (new Mahasiswa('2301001', 'Andi', 'Sistem Informasi', 3))->tampilkanData();
                break;

            default:
                throw PageNotFoundException::forPageNotFound();
        }

        return $this->output("Latihan {$n}", $baris);
    }

    public function pblProduk(): string
    {
        return $this->output('PBL Produk', $this->dataProduk());
    }

    public function tugas(): string
    {
        return $this->output('Tugas', (new Buku('Pemrograman PHP', 'Ahmad'))->tampilkanData());
    }

    /** Dipakai bersama oleh latihan3.php dan pbl_produk.php (isinya sama). */
    private function dataProduk(): array
    {
        $produk1 = new Produk('p001', 'Laptop acer', 7000000, 10, 10);
        $produk2 = new Produk('p002', 'Mouse', 70000, 25);

        return [...$produk1->tampilData(), '---', ...$produk2->tampilData()];
    }
}
