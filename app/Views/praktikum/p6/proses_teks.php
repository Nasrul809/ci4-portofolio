<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>

<body>
    Nama : <?= esc($nama) ?><br>
    Tempat Lahir : <?= esc($tempat) ?><br>
    Tanggal Lahir : <?= esc($tgl) ?><br>
    Jenis Kelamin : <?= esc($jk) ?><br>
    agama : <?= esc($agama) ?><br>
    Alamat : <?= esc($alamat) ?><br>

    Hobi anda adalah : <?php foreach ($hobi as $h) : ?><?= esc($h) ?><br><?php endforeach; ?>

    <?php if ($foto['berhasil']) : ?>
        File berhasil diupload ke server pada folder <b><?= esc($foto['folder']) ?></b>
        <br><img src="<?= esc($foto['url'], 'attr') ?>" alt="Foto" width="150">
    <?php else : ?>
        File gagal diupload
        error : <?= esc($foto['error']) ?>
    <?php endif; ?>

    <hr>
    <a href="<?= site_url('praktikum/6/form-teks') ?>">&larr; Kembali ke form</a>
</body>

</html>
