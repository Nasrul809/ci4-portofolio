<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <?php if (session()->has('errors')) : ?>
        <ul style="color: red;">
            <?php foreach (session('errors') as $e) : ?>
                <li><?= esc($e) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?= form_open_multipart('praktikum/6/proses-teks') ?>
    Nama : <input type="text" name="nama"><br>
    Tempat <input type="text" name="tempat"> <br>
    Tanggal lahir :<br>
    <input type="date" name="tgl"><br>
    Jenis kelamin : <br>
    <input type="radio" name="jk" value="Laki-Laki"> Laki-laki <br>
    <input type="radio" name="jk" value="Perempuan"> Perempuan <br>
    Agama :
    <select name="agama">
        <?php foreach ($agama as $nilai => $label) : ?>
            <option value="<?= esc($nilai, 'attr') ?>"><?= esc($label) ?></option>
        <?php endforeach; ?>
    </select> <br><br>
    Alamat : <textarea name="alamat"></textarea> <br> <br>
    Hobi : <br>
    <?php foreach ($hobi as $name => [$nilai, $label]) : ?>
        <input type="checkbox" name="<?= esc($name, 'attr') ?>" value="<?= esc($nilai, 'attr') ?>"> <?= esc($label) ?> <br>
    <?php endforeach; ?>
    <br><br>
    Masukkan Foto : <input type="file" name="file"> <br><br>
    <input type="submit" value="kirim">
    <?= form_close() ?>

    <hr>
    <a href="<?= site_url('praktikum/6') ?>">&larr; Kembali ke daftar</a>
</body>

</html>
