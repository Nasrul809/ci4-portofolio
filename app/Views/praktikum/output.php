<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($judul) ?></title>
</head>

<body>
    <?php foreach ($baris as $b) : ?>
        <?php if (is_array($b) && ! isset($b[0])) : ?>
            <?php $tag = array_key_first($b); ?>
            <?php if (in_array($tag, ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'], true)) : ?>
                <<?= $tag ?>><?= esc($b[$tag]) ?></<?= $tag ?>>
            <?php endif; ?>
        <?php elseif (is_array($b)) : ?>
            <strong><?= esc($b[0]) ?></strong><br>
        <?php elseif ($b === '---') : ?>
            <hr>
        <?php elseif ($b === '') : ?>
            <br>
        <?php else : ?>
            <?= esc($b) ?><br>
        <?php endif; ?>
    <?php endforeach; ?>

    <hr>
    <a href="<?= esc($kembali, 'attr') ?>">&larr; Kembali ke daftar</a>
</body>

</html>
