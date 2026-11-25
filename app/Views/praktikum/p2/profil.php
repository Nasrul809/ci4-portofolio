<?= $this->extend('praktikum/p2/layout') ?>

<?= $this->section('content') ?>
<div class="content profile">

    <img src="<?= base_url('assets/praktikum2/img/Nasrul.jpeg') ?>" width="120" alt="Foto <?= esc($profil['nama']) ?>">
    <div class="profile">
        <p>
            Nama   : <?= esc($profil['nama']) ?> <br>
            Prodi  : <?= esc($profil['prodi']) ?> <br>
            Alamat : <?= esc($profil['alamat']) ?> <br>
        </p>
    </div>

    <div class="tentang">
        <h3>Tentang Saya</h3>
        <p><?= esc($tentang) ?></p>
    </div>

    <div class="skill">
        <h3>Skill</h3>
        <ul>
            <?php foreach ($skill as $s) : ?>
                <li><?= esc($s) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div>
        <h3>Pengalaman</h3>
        <p>
            <?php foreach ($pengalaman as $p) : ?>
                - <?= esc($p) ?> <br>
            <?php endforeach; ?>
        </p>
    </div>

    <h3>Hobi</h3>
    <p><?= esc($hobi) ?></p>

    <h3>Kontak</h3>
    <p>
        Email: <?= esc($kontak['email']) ?> <br>
        Instagram: <?= esc($kontak['instagram']) ?>
    </p>
</div>
<?= $this->endSection() ?>
