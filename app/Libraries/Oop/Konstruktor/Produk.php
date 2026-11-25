<?php

namespace App\Libraries\Oop\Konstruktor;

/** latihan3.php & pbl_produk.php - constructor dengan parameter dan nilai default. */
class Produk
{
    public string $kode;
    public string $nama;
    public float $harga;
    public int $stok;
    public float $diskon;
    public float $nilaiStok;

    public function __construct(string $kode, string $nama, float $harga, int $stok, float $diskon = 0)
    {
        $this->kode      = $kode;
        $this->nama      = $nama;
        $this->harga     = $harga;
        $this->stok      = $stok;
        $this->diskon    = $diskon; // Default 0 jika tidak diisi
        $this->nilaiStok = $this->hitungNilaiStok();
    }

    public function hitungHargaDiskon(): float
    {
        $potongan = $this->harga * ($this->diskon / 100);

        return $this->harga - $potongan;
    }

    public function hitungNilaiStok(): float
    {
        return $this->hitungHargaDiskon() * $this->stok;
    }

    /** @return list<string|array<string,string>> */
    public function tampilData(): array
    {
        $hargaAkhir = $this->hitungHargaDiskon();

        return [
            ['h3' => 'Data Produk'],
            'Kode : ' . $this->kode,
            'Nama : ' . $this->nama,
            'Harga Normal : Rp ' . number_format($this->harga, 0, ',', '.'),
            'Diskon : ' . $this->diskon . '%',
            'Harga Setelah Diskon : Rp ' . number_format($hargaAkhir, 0, ',', '.'),
            'Stok : ' . $this->stok,
            'Nilai Total Stok : Rp ' . number_format($this->nilaiStok, 0, ',', '.'),
        ];
    }
}
