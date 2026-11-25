<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>

<body>
    <?php if (session()->has('errors')) : ?>
        <ul style="color: red;">
            <?php foreach (session('errors') as $e) : ?>
                <li><?= esc($e) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?= form_open('praktikum/6/proses-hitung', ['id' => 'form_teks', 'name' => 'form_teks']) ?>
    <table width="400" cellspacing="0" cellpadding="3">
        <tr>
            <td>Angka 1</td>
            <td>:<input type="text" name="angka1" value="<?= esc(old('angka1') ?? '', 'attr') ?>" /></td>
        </tr>
        <tr>
            <td>Operator</td>
            <td>
                <?php foreach ($operator as $nilai => $simbol) : ?>
                    <input type="radio" name="operator" value="<?= esc($nilai, 'attr') ?>" <?= old('operator') === $nilai ? 'checked' : '' ?>> <?= esc($simbol) ?>
                <?php endforeach; ?>
            </td>
        </tr>
        <tr>
            <td>Angka 2</td>
            <td>:<input type="text" name="angka2" value="<?= esc(old('angka2') ?? '', 'attr') ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><br><input name="submit" type="submit" value="Hitung">
                <input name="Reset" type="reset" value="CLEAR"></td>
        </tr>
    </table>
    <?= form_close() ?>

    <hr>
    <a href="<?= site_url('praktikum/6') ?>">&larr; Kembali ke daftar</a>
</body>

</html>
