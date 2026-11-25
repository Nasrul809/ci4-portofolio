<?= $this->extend('praktikum/p1/layout') ?>

<?= $this->section('styles') ?>
.judul {
    font-family: Arial, Helvetica, sans-serif;
    background-color: rgb(120, 12, 120);
    color: aliceblue;
    width: 180px;
    padding: 20px 20px 20px 20px;
}

#footer {
    background-color: aquamarine;
    width: 100px;
}
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="judul">
    <h1 class="judul">Judul Web</h1>
    <p>
        <a href="<?= site_url('praktikum/1/home') ?>">home</a>
        <a href="<?= site_url('praktikum/1/profile') ?>">Profile</a>
        <a href="<?= site_url('praktikum/1/tabel') ?>">Portofolio</a>
    </p>
</div>
<div id="content">
    <h2>Selamat Datang</h2>
    <?php for ($i = 0; $i < 5; $i++) : ?>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis debitis ipsum beatae tempora doloribus, corporis repellat sequi, quos quia exercitationem asperiores unde illum laborum deserunt sint porro temporibus est nam.</p>
    <?php endfor; ?>
</div>
<div id="footer">
    <footer>
        <p>&copy; Nasrul Hadi</p>
    </footer>
</div>
<?= $this->endSection() ?>
