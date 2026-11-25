<?= $this->extend('praktikum/p2/layout') ?>

<?= $this->section('content') ?>
<div class="portofolio">
    <h2>MY PORTOFOLIO</h2>
    <p>Hasil yang saya pelajari</p>

    <div class="card-container">
        <?php foreach ($modul as $m) : ?>
            <div class="card">
                <h3><?= esc($m['judul']) ?></h3>
                <?php foreach ($m['link'] as $i => [$label, $url]) : ?>
                    <a href="<?= esc($url, 'attr') ?>"><?= $i + 1 ?>. <?= esc($label) ?></a>
                <?php endforeach; ?>
                <p><?= esc($m['ket']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
