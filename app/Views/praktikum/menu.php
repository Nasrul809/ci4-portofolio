<?= $this->extend('layouts/praktikum') ?>

<?= $this->section('content') ?>
<a href="<?= site_url('/') ?>#project" class="btn btn-outline-dark mb-4">
    <i class="bi bi-arrow-left"></i> Kembali ke Project
</a>

<div class="row g-4">
    <?php foreach ($grup as $namaGrup => $items) : ?>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="fw-bold mb-3"><?= esc($namaGrup) ?></h4>
                    <div class="list-group list-group-flush">
                        <?php foreach ($items as $item) : ?>
                            <a href="<?= esc($item[1], 'attr') ?>" target="_blank" rel="noopener"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><?= esc($item[0]) ?></span>
                                <?php if (! empty($item[2])) : ?>
                                    <small class="text-muted"><?= esc($item[2]) ?></small>
                                <?php endif; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>
