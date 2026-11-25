<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

/**
 * Project 5 - Array PHP (folder lama: Praktikum-Web-modul6-main).
 *
 *  praktikum/array1..3.php -> latihan(1..3)
 *  tugas/no1.php, no2.php  -> tugas(1..2)
 */
class Praktikum5 extends BasePraktikum
{
    protected int $nomor = 5;

    public function index(): string
    {
        return $this->menu('Project 5', 'Array PHP', [
            'Praktikum' => [
                ['Array 1', site_url('praktikum/5/latihan/1'), 'array1.php'],
                ['Array 2', site_url('praktikum/5/latihan/2'), 'array2.php'],
                ['Array 3', site_url('praktikum/5/latihan/3'), 'array3.php'],
            ],
            'Tugas' => [
                ['Nomor 1', site_url('praktikum/5/tugas/1'), 'no1.php'],
                ['Nomor 2', site_url('praktikum/5/tugas/2'), 'no2.php'],
            ],
        ]);
    }

    public function latihan(int $n): string
    {
        $baris = [];

        switch ($n) {
            case 1:
                $kelompok1 = ['Andi', 'Budi', 'Chika', 'David', 'Erna'];
                $baris[]   = 'Nama Kelompok 1 :';
                foreach ($kelompok1 as $nama) {
                    $baris[] = "+ {$nama}";
                }
                $baris[] = '';
                $baris[] = '';

                $kelompok2   = [];
                $kelompok2[] = 'Fera';
                $kelompok2[] = 'Gani';
                $kelompok2[] = 'Hery';
                $kelompok2[] = 'Intan';
                $kelompok2[] = 'Jaka';
                $baris[]     = 'Nama Kelompok 2:';
                foreach ($kelompok2 as $nama) {
                    $baris[] = "+{$nama}";
                }
                break;

            case 2:
                $array1  = ['Arman', 'Bayu', 'Feri'];
                $baris[] = 'array awal ialah:';
                foreach ($array1 as $i => $v) {
                    $baris[] = "data ke-{$i} : {$v}";
                }

                $baris[] = '';
                $baris[] = 'Setelah ditambahkan "Herni, Gita & Dewi" menggunakan fungsi array_push();';
                array_push($array1, 'Herni', 'Gita', 'Dewi');
                foreach ($array1 as $i => $v) {
                    $baris[] = "data ke-{$i}:{$v}";
                }

                $baris[] = '';
                $baris[] = 'Setelah bagian awal array dihapus menggunakan fungsi array_shift():';
                array_shift($array1);
                foreach ($array1 as $i => $v) {
                    $baris[] = "data ke-{$i} : {$v}";
                }

                $baris[] = '';
                $baris[] = 'Dan setelah isi array diurutkan menggunakan fungsi_sort():';
                sort($array1);
                foreach ($array1 as $i => $v) {
                    $baris[] = "data ke-{$i} : {$v}";
                }
                break;

            case 3:
                $pegawai = ['lina', 'arni', 'jona', 'punjabi', 'markus', 'marlin'];

                $baris[] = ['Sebelum diurutkan'];
                foreach ($pegawai as $data => $nama) {
                    $baris[] = "{$data}: {$nama}";
                }

                sort($pegawai);

                $baris[] = ['Setelah diurutkan'];
                foreach ($pegawai as $data => $nama) {
                    $baris[] = "{$data}: {$nama}";
                }
                break;

            default:
                throw PageNotFoundException::forPageNotFound();
        }

        return $this->output("Array {$n}", $baris);
    }

    public function tugas(int $n): string
    {
        $buah = [
            'Apel'   => 15000,
            'Mangga' => 20000,
            'Jeruk'  => 18000,
            'Pisang' => 12000,
            'Anggur' => 30000,
        ];
        $baris = [];

        switch ($n) {
            case 1:
                $baris[] = ['h3' => 'Array Awal'];
                foreach ($buah as $nama => $harga) {
                    $baris[] = "{$nama} = Rp.{$harga}";
                }

                $temp = $buah;
                sort($temp);
                $baris[] = ['h3' => 'sort()'];
                foreach ($temp as $harga) {
                    $baris[] = "Rp.{$harga}";
                }

                $temp = $buah;
                rsort($temp);
                $baris[] = ['h3' => 'rsort()'];
                foreach ($temp as $harga) {
                    $baris[] = "Rp.{$harga}";
                }

                foreach (['asort', 'arsort', 'ksort', 'krsort'] as $fungsi) {
                    $temp = $buah;
                    $fungsi($temp);
                    $baris[] = ['h3' => "{$fungsi}()"];
                    foreach ($temp as $nama => $harga) {
                        $baris[] = "{$nama} = Rp.{$harga}";
                    }
                }
                break;

            case 2:
                $baris[] = 'Data awal array asosiatif :';
                foreach ($buah as $nama => $harga) {
                    $baris[] = "{$nama} : Rp.{$harga}";
                }

                $baris[] = '';
                $baris[] = 'Mengambil semua nama buah menggunakan fungsi array_keys() :';
                foreach (array_keys($buah) as $data => $nama) {
                    $baris[] = "data ke-{$data} : {$nama}";
                }

                $baris[] = '';
                $baris[] = 'Mengambil semua harga buah menggunakan fungsi array_values() :';
                foreach (array_values($buah) as $data => $harga) {
                    $baris[] = "data ke-{$data} : Rp.{$harga}";
                }

                $baris[] = '';
                $baris[] = 'Mencari buah dengan harga 18000 menggunakan fungsi array_search() :';
                $cari    = array_search(18000, $buah, true);
                $baris[] = "Harga Rp.18000 adalah milik buah : {$cari}";

                $baris[] = '';
                $baris[] = 'Membalik urutan array menggunakan fungsi array_reverse() :';
                foreach (array_reverse($buah, true) as $nama => $harga) {
                    $baris[] = "{$nama} : Rp.{$harga}";
                }

                $baris[] = '';
                $baris[] = 'Menyaring buah dengan harga >= 18000 menggunakan fungsi array_filter() :';
                $mahal   = array_filter($buah, static fn ($harga) => $harga >= 18000);
                foreach ($mahal as $nama => $harga) {
                    $baris[] = "{$nama} : Rp.{$harga}";
                }
                break;

            default:
                throw PageNotFoundException::forPageNotFound();
        }

        return $this->output("Tugas Nomor {$n}", $baris);
    }
}
