<?php

namespace App\Controllers;

/**
 * Project 2 - Dasar CSS (folder lama: Praktikum_web_modul2-main).
 *
 *  index.html       -> home()
 *  profile.html     -> profil()
 *  portofolio.html  -> portofolio()
 *  modul2/prak1-4   -> modul2(1..4)
 *
 * "modul1" di project ini adalah salinan Project 1, jadi tautannya
 * diarahkan ke route Praktikum1 (tidak ada file ganda).
 */
class Praktikum2 extends BasePraktikum
{
    protected int $nomor = 2;

    public function index(): string
    {
        return $this->menu('Project 2', 'Dasar CSS', [
            'Halaman' => [
                ['Halaman Utama', site_url('praktikum/2/home'),       'index.html'],
                ['Profile',       site_url('praktikum/2/profil'),     'profile.html'],
                ['Portofolio',    site_url('praktikum/2/portofolio'), 'portofolio.html'],
            ],
            'Praktikum Modul 1 (lihat Project 1)' => [
                ['Halaman Utama', site_url('praktikum/1/home'),    'index.html'],
                ['Praktikum 1',   site_url('praktikum/1/profile'), 'prak1_nasrul.html'],
                ['Praktikum 2',   site_url('praktikum/1/list'),    'prak2_nasrul.html'],
                ['Praktikum 3',   site_url('praktikum/1/tabel'),   'prak3_nasrul.html'],
            ],
            'Praktikum Modul 2' => [
                ['Praktikum 1', site_url('praktikum/2/modul2/1'), 'prak1.html'],
                ['Praktikum 2', site_url('praktikum/2/modul2/2'), 'prak2.html'],
                ['Praktikum 3', site_url('praktikum/2/modul2/3'), 'prak3.html'],
                ['Praktikum 4', site_url('praktikum/2/modul2/4'), 'prak4.html'],
            ],
        ]);
    }

    public function home(): string
    {
        return view('praktikum/p2/home', [
            'title'  => 'Dasar CSS',
            'footer' => '©Achmad Nasrul Hadi',
        ]);
    }

    public function profil(): string
    {
        return view('praktikum/p2/profil', [
            'title'  => 'Profile',
            'footer' => '@Achmad Nasrul Hadi',
            'profil' => [
                'nama'   => 'Achmad Nasrul Hadi',
                'prodi'  => 'Sistem Informasi',
                'alamat' => 'Kabupaten Nganjuk',
            ],
            'tentang'    => 'Saya adalah mahasiswa Sistem Informasi di Institut Teknologi Mojosari',
            'skill'      => ['HTML Dasar', 'Java', 'CSS Dasar', 'Microsoft Word'],
            'pengalaman' => [
                'Membuat Aplikasi Kasir',
                'Membuat Aplikasi presensi berbasis QR code',
                'Membuat website sederhana menggunakan HTML & CSS',
                'Mengerjakan tugas praktikum Web Programming',
            ],
            'hobi'    => 'Coding, bermain game, dan Memancing',
            'kontak'  => ['email' => 'nasrul@email.com', 'instagram' => '@nsrlaee'],
        ]);
    }

    public function portofolio(): string
    {
        return view('praktikum/p2/portofolio', [
            'title'  => 'Document',
            'footer' => 'Web Programming  | © 2025 Achmad Nasrul Hadi',
            'modul'  => [
                [
                    'judul' => 'Modul 1',
                    'link'  => [
                        ['Praktikum 1', site_url('praktikum/1/profile')],
                        ['Praktikum 2', site_url('praktikum/1/list')],
                        ['Praktikum 3', site_url('praktikum/1/tabel')],
                    ],
                    'ket' => 'Belajar Heading, List dan Tabel',
                ],
                [
                    'judul' => 'Modul 2',
                    'link'  => [
                        ['Praktikum 1', site_url('praktikum/2/modul2/1')],
                        ['Praktikum 2', site_url('praktikum/2/modul2/2')],
                        ['Praktikum 3', site_url('praktikum/2/modul2/3')],
                    ],
                    'ket' => 'Belajar dasar CSS',
                ],
            ],
        ]);
    }

    /** modul2/prak1.html .. prak4.html */
    public function modul2(int $n): string
    {
        if ($n < 1 || $n > 4) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('praktikum/p2/modul2_prak' . $n);
    }
}
