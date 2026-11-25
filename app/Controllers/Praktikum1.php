<?php

namespace App\Controllers;

/**
 * Project 1 - Dasar HTML (folder lama: Praktikum-Web-main).
 *
 *  index.html       -> home()
 *  prak1_nasrul.html -> profile()
 *  prak2_nasrul.html -> list()
 *  prak3_nasrul.html -> tabel()
 */
class Praktikum1 extends BasePraktikum
{
    protected int $nomor = 1;

    public function index(): string
    {
        return $this->menu('Project 1', 'Dasar HTML', [
            'Praktikum' => [
                ['Halaman Utama', site_url('praktikum/1/home'),    'index.html'],
                ['Praktikum 1',   site_url('praktikum/1/profile'), 'prak1_nasrul.html'],
                ['Praktikum 2',   site_url('praktikum/1/list'),    'prak2_nasrul.html'],
                ['Praktikum 3',   site_url('praktikum/1/tabel'),   'prak3_nasrul.html'],
            ],
        ]);
    }

    public function home(): string
    {
        return view('praktikum/p1/home', ['title' => 'Document', 'bg' => 'antiquewhite']);
    }

    public function profile(): string
    {
        return view('praktikum/p1/profile', [
            'title'  => 'Praktikum Web',
            'profil' => [
                'nama'   => 'Achmad Nasrul Hadi',
                'prodi'  => 'Sistem Informasi',
                'alamat' => 'Kabupate Nganjuk',
            ],
        ]);
    }

    public function list(): string
    {
        return view('praktikum/p1/list', [
            'title'    => 'Prakikum Web',
            'makanan'  => ['Bakso', 'Mie Ayam', 'Siomay'],
            // gaya bullet tiap daftar: default, circle, square
            'daftar'   => ['', 'circle', 'square'],
        ]);
    }

    public function tabel(): string
    {
        return view('praktikum/p1/tabel', [
            'title'  => 'Praktikum Web',
            'barang' => [
                ['kode' => 'P0001', 'nama' => 'Bakso',    'harga' => '12.000', 'gambar' => 'bakso.jpeg'],
                ['kode' => 'P0002', 'nama' => 'Mie Ayam', 'harga' => '11.000', 'gambar' => 'mie-ayam.jpeg'],
                ['kode' => 'P0003', 'nama' => 'Siomay',   'harga' => '10.000', 'gambar' => 'siomay.webp'],
            ],
        ]);
    }
}
