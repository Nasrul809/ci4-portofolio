<!DOCTYPE html>
<html lang="id">
<head>
    <?= $this->include('partials/head') ?>
</head>
<body>
    <main class="page-main page-main-menu">
        <div class="container">
            <div class="title-bar text-center">
                <h2><?= esc($title ?? 'Praktikum') ?></h2>
            </div>
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <?= $this->include('partials/footer') ?>
</body>
</html>
