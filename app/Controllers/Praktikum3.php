<?php

namespace App\Controllers;

/**
 * Project 3 - Dasar PHP (folder lama: praktikum-web-mod3-main).
 *
 *  praktikum/pertama.php -> pertama()
 *  praktikum/biodata.php -> biodata()
 *  praktikum/ketiga.php  -> ketiga()
 *  tugas/tugas1.php      -> tugas1()
 *  tugas/tugas2.php      -> tugas2()
 */
class Praktikum3 extends BasePraktikum
{
    protected int $nomor = 3;

    public function index(): string
    {
        return $this->menu('Project 3', 'Dasar PHP', [
            'Praktikum' => [
                ['Pertama', site_url('praktikum/3/pertama'), 'pertama.php'],
                ['Biodata', site_url('praktikum/3/biodata'), 'biodata.php'],
                ['Ketiga',  site_url('praktikum/3/ketiga'),  'ketiga.php'],
            ],
            'Tugas' => [
                ['Tugas 1', site_url('praktikum/3/tugas1'), 'tugas1.php'],
                ['Tugas 2', site_url('praktikum/3/tugas2'), 'tugas2.php'],
            ],
        ]);
    }

    public function pertama(): string
    {
        return $this->output('Belajar PHP', [
            ['h1' => 'Selamat datang'],
            'Program PHP ku yang pertama',
        ]);
    }

    public function biodata(): string
    {
        $nim    = '23650048';
        $nama   = 'Mattius Cunha';
        $alamat = 'Old Trafford';
        $nilai  = 100;

        return $this->output('Biodata', [
            "NIM :  {$nim}",
            "Nama :  {$nama}",
            "Alamat :  {$alamat}",
            "Nilai :  {$nilai}",
        ]);
    }

    public function ketiga(): string
    {
        $a        = '5';
        $b        = '2.5';
        $komentar = 'Selamat Datang ';

        $tambah = $a + $b;
        $kurang = $a - $b;
        $kali   = $a * $b;
        $bagi   = $a / $b;

        $nama  = 'ITM';
        $garis = '=============================================';

        return $this->output('Praktikum Ketiga', [
            "Nilai Variabel a adalah = {$a}",
            "Nilai Variabel b adalah = {$b}",
            "Nilai Variabel komentar adalah = {$komentar}",
            "Hasil penjumlahan a dan b adalah ={$tambah}",
            "Hasil pengurangan a dan b adalah ={$kurang}",
            "Hasil perkalian a dan b adalah ={$kali}",
            "Hasil pembagian a dan b adalah ={$bagi}",
            $garis,
            "{$komentar}Di Lab{$nama}",
            'Selamat Belajar Pemrograman Web',
            $garis,
        ]);
    }

    public function tugas1(): string
    {
        $saldoAwal  = 2000000;
        $bunga      = 0.03;
        $bulan      = 11;
        $saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

        return $this->output('Tugas 1', [
            "Saldo akhir setelah {$bulan} bulan adalah : Rp. {$saldoAkhir},-",
        ]);
    }

    public function tugas2(): string
    {
        $r   = 7;
        $s   = 10;
        $phi = pi();

        $luasAlas      = $phi * $r * $r;
        $luasPermukaan = ($phi * $r * $r) + ($phi * $r * $s);

        return $this->output('Tugas 2', [
            "Luas Alas = {$luasAlas}",
            "Luas Permukaan = {$luasPermukaan}",
        ]);
    }
}
