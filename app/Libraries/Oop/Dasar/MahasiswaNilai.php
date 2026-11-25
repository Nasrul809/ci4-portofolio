<?php

namespace App\Libraries\Oop\Dasar;

/** mahasiswa.php - class dengan method tampilkanData() dan tentukanGrade(). */
class MahasiswaNilai
{
    public string $nim;
    public string $nama;
    public string $prodi;
    public int $nilai;

    /** @return list<string> */
    public function tampilkanData(): array
    {
        return [
            'NIM : ' . $this->nim,
            'Nama : ' . $this->nama,
            'Prodi : ' . $this->prodi,
            'Nilai : ' . $this->nilai,
            'Grade : ' . $this->tentukanGrade(),
            '',
        ];
    }

    public function tentukanGrade(): string
    {
        if ($this->nilai >= 80) {
            return 'A';
        }

        if ($this->nilai >= 70) {
            return 'B';
        }

        if ($this->nilai >= 60) {
            return 'C';
        }

        return 'D';
    }
}
