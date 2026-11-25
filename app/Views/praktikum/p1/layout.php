<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Praktikum Web') ?></title>
    <style>
        body {
            background-color: <?= esc($bg ?? 'whitesmoke', 'css') ?>;
        }

        a {
            padding-right: 10px;
        }

        <?= $this->renderSection('styles') ?>
    </style>
</head>

<body>
    <?= $this->renderSection('content') ?>
</body>

</html>
