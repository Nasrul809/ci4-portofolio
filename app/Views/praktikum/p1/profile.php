<?= $this->extend('praktikum/p1/layout') ?>

<?= $this->section('content') ?>
<?= $this->include('praktikum/p1/_nav') ?>
<img src="<?= base_url('assets/praktikum1/img/saya.jpg') ?>" alt="gambar" width="100">
<p>Nama = <?= esc($profil['nama']) ?> <br>
    Prodi = <?= esc($profil['prodi']) ?> <br>
    Alamat = <?= esc($profil['alamat']) ?></p>
<hr>
<p>
    Belajar Membuat Heading Pertama kali
</p>
<hr>
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<?= $this->endSection() ?>
