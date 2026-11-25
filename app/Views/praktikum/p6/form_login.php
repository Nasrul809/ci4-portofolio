<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/praktikum6/css/style.css') ?>">
</head>

<body>
    <div class="content">
        <p>LOGIN</p>
        <?= form_open('praktikum/6/login/proses') ?>
        <label for="username">Username : </label>
        <input type="text" name="username" id="username" placeholder="username"> <br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" placeholder="password"> <br>
        <input type="submit" name="login" value="Login">
        <?= form_close() ?>
    </div>

    <?php if (session()->has('alert')) : ?>
        <script>
            alert(<?= json_encode(session('alert'), JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>);
        </script>
    <?php endif; ?>
</body>

</html>
