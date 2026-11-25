<?php

namespace App\Controllers;

/**
 * Landing page satu halaman (Beranda, Portofolio, Project, Tentang, Kontak).
 * Semua data dikirim dari sini ke view home/index.
 */
class Home extends BaseController
{
    public function index(): string
    {
        // Daftar project praktikum -> dibagi dua kolom (5 kiri, 5 kanan)
        $project = [
            ['modul' => 'Project 1',  'topik' => 'Dasar HTML'],
            ['modul' => 'Project 2',  'topik' => 'Dasar CSS'],
            ['modul' => 'Project 3',  'topik' => 'Dasar PHP'],
            ['modul' => 'Project 4',  'topik' => 'Perulangan PHP'],
            ['modul' => 'Project 5',  'topik' => 'Array PHP'],
            ['modul' => 'Project 6',  'topik' => 'Form'],
            ['modul' => 'Project 7',  'topik' => 'Constructor'],
            ['modul' => 'Project 8',  'topik' => 'Pewarisan'],
            ['modul' => 'Project 9',  'topik' => 'Praktikum OOP'],
            ['modul' => 'Project 10', 'topik' => 'Setter & Getter'],
        ];

        foreach ($project as $i => &$p) {
            $p['url'] = site_url('praktikum/' . ($i + 1));
        }
        unset($p);

        $data = [
            'title' => 'Beranda',

            // Menu navbar: [id section, label]
            'menu' => [
                ['beranda',    'Beranda'],
                ['portofolio', 'Portofolio'],
                ['project',    'Project'],
                ['tentang',    'Tentang'],
                ['kontak',     'Kontak'],
            ],

            // Carousel pada bagian Beranda
            'slides' => [
                ['src' => 'assets/images/foto-1.jpeg', 'alt' => 'Foto 1'],
                ['src' => 'assets/images/foto-2.jpeg', 'alt' => 'Foto 2'],
                ['src' => 'assets/images/foto-3.jpeg', 'alt' => 'Foto 3'],
            ],

            // Kartu "Learn & Skills Programming"
            'skills' => [
                [
                    'judul'     => 'MySQL Database',
                    'deskripsi' => 'Mendesain dan mengelola database menggunakan MySQL.',
                    'gambar'    => 'assets/images/mysql.jpeg',
                    'url'       => 'https://www.mysql.com/',
                ],
                [
                    'judul'     => 'Java Programming',
                    'deskripsi' => 'Membangun aplikasi desktop menggunakan Java.',
                    'gambar'    => 'assets/images/java.jpeg',
                    'url'       => 'https://www.java.com/',
                ],
                [
                    'judul'     => 'PHP Programming',
                    'deskripsi' => 'Membangun website dinamis menggunakan PHP.',
                    'gambar'    => 'assets/images/php.jpeg',
                    'url'       => 'https://www.php.net/',
                ],
            ],

            // Dua kolom daftar project
            'daftarKiri'  => array_slice($project, 0, 5),
            'daftarKanan' => array_slice($project, 5),

            // Bagian "Tentang Saya"
            'profil' => [
                'nama'   => 'Achmad Nasrul Hadi',
                'nim'    => '202457201003',
                'prodi'  => 'Sistem Informasi',
                'kampus' => 'Institut Teknologi Mojosari',
                'foto'   => 'assets/images/saya.jpeg',
            ],

            // Bagian "Kontak"
            'kontak' => [
                ['nama' => 'Instagram', 'ikon' => 'bi-instagram', 'warna' => 'text-danger',  'label' => '@nsrlhdiii_',       'url' => 'https://instagram.com/nsrlhdiii_'],
                ['nama' => 'Facebook',  'ikon' => 'bi-facebook',  'warna' => 'text-primary', 'label' => 'Nasrul Aee',        'url' => 'https://facebook.com/'],
                ['nama' => 'WhatsApp',  'ikon' => 'bi-whatsapp',  'warna' => 'text-success', 'label' => '+62 822-3281-8710', 'url' => 'https://wa.me/6282232818710'],
            ],
        ];

        return view('home/index', $data);
    }
}
