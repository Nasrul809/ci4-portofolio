<?= $this->extend('praktikum/p1/layout') ?>

<?= $this->section('content') ?>
<?= $this->include('praktikum/p1/_nav') ?>
<h1>Daftar Makanan</h1>
<?php foreach ($daftar as $gaya) : ?>
    <ul <?= $gaya !== '' ? 'style="list-style-type: ' . esc($gaya, 'attr') . ';"' : '' ?>>
        <?php foreach ($makanan as $m) : ?>
            <li><?= esc($m) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
<?= $this->endSection() ?>
