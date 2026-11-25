<?= $this->extend('praktikum/p2/layout') ?>

<?= $this->section('content') ?>
<div class="content">
    <p>
        <?php for ($i = 0; $i < 4; $i++) : ?>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate necessitatibus veritatis nulla voluptas aut obcaecati animi ipsum non est voluptate, repellendus atque laudantium. Voluptates odio veritatis nostrum minima tenetur dolorum.
        <?php endfor; ?>
    </p>
</div>
<?= $this->endSection() ?>
