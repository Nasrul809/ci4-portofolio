<?php

namespace App\Controllers;

use App\Libraries\Oop\SetterGetter\CaseMahasiswa;
use App\Libraries\Oop\SetterGetter\MahasiswaGetter;
use App\Libraries\Oop\SetterGetter\MahasiswaNama;
use App\Libraries\Oop\SetterGetter\MahasiswaTanpaSetter;
use App\Libraries\Oop\SetterGetter\MahasiswaValidasi;
use CodeIgniter\Exceptions\PageNotFoundException;
use Throwable;

/**
 * Project 10 - Setter & Getter (folder lama: setter&getter/Setter-Getter).
 * Class-nya ada di app/Libraries/Oop/SetterGetter.
 *
 *  latihan1..5.php     -> latihan(1..5)
 *  case_mahasiswa.php  -> caseMahasiswa()
 */
class Praktikum10 extends BasePraktikum
{
    protected int $nomor = 10;

    public function index(): string
    {
        return $this->menu('Project 10', 'Setter & Getter', [
            'Latihan' => [
                ['Latihan 1', site_url('praktikum/10/latihan/1'), 'latihan1.php'],
                ['Latihan 2', site_url('praktikum/10/latihan/2'), 'latihan2.php'],
                ['Latihan 3', site_url('praktikum/10/latihan/3'), 'latihan3.php'],
                ['Latihan 4', site_url('praktikum/10/latihan/4'), 'latihan4.php'],
                ['Latihan 5', site_url('praktikum/10/latihan/5'), 'latihan5.php'],
            ],
            'Case' => [
                ['Case Mahasiswa', site_url('praktikum/10/case-mahasiswa'), 'case_mahasiswa.php'],
            ],
        ]);
    }

    public function latihan(int $n): string
    {
        $baris = [];

        switch ($n) {
            case 1:
                // Latihan ini memang dibuat error: class belum punya setNama()/setNilai().
                // Di versi sebelumnya PHP menampilkan "Fatal error"; di sini ditangkap
                // supaya halaman tetap rapi.
                try {
                    $mhs1 = new MahasiswaTanpaSetter();
                    $mhs1->setNama('Andi');
                    $mhs1->setnilai('90');
                    $baris[] = 'Nama : ' . $mhs1->nama;
                } catch (Throwable $e) {
                    $baris[] = ['Error'];
                    $baris[] = $e->getMessage();
                }
                break;

            case 2:
                $mhs1 = new MahasiswaNama();
                $mhs1->setNama('Andi');
                $baris[] = 'Nama Mahasiswa: ' . $mhs1->getNama();
                break;

            case 3:
                $mhs1  = new MahasiswaGetter('2301001', 'Andi', 'Sistem Informasi');
                $baris = [
                    'NIM: ' . $mhs1->getNim(),
                    'Nama: ' . $mhs1->getNama(),
                    'Prodi: ' . $mhs1->getProdi(),
                ];
                break;

            case 4: // latihan4.php dan latihan5.php isinya sama
            case 5:
                $mhs1 = new MahasiswaValidasi();
                $mhs1->setNama('Andi');

                if (! $mhs1->setNilai(85)) {
                    $baris[] = 'Nilai harus berada antara 0 sampai 100.';
                }

                $baris[] = 'Nama: ' . $mhs1->getNama();
                $baris[] = 'Nilai: ' . $mhs1->getNilai();
                break;

            default:
                throw PageNotFoundException::forPageNotFound();
        }

        return $this->output("Latihan {$n}", $baris);
    }

    public function caseMahasiswa(): string
    {
        $mhs1 = new CaseMahasiswa('12345', 'arifin', 'Sistem Informasi', 7);
        $mhs1->setNilai(90);

        return $this->output('Case Mahasiswa', [
            'NIM : ' . $mhs1->getNim(),
            'Nama : ' . $mhs1->getNama(),
            'Prodi : ' . $mhs1->getProdi(),
            'Semester : ' . $mhs1->getSemester(),
            'Nilai : ' . $mhs1->getNilai(),
            $mhs1->tentukanGrade(),
        ]);
    }
}
