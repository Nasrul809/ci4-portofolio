<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

/**
 * Project 6 - Form (folder lama: Praktikum-Web-Modul7-main).
 *
 *  form_teks.php        -> formTeks()
 *  proses_teks.php      -> prosesTeks()
 *  kalkulator.php       -> kalkulator()
 *  proses_hitung.php    -> prosesHitung()
 *  tugas/form_login.php -> login()
 *  tugas/proses_login.php -> prosesLogin()
 *  tugas/dashboard.php  -> dashboard()
 */
class Praktikum6 extends BasePraktikum
{
    protected int $nomor = 6;

    /** Kredensial yang sama dengan versi sebelumnya (proses_login.php). */
    private const LOGIN_USERNAME = 'admin';
    private const LOGIN_PASSWORD = '12345678';

    /** Folder tujuan upload foto, relatif terhadap public/. */
    private const FOLDER_UPLOAD = 'uploads/praktikum6';

    public function index(): string
    {
        return $this->menu('Project 6', 'Form', [
            'Praktikum' => [
                ['Form Teks',  site_url('praktikum/6/form-teks'),  'form_teks.php'],
                ['Kalkulator', site_url('praktikum/6/kalkulator'), 'kalkulator.php'],
            ],
            'Tugas' => [
                ['Form Login', site_url('praktikum/6/login'), 'form_login.php'],
            ],
        ]);
    }

    // ------------------------------------------------------------------
    // form_teks.php + proses_teks.php
    // ------------------------------------------------------------------

    public function formTeks(): string
    {
        return view('praktikum/p6/form_text', [
            // [value yang dikirim => label yang tampil]
            'agama' => [
                'islam'    => 'Islam',
                'kristen'  => 'kristen',
                'Budha'    => 'Budha',
                'Hindu'    => 'Hindu',
                'Konghucu' => 'Konghucu',
            ],
            // [name checkbox => [value, label]]
            'hobi' => [
                'hobi1' => ['berenang',  'Berenang'],
                'hobi2' => ['berlari',   'Berlari'],
                'hobi3' => ['memancing', 'Memancing'],
                'hobi4' => ['membaca',   'Membaca'],
                'hobi5' => ['lainnya',   'Lainnya'],
            ],
        ]);
    }

    /**
     * @return RedirectResponse|string
     */
    public function prosesTeks()
    {
        $request = $this->request;

        // Hobi: checkbox hanya terkirim bila dicentang
        $hobi = [];

        foreach (['hobi1', 'hobi2', 'hobi3', 'hobi4', 'hobi5'] as $nama) {
            $nilai = $request->getPost($nama);

            if ($nilai !== null && $nilai !== '') {
                $hobi[] = $nilai;
            }
        }

        // Foto: opsional, tetapi bila diisi harus berupa gambar (maks. 2 MB)
        $foto = ['berhasil' => false, 'error' => UPLOAD_ERR_NO_FILE, 'folder' => '', 'url' => ''];
        $file = $request->getFile('file');

        if ($file !== null && $file->getError() !== UPLOAD_ERR_NO_FILE) {
            $valid = $this->validate([
                'file' => 'is_image[file]|max_size[file,2048]',
            ]);

            if (! $valid) {
                return redirect()->to(site_url('praktikum/6/form-teks'))
                    ->with('errors', $this->validator->getErrors());
            }

            $foto['error'] = $file->getError();

            if ($file->isValid() && ! $file->hasMoved()) {
                $namaBaru = $file->getRandomName();
                $file->move(FCPATH . self::FOLDER_UPLOAD, $namaBaru);

                $foto['berhasil'] = true;
                $foto['folder']   = self::FOLDER_UPLOAD . '/' . $namaBaru;
                $foto['url']      = base_url($foto['folder']);
            }
        }

        return view('praktikum/p6/proses_teks', [
            'nama'   => (string) $request->getPost('nama'),
            'tempat' => (string) $request->getPost('tempat'),
            'tgl'    => (string) $request->getPost('tgl'),
            'jk'     => (string) $request->getPost('jk'),
            'agama'  => (string) $request->getPost('agama'),
            'alamat' => (string) $request->getPost('alamat'),
            'hobi'   => $hobi,
            'foto'   => $foto,
        ]);
    }

    // ------------------------------------------------------------------
    // kalkulator.php + proses_hitung.php
    // ------------------------------------------------------------------

    public function kalkulator(): string
    {
        return view('praktikum/p6/kalkulator', [
            'operator' => [
                'tambah' => '+',
                'kurang' => '-',
                'kali'   => '*',
                'bagi'   => '/',
                'modulo' => '%',
            ],
        ]);
    }

    /**
     * @return RedirectResponse|string
     */
    public function prosesHitung()
    {
        $valid = $this->validate([
            'angka1'   => 'required|numeric',
            'angka2'   => 'required|numeric',
            'operator' => 'required|in_list[tambah,kurang,kali,bagi,modulo]',
        ]);

        if (! $valid) {
            return redirect()->to(site_url('praktikum/6/kalkulator'))
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $angka1   = $this->request->getPost('angka1') + 0;
        $angka2   = $this->request->getPost('angka2') + 0;
        $operator = (string) $this->request->getPost('operator');
        $error    = false;
        $hasil    = null;

        if ($operator === 'tambah') {
            $hasil = $angka1 + $angka2;
        } elseif ($operator === 'kurang') {
            $hasil = $angka1 - $angka2;
        } elseif ($operator === 'kali') {
            $hasil = $angka1 * $angka2;
        } elseif ($operator === 'bagi' && $angka2 != 0) {
            $hasil = $angka1 / $angka2;
        } elseif ($operator === 'modulo' && (int) $angka2 !== 0) {
            $hasil = (int) $angka1 % (int) $angka2;
        } else {
            // pembagi 0 pada "bagi" maupun "modulo"
            $error = true;
        }

        return view('praktikum/p6/hasil_hitung', [
            'angka1'   => $angka1,
            'angka2'   => $angka2,
            'operator' => $operator,
            'hasil'    => $hasil,
            'error'    => $error,
        ]);
    }

    // ------------------------------------------------------------------
    // tugas: form_login.php, proses_login.php, dashboard.php
    // ------------------------------------------------------------------

    public function login(): string
    {
        return view('praktikum/p6/form_login');
    }

    public function prosesLogin(): RedirectResponse
    {
        $username = (string) $this->request->getPost('username');
        $password = (string) $this->request->getPost('password');

        if ($username === '' || $password === '') {
            return $this->kembaliKeLogin('Username atau Password tidak boleh kosong');
        }

        if ($username === self::LOGIN_USERNAME && $password === self::LOGIN_PASSWORD) {
            return redirect()->to(site_url('praktikum/6/dashboard'));
        }

        return $this->kembaliKeLogin('Username atau Password salah, silahkan coba lagi');
    }

    public function dashboard(): string
    {
        return view('praktikum/p6/dashboard');
    }

    /**
     * Versi sebelumnya memakai alert() JavaScript lalu pindah ke form_login.php.
     * Di CI4 pesannya dikirim lewat flashdata dan ditampilkan sebagai alert()
     * oleh view form_login.
     */
    private function kembaliKeLogin(string $pesan): RedirectResponse
    {
        return redirect()->to(site_url('praktikum/6/login'))->with('alert', $pesan);
    }
}
