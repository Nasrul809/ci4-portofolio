<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Hitung</title>
</head>

<body>
    <br>
    Hasil dari <?= esc($angka1) ?> di<?= esc($operator) ?> <?= esc($angka2) ?> =
    <?php if ($error) : ?>
        <b>Error Pembagi 0</b>
    <?php else : ?>
        <?= esc($hasil) ?>
    <?php endif; ?>

    <hr>
    <a href="<?= site_url('praktikum/6/kalkulator') ?>">&larr; Kembali ke kalkulator</a>
</body>

</html>
