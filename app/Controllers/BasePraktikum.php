<?php

namespace App\Controllers;

/**
 * Induk untuk controller praktikum.
 *
 * Menyediakan dua helper:
 *  - menu()   : halaman daftar latihan satu project (pengganti index.php
 *               + _template_index.php pada versi sebelumnya).
 *  - output() : menampilkan hasil latihan PHP (dulu langsung `echo`).
 */
abstract class BasePraktikum extends BaseController
{
    /** Nomor project/praktikum, diisi oleh controller turunan. */
    protected int $nomor = 0;

    /**
     * @param array<string, list<array{0:string,1:string,2?:string}>> $grup
     *        nama grup => [[label, url, nama file asli (opsional)], ...]
     */
    protected function menu(string $modul, string $topik, array $grup): string
    {
        return view('praktikum/menu', [
            'title' => $modul . ' - ' . $topik,
            'grup'  => $grup,
        ]);
    }

    /**
     * Baris yang didukung:
     *  'teks'            => teks biasa
     *  ''                => baris kosong (<br>)
     *  '---'             => garis (<hr>)
     *  ['teks']          => teks tebal (<strong>)
     *  ['h3' => 'teks']  => heading h1..h6
     *
     * @param list<string|array<int|string,string>> $baris
     */
    protected function output(string $judul, array $baris): string
    {
        return view('praktikum/output', [
            'judul'   => $judul,
            'baris'   => $baris,
            'kembali' => site_url('praktikum/' . $this->nomor),
        ]);
    }
}
