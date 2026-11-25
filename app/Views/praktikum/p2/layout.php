<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Dasar CSS') ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/praktikum2/css/style.css') ?>">
</head>

<body>
    <div class="container">

        <div class="header">
            <h1>Achmad Nasrul Hadi</h1>
            <p>SISTEM INFORMASI 24</p>
        </div>

        <div class="menu">
            <a href="<?= site_url('praktikum/2/home') ?>">Home</a> |
            <a href="<?= site_url('praktikum/2/profil') ?>">Profile</a> |
            <a href="<?= site_url('praktikum/2/portofolio') ?>">Portofolio</a>
        </div>

        <?= $this->renderSection('content') ?>

    </div>
    <div class="footer">
        <?= esc($footer ?? '') ?>
    </div>
</body>

</html>
