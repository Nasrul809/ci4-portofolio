<!DOCTYPE html>
<html lang="id">

<head>
    <?= $this->include('partials/head') ?>
</head>

<body data-bs-spy="scroll" data-bs-target="#menu" data-bs-offset="100" tabindex="0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= site_url('/') ?>">Punya Nasrul</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <?php foreach ($menu as [$anchor, $label]) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#<?= esc($anchor, 'attr') ?>"><?= esc($label) ?></a>
                        </li>
                    <?php endforeach; ?>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a href="<?= site_url('praktikum/6/login') ?>" class="btn btn-primary rounded-pill px-4" target="_blank" rel="noopener">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="page-main">
        <div class="container">
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <?= $this->include('partials/footer') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>