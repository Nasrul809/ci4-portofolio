<?= $this->extend('layouts/landing') ?>

<?= $this->section('content') ?>

<!-- ===================== BERANDA ===================== -->
<section id="beranda" class="section-block">
    <div class="title-bar text-center">
        <h2>Selamat Datang di Website Nasrul</h2>
    </div>

    <div id="carouselBeranda" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php foreach ($slides as $i => $s) : ?>
                <button type="button" data-bs-target="#carouselBeranda" data-bs-slide-to="<?= $i ?>"
                    class="<?= $i === 0 ? 'active' : '' ?>"></button>
            <?php endforeach; ?>
        </div>
        <div class="carousel-inner">
            <?php foreach ($slides as $i => $s) : ?>
                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                    <img src="<?= base_url($s['src']) ?>" class="d-block w-100" alt="<?= esc($s['alt']) ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===================== PORTOFOLIO ===================== -->
<section id="portofolio" class="section-block">
    <div class="title-bar text-center">
        <h2>Portofolio</h2>
    </div>

    <div class="row g-4">
        <?php foreach ($skills as $item) : ?>
            <div class="col-md-4">
                <div class="card card-hover h-100">
                    <img src="<?= base_url($item['gambar']) ?>" class="card-img-top" alt="<?= esc($item['judul']) ?>">
                    <div class="card-body text-center d-flex flex-column">
                        <h4 class="fw-bold"><?= esc($item['judul']) ?></h4>
                        <p class="card-text text-muted"><?= esc($item['deskripsi']) ?></p>
                        <a href="<?= esc($item['url'], 'attr') ?>" target="_blank" rel="noopener" class="btn btn-primary mt-auto">
                            Kunjungi Website
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ===================== PROJECT ===================== -->
<section id="project" class="section-block">
    <div class="title-bar text-center">
        <h2>Project</h2>
    </div>

    <div class="row g-4">
        <?php foreach ([$daftarKiri, $daftarKanan] as $daftar) : ?>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="list-group list-group-flush">
                        <?php foreach ($daftar as $p) : ?>
                            <a href="<?= esc($p['url'], 'attr') ?>" target="_blank" rel="noopener"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3 px-4">
                                <span><strong><?= esc($p['modul']) ?></strong> &middot; <?= esc($p['topik']) ?></span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ===================== TENTANG ===================== -->
<section id="tentang" class="section-block">
    <div class="title-bar text-center">
        <h2>Tentang Saya</h2>
    </div>

    <div class="card">
        <div class="card-body p-4 p-md-5">
            <div class="row align-items-center g-4">
                <div class="col-md-4 text-center">
                    <img src="<?= base_url($profil['foto']) ?>" alt="<?= esc($profil['nama']) ?>"
                        class="img-fluid rounded-circle shadow foto-profil">
                </div>
                <div class="col-md-8">
                    <h3 class="fw-bold mb-3"><?= esc($profil['nama']) ?></h3>
                    <p><strong>NIM :</strong> <?= esc($profil['nim']) ?></p>
                    <p><strong>Program Studi :</strong> <?= esc($profil['prodi']) ?></p>
                    <p><strong>Perguruan Tinggi :</strong> <?= esc($profil['kampus']) ?></p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== KONTAK ===================== -->
<section id="kontak" class="section-block">
    <div class="title-bar text-center">
        <h2>Kontak</h2>
        <p class="mb-0 opacity-75">Silakan hubungi saya melalui media sosial berikut</p>
    </div>

    <div class="row g-4">
        <?php foreach ($kontak as $k) : ?>
            <div class="col-md-4">
                <a href="<?= esc($k['url'], 'attr') ?>" target="_blank" rel="noopener" class="text-decoration-none text-dark">
                    <div class="card card-hover h-100">
                        <div class="card-body text-center">
                            <i class="bi <?= esc($k['ikon'], 'attr') ?> fs-1 <?= esc($k['warna'], 'attr') ?>"></i>
                            <h4 class="mt-3 fw-bold"><?= esc($k['nama']) ?></h4>
                            <p class="text-muted mb-0"><?= esc($k['label']) ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?= $this->endSection() ?>