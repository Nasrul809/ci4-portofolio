<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//halaman (Beranda, Portofolio, Project, Tentang, Kontak)
$routes->get('/', 'Home::index');

// Semua project praktikum
$routes->group('praktikum', static function (RouteCollection $routes): void {
    // Project 1 - Dasar HTML
    $routes->get('1', 'Praktikum1::index');
    $routes->get('1/home', 'Praktikum1::home');
    $routes->get('1/profile', 'Praktikum1::profile');
    $routes->get('1/list', 'Praktikum1::list');
    $routes->get('1/tabel', 'Praktikum1::tabel');

    // Project 2 - Dasar CSS
    $routes->get('2', 'Praktikum2::index');
    $routes->get('2/home', 'Praktikum2::home');
    $routes->get('2/profil', 'Praktikum2::profil');
    $routes->get('2/portofolio', 'Praktikum2::portofolio');
    $routes->get('2/modul2/(:num)', 'Praktikum2::modul2/$1');

    // Project 3 - Dasar PHP
    $routes->get('3', 'Praktikum3::index');
    $routes->get('3/pertama', 'Praktikum3::pertama');
    $routes->get('3/biodata', 'Praktikum3::biodata');
    $routes->get('3/ketiga', 'Praktikum3::ketiga');
    $routes->get('3/tugas1', 'Praktikum3::tugas1');
    $routes->get('3/tugas2', 'Praktikum3::tugas2');

    // Project 4 - Perulangan PHP
    $routes->get('4', 'Praktikum4::index');
    $routes->get('4/latihan/(:num)', 'Praktikum4::latihan/$1');
    $routes->get('4/tugas/(:num)', 'Praktikum4::tugas/$1');

    // Project 5 - Array PHP
    $routes->get('5', 'Praktikum5::index');
    $routes->get('5/latihan/(:num)', 'Praktikum5::latihan/$1');
    $routes->get('5/tugas/(:num)', 'Praktikum5::tugas/$1');

    // Project 6 - Form (teks + upload, kalkulator, login)
    $routes->get('6', 'Praktikum6::index');
    $routes->get('6/form-teks', 'Praktikum6::formTeks');
    $routes->post('6/proses-teks', 'Praktikum6::prosesTeks');
    $routes->get('6/kalkulator', 'Praktikum6::kalkulator');
    $routes->post('6/proses-hitung', 'Praktikum6::prosesHitung');
    $routes->get('6/login', 'Praktikum6::login');
    $routes->post('6/login/proses', 'Praktikum6::prosesLogin');
    $routes->get('6/dashboard', 'Praktikum6::dashboard');

    // Project 7 - Constructor
    $routes->get('7', 'Praktikum7::index');
    $routes->get('7/latihan/(:num)', 'Praktikum7::latihan/$1');
    $routes->get('7/pbl-produk', 'Praktikum7::pblProduk');
    $routes->get('7/tugas', 'Praktikum7::tugas');

    // Project 8 - Pewarisan
    $routes->get('8', 'Praktikum8::index');
    $routes->get('8/latihan/(:num)', 'Praktikum8::latihan/$1');
    $routes->get('8/pbl', 'Praktikum8::pbl');

    // Project 9 - Praktikum OOP
    $routes->get('9', 'Praktikum9::index');
    $routes->get('9/prosedural', 'Praktikum9::prosedural');
    $routes->get('9/oop', 'Praktikum9::oop');
    $routes->get('9/mahasiswa', 'Praktikum9::mahasiswa');
    $routes->get('9/tugas', 'Praktikum9::tugas');

    // Project 10 - Setter & Getter
    $routes->get('10', 'Praktikum10::index');
    $routes->get('10/latihan/(:num)', 'Praktikum10::latihan/$1');
    $routes->get('10/case-mahasiswa', 'Praktikum10::caseMahasiswa');
});
