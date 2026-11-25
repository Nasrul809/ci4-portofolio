<?php

namespace App\Libraries\Oop\SetterGetter;

/** latihan4.php & latihan5.php - setter dengan validasi nilai 0 - 100. */
class MahasiswaValidasi
{
    private string $nama;
    private ?int $nilai = null;

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    /** @return bool true bila nilai valid dan tersimpan */
    public function setNilai(int $nilai): bool
    {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;

            return true;
        }

        return false;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getNilai(): ?int
    {
        return $this->nilai;
    }
}
