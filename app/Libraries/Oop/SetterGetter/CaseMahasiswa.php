<?php

namespace App\Libraries\Oop\SetterGetter;

/** case_mahasiswa.php - setter, getter, dan penentuan grade. */
class CaseMahasiswa
{
    private ?int $nilai;

    public function __construct(
        private string $nim,
        private string $nama,
        private string $prodi,
        private int $semester,
    ) {
        $this->nilai = null;
    }

    public function setNim(string $nim): void
    {
        $this->nim = $nim;
    }

    public function getNim(): string
    {
        return $this->nim;
    }

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function setProdi(string $prodi): void
    {
        $this->prodi = $prodi;
    }

    public function getProdi(): string
    {
        return $this->prodi;
    }

    public function setSemester(int $semester): void
    {
        $this->semester = $semester;
    }

    public function getSemester(): int
    {
        return $this->semester;
    }

    public function setNilai(?int $nilai): void
    {
        $this->nilai = $nilai;
    }

    public function getNilai(): int|string
    {
        if ($this->nilai === null || $this->nilai < 0 || $this->nilai > 100) {
            return 'Nilai keluar dari range 0 - 100';
        }

        return $this->nilai;
    }

    public function tentukanGrade(): string
    {
        if ($this->nilai === null || $this->nilai < 0 || $this->nilai > 100) {
            return 'Grade : Tidak dapat menentukan grade (Nilai tidak valid)';
        }

        if ($this->nilai >= 80) {
            return 'Grade : A';
        }

        if ($this->nilai >= 70) {
            return 'Grade : B';
        }

        if ($this->nilai >= 60) {
            return 'Grade : C';
        }

        if ($this->nilai >= 50) {
            return 'Grade : D';
        }

        return 'Grade : E';
    }
}
