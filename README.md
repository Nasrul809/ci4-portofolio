# Portofolio Achmad Nasrul Hadi - CodeIgniter 4

Landing page satu halaman + kumpulan praktikum web (Project 1-10), berbasis **Route -> Controller -> View**.

## Menjalankan
PHP 8.2+ (ekstensi `intl`, `mbstring`). Folder `vendor/` sudah ada, tidak perlu `composer install`.

    php spark serve

Buka http://localhost:8080 . Untuk XAMPP/Laragon ubah `app.baseURL` di `.env`
(mis. `http://localhost/project-ci4-portofolio/public/`).

## Peta URL
| Project | URL | Controller |
|---|---|---|
| Landing | `/` | `Home::index` |
| 1 Dasar HTML | `/praktikum/1` (+ `/home` `/profile` `/list` `/tabel`) | `Praktikum1` |
| 2 Dasar CSS | `/praktikum/2` (+ `/home` `/profil` `/portofolio` `/modul2/1..4`) | `Praktikum2` |
| 3 Dasar PHP | `/praktikum/3` (+ `/pertama` `/biodata` `/ketiga` `/tugas1` `/tugas2`) | `Praktikum3` |
| 4 Perulangan | `/praktikum/4` (+ `/latihan/1..7` `/tugas/1..3`) | `Praktikum4` |
| 5 Array | `/praktikum/5` (+ `/latihan/1..3` `/tugas/1..2`) | `Praktikum5` |
| 6 Form | `/praktikum/6` (+ `/form-teks` `/kalkulator` `/login` `/dashboard`) | `Praktikum6` |
| 7 Constructor | `/praktikum/7` | `Praktikum7` |
| 8 Pewarisan | `/praktikum/8` | `Praktikum8` |
| 9 Praktikum OOP | `/praktikum/9` | `Praktikum9` |
| 10 Setter & Getter | `/praktikum/10` | `Praktikum10` |

Login Project 6: `admin` / `12345678`. Class latihan OOP ada di `app/Libraries/Oop/`.
