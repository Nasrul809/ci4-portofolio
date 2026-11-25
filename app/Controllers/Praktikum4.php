<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

/**
 * Project 4 - Perulangan PHP (folder lama: praktikum_web_modul5-main).
 *
 *  praktikum/perulangan_1..7.php -> latihan(1..7)
 *  tugas/no_1..3.php             -> tugas(1..3)
 */
class Praktikum4 extends BasePraktikum
{
    protected int $nomor = 4;

    public function index(): string
    {
        $praktikum = [];
        foreach (range(1, 7) as $i) {
            $praktikum[] = ["Perulangan {$i}", site_url("praktikum/4/latihan/{$i}"), "perulangan_{$i}.php"];
        }

        $tugas = [];
        foreach (range(1, 3) as $i) {
            $tugas[] = ["Nomor {$i}", site_url("praktikum/4/tugas/{$i}"), "no_{$i}.php"];
        }

        return $this->menu('Project 4', 'Perulangan PHP', [
            'Praktikum' => $praktikum,
            'Tugas'     => $tugas,
        ]);
    }

    public function latihan(int $n): string
    {
        $baris = [];

        switch ($n) {
            case 1: // while
                $bil = 1;
                while ($bil <= 3) {
                    $baris[] = "Nilai sekarang adalah {$bil}";
                    $bil++;
                }
                break;

            case 2:
                $bil = 1;
                while ($bil <= 3) {
                    $baris[] = (string) $bil;
                    $bil++;
                }
                $baris[] = "Nilai sekarang adalah {$bil}";
                break;

            case 3: // perulangan_3 dan perulangan_4 isinya sama di versi sebelumnya
            case 4:
                $bil = 5;
                while ($bil <= 100) {
                    if ($bil % 10 === 0) {
                        $baris[] = (string) $bil;
                    }
                    $bil++;
                }
                break;

            case 5: // for
                $bilangan = 0;
                for ($a = 1; $a <= 5; $a++) {
                    $baris[]  = "Bilangan Sekarang adalah {$bilangan}";
                    $bilangan = $bilangan + $a;
                }
                break;

            case 6: // for bersarang
                for ($a = 1; $a <= 3; $a++) {
                    for ($b = 1; $b <= 2; $b++) {
                        $baris[] = "Nilai a = {$a} Nilai b = {$b}";
                    }
                }
                break;

            case 7: // do while
                $d = 1;
                do {
                    $baris[] = "Perulangan ke-{$d}";
                    $d++;
                } while ($d <= 5);
                break;

            default:
                throw PageNotFoundException::forPageNotFound();
        }

        return $this->output("Perulangan {$n}", $baris);
    }

    public function tugas(int $n): string
    {
        $baris = [];

        switch ($n) {
            case 1:
                for ($a = 5; $a <= 100; $a++) {
                    if ($a % 10 === 0) {
                        $baris[] = (string) $a;
                    }
                }
                break;

            case 2:
                $bilangan = 0;
                for ($a = 2; $a <= 50; $a++) {
                    $baris[]  = "Bilangan Sekarang = {$bilangan}";
                    $awal     = $bilangan;
                    $bilangan = $bilangan + $a;
                    $baris[]  = "{$awal} +{$a} ={$bilangan}";
                }
                break;

            case 3:
                $jumlah = 0;
                for ($i = 3; $i <= 127; $i++) {
                    if ($i % 6 === 0) {
                        $jumlah++;
                        $baris[] = (string) $i;
                    }
                }
                $baris[] = "Banyak bilangan kelipatan 6 = {$jumlah}";
                break;

            default:
                throw PageNotFoundException::forPageNotFound();
        }

        return $this->output("Tugas Nomor {$n}", $baris);
    }
}
