<?= $this->extend('praktikum/p1/layout') ?>

<?= $this->section('content') ?>
<?= $this->include('praktikum/p1/_nav') ?>
<table border="1" cellpadding="10">
    <tr>
        <td>Kode Barang</td>
        <td>Nama</td>
        <td>Harga</td>
        <td>Gambar</td>
    </tr>
    <?php foreach ($barang as $b) : ?>
        <tr>
            <td><?= esc($b['kode']) ?></td>
            <td><?= esc($b['nama']) ?></td>
            <td><?= esc($b['harga']) ?></td>
            <td><img src="<?= base_url('assets/praktikum1/img/' . $b['gambar']) ?>" alt="gambar" width="100px"></td>
        </tr>
    <?php endforeach; ?>
</table>
<hr>
<h2>Tabel</h2>
<table border="1" cellpadding="10">
    <tr>
        <td>haha</td>
        <td>haha</td>
        <td>haha</td>
        
    </tr>
    <tr>
        <td>haha</td>
        <td>haha</td>
        <td>haha</td>
    </tr>
    <tr>
        <td>haha</td>
        <td>haha</td>
        <td>haha</td>
    </tr>
</table>

<hr>
<table border="1" cellpadding="10">
    <tr>
        <td>haha</td>
        <td colspan="2">hha</td>
        <!-- <td>haha</td> -->
    </tr>
    <tr>
        <td rowspan="2">haha</td>
        <td>haha</td>
        <td>haha</td>
    </tr>
    <tr>
        <td>haha</td>
        <td>haha</td>
        <!-- <td>haha</td> -->
    </tr>
</table>

<hr>
<hr>

<table border="1" cellpadding="10">
    <tr>
        <td>haha</td>
        <td>haha</td>
        <td rowspan="3">haha</td>
    </tr>
    <tr>
        <td>haha</td>
        <td>haha</td>
        <!-- <td>haha</td> -->
    </tr>
    <tr>
        <td>haha</td>
        <td>haha</td>
        <!-- <td>haha</td> -->
    </tr>
</table>

<hr>
<hr>

<table border="1" cellpadding="10">
    <tr>
        <td>haha</td>
        <td>haha</td>
        <td>haha</td>
    </tr>
    <tr>
        <td colspan="3">haha</td>
        <!-- <td>haha</td>
        <td>haha</td> -->
    </tr>
    <tr>
        <td>haha</td>
        <td>haha</td>
        <td>haha</td>
    </tr>
</table>

<hr>
<hr>

<table border="1" cellpadding="10">
    <tr>
        <td>haha</td>
        <td>haha</td>
        <td>haha</td>
    </tr>
    <tr>
        <td>haha</td>
        <td>haha</td>
        <td>haha</td>
    </tr>
    <tr>
        <td colspan="3">haha</td>
        
    </tr>
</table>

<hr>
<hr>

<table border="1" cellpadding="10">
    <tr>
        <td rowspan="2">haha</td>
        <td>haha</td>
        <td>haha</td>
    </tr>
    <tr>
        <td>haha</td>
        <td rowspan="2">haha</td>
        <!-- <td>haha</td> -->
    </tr>
    <tr>
        <!-- <td>haha</td> -->
        <td>haha</td>
        <td>haha</td>
    </tr>
</table>
<hr>
<?= $this->endSection() ?>
