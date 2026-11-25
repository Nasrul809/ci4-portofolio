<?php

namespace App\Libraries\Oop\SetterGetter;

/**
 * latihan1.php - properti private tanpa setter/getter.
 * Memanggil setNama() / setNilai() akan menghasilkan error (memang disengaja
 * sebagai bahan latihan), lihat Praktikum10::latihan().
 */
class MahasiswaTanpaSetter
{
    public $nama;
    private $nilai;
}
